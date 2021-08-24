<?php

namespace App\Http\Controllers;
use App\User;
use App\TipoDocumento;
use App\EstadoCivil;
use App\Genero;
use App\Pais;
use App\Provincia;
use App\Localidad;
use App\Users;
use App\TipoRelacionLaboral;
use App\Actividad;
use App\Domicilio;
use App\FotosConfiguracion;
use App\FotosRegistro;
use App\Registros;
use Carbon\Carbon;
use App\Http\Requests\UpdateRegistroStateRequest;

use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Http;
use PDF;
use Illuminate\Support\Facades\Log;
use mikehaertl\pdftk\Pdf AS pdftk;

class FormularioController extends Controller
{
    public function nuevoPdf($id){
        $usuario = DB::table('users')->select('id','created_at')
            ->where('id', '=', $id)
            ->get();
        //dump("usuario", $usuario);
        $registro = DB::table('registros')
                ->select('registros.name','registros.surname','registros.user_id',
                        'registros.personaexpuesta as personaexpuesta',
                        'registros.inversor_calificado',
                         'registros.email',
                         'registros.fechanac',
                         'registros.nro',
                         'registros.celular',
                         'registros.cuit',
                         'registros.sujetoobligado',
                         'registros.residenciaexterior',
                         'registros.cp',
                         'paisdir.name as pais',
                         'registros.calle',
                         'registros.pisodto',
                         'registros.motivo',
                         'registros.dni_frente',
                         'registros.ide_tribu',
                         'registros.pais_id_otra_residencia',
                         'registros.dni_dorso',
                         'registros.selfi',
                         'registros.archivo_1',
                         'registros.archivo_2',
                         'registros.tieneagente',
                         'registros.aagi',
                         'registros.agente',
                         'registros.archivo_3',
                         'registros.servicio',
                         'registros.calle_nro',
                         'registros.cod_area',
                         'estado_civiles.NAME AS estado_civil',
                         'generos.NAME AS genero',
                         'paisnac.NAME AS nacionalidad',
                         'provincias.NAME AS provincia',
                         'localidads.NAME AS localidad',
                         'registros.genero_id as genero_id',
                         'tipo_documentos.name as tipo_documento',
                         'registros.name_pareja',
                         'tipo_documentos1.name as tipo_documento_pareja',
                         'registros.nro_dni_pareja')
            ->leftjoin('estado_civiles','estado_civiles.id','registros.estado_civil_id')
            ->leftjoin('generos','generos.id','registros.genero_id')
            ->leftjoin('paises as paisnac','paisnac.id','registros.pais_id')
            ->leftjoin('paises as paisdir','paisdir.id','registros.direccion_pais_id')
            ->leftjoin('provincias','provincias.id','registros.provincia_id')
            ->leftjoin('localidads','localidads.id','registros.localidad_id')
            ->leftjoin('tipo_documentos as tipo_documentos','tipo_documentos.id','registros.tipo_docuemnto_id')
            ->leftjoin('tipo_documentos as tipo_documentos1','tipo_documentos1.id','registros.tipo_docuemnto_pareja_id')
            ->where('registros.user_id', '=', $id)
            ->first();

        //dump("registro", $registro);
        //$autorizados    = $this->consultaRegistros($id,'users.user_orig_id');

        $autorizados = DB::table('registros')
            ->select(
                'registros.user_id as id_autorizado',
                'registros.name',
                'registros.surname',
                'registros.personaexpuesta as personaexpuesta',
                'registros.inversor_calificado',
                'registros.email',
                'registros.fechanac',
                'registros.nro',
                'registros.celular',
                'registros.cuit',
                'registros.sujetoobligado',
                'registros.residenciaexterior',
                'registros.cp',
                'paisdir.name as pais',
                'registros.pais_id_otra_residencia',
                'registros.calle',
                'registros.pisodto',
                'registros.motivo',
                'registros.ide_tribu',
                'registros.tieneagente',
                'registros.aagi',
                'registros.agente',
                'registros.dni_frente',
                'registros.dni_dorso',
                'registros.selfi',
                'registros.archivo_1',
                'registros.archivo_2',
                'registros.archivo_3',
                'registros.servicio',
                'registros.calle_nro',
                'registros.cod_area',
                'estado_civiles.NAME AS estado_civil',
                'generos.NAME AS genero',
                'paisnac.NAME AS nacionalidad',
                'provincias.NAME AS provincia',
                'localidads.NAME AS localidad',
                'registros.genero_id as genero_id',
                'tipo_documentos.name as tipo_documento',
                'actividades.NAME AS actividad',
                'tipo_relacion_laborales.NAME AS relacion_laboral',
                'registros.name_pareja',
                'tipo_documentos1.name as tipo_documento_pareja',
                'registros.nro_dni_pareja')
            ->leftjoin('estado_civiles','estado_civiles.id','registros.estado_civil_id')
            ->leftjoin('generos','generos.id','registros.genero_id')
            ->leftjoin('paises as paisnac','paisnac.id','registros.pais_id')
            ->leftjoin('paises as paisdir','paisdir.id','registros.direccion_pais_id')
            ->leftjoin('provincias','provincias.id','registros.provincia_id')
            ->leftjoin('localidads','localidads.id','registros.localidad_id')
            ->leftjoin('users','users.id','registros.user_id')
            ->leftjoin('tipo_documentos','tipo_documentos.id','registros.tipo_docuemnto_id')
            ->leftjoin('datos_laborales_registro','datos_laborales_registro.registro_id','registros.user_id')
            ->leftjoin('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->leftjoin('actividades','actividades.id','datos_laborales_registro.actividad_id')
            ->leftjoin('tipo_documentos as tipo_documentos1','tipo_documentos1.id','registros.tipo_docuemnto_pareja_id')
            ->where('users.user_orig_id', '=', $id)
            ->get()->toArray();
        if(isset($autorizados[0])){
            $autorizados = $autorizados[0];
        };

        $declaracionJurada = DB::table('datos_laborales_registro')
                            ->select('actividad_id AS actividad', 'tipo_relacion_laborales.name AS relacion_laboral')
            ->join('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->where('datos_laborales_registro.registro_id', '=', $id)
            ->first();

        $declaracionJuradaCo = DB::table('datos_laborales_registro')
                                   ->select('actividad_id AS actividad', 'tipo_relacion_laborales.name AS relacion_laboral')
            ->join('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->join('users','users.id','datos_laborales_registro.registro_id')
            ->where('users.user_orig_id', '=', $id)
        ->first();

        $testInversor = DB::table('test_inversor')->select('pregunta1','pregunta2','pregunta3','pregunta4','pregunta5','pregunta6','pregunta7','pregunta8','pregunta9')
            ->where('id', '=', $id)
            ->first();

        $sumaTestInversor = DB::table('test_inversor')->select(DB::raw("pregunta1 + pregunta2 + pregunta3 + pregunta4 + pregunta5 +  pregunta6 +  pregunta7 +  pregunta8 +  pregunta9 as total"))
            ->where('id', '=', $id)
            ->first();
        //$data = ['registro' => $registro, 'declaracionJurada' => $declaracionJurada, 'declaracionJuradaCo' => $declaracionJuradaCo, 'id' => $id, 'usuario' => $usuario, 'autorizados' => $autorizados, 'testInversor' => $testInversor, 'sumaTestInversor' => $sumaTestInversor];
        //dump("data", $data);
        $caract = "";
        if ($sumaTestInversor) {
            if($sumaTestInversor->total<=16){
                $caract = "Conservador";
            }else if($sumaTestInversor->total>=17 && $sumaTestInversor->total<=25){
                $caract = "Moderado";
            }else if($sumaTestInversor->total>25){
                $caract = "Agresivo";
            }
        }
        // Create FDF from PDF
        $pdf = new pdftk(public_path('pdf/formulario_de_apertura.pdf'));
        $file = public_path('pdf/Formulario de apertura - '. $registro->name .'_'.date("Ymdhis").'.pdf');
        //$file = public_path('pdf/formulario_de_apertura_'.date("Ymdhis").'_'.rand().'.pdf');
        //$result = $pdf->generateFdfFile(public_path('pdf/formulario_de_apertura.fdf'));
        $result = $pdf->fillForm([
            'Nombre_apellido_tit1'=> $registro->name." ".$registro->surname,
            'Nombre_apellido_tit2' => (isset($autorizados->name) ? $autorizados->name." ".$autorizados->surname : ""),
            'DiaNac_tit1' => \Carbon\Carbon::parse($registro->fechanac)->format("d/m/Y"),
            'DiaNac_tit2' => (isset($autorizados->fechanac) ? \Carbon\Carbon::parse($registro->fechanac)->format("d/m/Y") : ""),
            //'Lugar_tit1' => 'Lugar_tit1 valor',
            //'Lugar_tit2' => 'Lugar_tit2 valor',
            'Nacionalidad_tit1' => $registro->nacionalidad,
            'Nacionalidad_tit2' => (isset($autorizados->nacionalidad) ? $registro->nacionalidad : ""),
            'Tipo documento_tit1' => $registro->tipo_documento,
            'Tipo documento_tit2' => (isset($autorizados->tipo_documento) ? $registro->tipo_documento : ""),
            'Estado civil_tit1' => $registro->estado_civil,
            'Estado civil_tit2' => (isset($autorizados->estado_civil) ? $registro->estado_civil : ""),
            'Genero_tit1' => $registro->genero,
            'Genero_tit2' => (isset($autorizados->genero) ? $registro->genero : ""),
            'Celular_tit1' => $registro->cod_area."-".$registro->celular,
            'Celular_tit2' => (isset($autorizados->celular) ? $autorizados->cod_area." ".$autorizados->celular : ""),
            'Email_tit1' => $registro->email,
            'Email_tit2' => (isset($autorizados->email) ? $registro->email : ""),
            
            'Calle_tit1' => $registro->calle." ".$registro->calle_nro,
            'Calle_tit2' => (isset($autorizados->calle) ? $autorizados->calle." ".$autorizados->calle_nro : ""),
            'Piso_tit1' => $registro->pisodto,
            'Piso_tit2' => (isset($autorizados->pisodto) ? $registro->pisodto : ""),
            'CP_tit1' => $registro->cp,
            'CP_tit2' => (isset($autorizados->cp) ? $registro->cp : ""),
            'Localidad_tit1' => $registro->localidad,
            'Localidad_tit2' => (isset($autorizados->localidad) ? $registro->localidad : ""),
            'Provincia_tit1' => $registro->provincia,
            'Provincia_tit2' => (isset($autorizados->provincia) ? $registro->provincia : ""),
            'Pais_tit1' => $registro->pais,
            'Pais_tit2' => (isset($autorizados->pais) ? $registro->pais : ""),

            'cuit_tit1' => $registro->cuit,
            'cuit_tit2' => (isset($autorizados->cuit) ? $registro->cuit : ""),

            'Profesion_tit1' => ($declaracionJurada ? $declaracionJurada->relacion_laboral." / ".$declaracionJurada->actividad : ""),
            'Profesion_tit2' => ($declaracionJuradaCo ? $declaracionJuradaCo->relacion_laboral." / ".$declaracionJuradaCo->actividad : ""),

            'NombreCony_tit1' => (isset($registro->name_pareja) ? $registro->name_pareja : ""),
            'NombreCony_tit2' => (isset($autorizados->name_pareja) ? $registro->name_pareja : ""),
            //'ApellidoCony_tit1' => 'ApellidoCony_tit1 valor',
            //'ApellidoCony_tit2' => 'ApellidoCony_tit2 valor',
            'Cuit cuil dni_tit1' => (isset($registro->nro_dni_pareja) ? $registro->nro_dni_pareja : ""),
            'Cuit cuil dni_tit2' => (isset($autorizados->nro_dni_pareja) ? $registro->nro_dni_pareja : ""),

            'NombrePEP_tit1' => $registro->name." ".$registro->surname,
            'si_no_pep_tit1' => ($registro->personaexpuesta == 1 ? "No" : "Si"),
            'MotivoPEP_tit1' => ($registro->personaexpuesta == 2 ? $registro->motivo : ""),
            'Documento Tipo3_tit1' => $registro->tipo_documento,
            'NumeroPEP_tit1' => $registro->nro,
            'Pais y Autoridad de Emisionpep_tit1' => $registro->nacionalidad,
            //'Caracter invocado4_tit1' => 'Caracter invocado4_tit1 valor',
            'Numero_2_tit1' => $registro->cuit,
            //'Lugar y fecha_tit1' => 'Lugar y fecha_tit1 valor',
            'domicilio extranjero si no_tit1' => ($registro->inversor_calificado == 1 ? "No soy Inversor Calificado" : "Soy Inversor Calificado"),
            'residenciafiscal_tit1' => ($registro->residenciaexterior == 1 ? "No" : "Si"),
            'identifiaciontributaria_ti1' => ($registro->residenciaexterior == 1 ? $registro->ide_tribu : ""),
            'leyfacta_tit1' => ($registro->pais_id_otra_residencia == 60 ? "Si" : "No"),
            'SujetoObligado_tit1' => ($registro->sujetoobligado == 1 ? "No" : "Si"),

            'NombrePEP_tit2' => ($autorizados && isset($autorizados->name) ? $autorizados->name." ".$autorizados->surname : ""),
            'si_no_pep_tit2' => ($autorizados ? ($autorizados->personaexpuesta == 1 ? "No" : "Si") : ""),
            'MotivoPEP_tit2' => ($autorizados && $autorizados->personaexpuesta == 2 ? $autorizados->motivo : ""),
            'Documento Tipo3_tit2' => ($autorizados && isset($autorizados->tipo_documento) ? $registro->tipo_documento : ""),
            'NumeroPEP_tit2' => ($autorizados && isset($autorizados->nro) ? $registro->nro : ""),
            'Pais y Autoridad de Emisionpep_tit2' => ($autorizados && isset($autorizados->nacionalidad) ? $registro->nacionalidad : ""),
            //'Caracter invocado4_tit2' => 'Caracter invocado4_tit2 valor',
            'Numero_2_tit2' => ($autorizados && isset($autorizados->cuit) ? $registro->cuit : ""),
            //'Lugar y fecha_tit2' => 'Lugar y fecha_tit2 valor',
            'domicilio extranjero si no_tit2' => ($autorizados && $autorizados->inversor_calificado == 1 ? "No soy Inversor Calificado" : "Soy Inversor Calificado"),
            'residenciafiscal_tit2' => ($autorizados ? ($autorizados->residenciaexterior == 1 ? "No" : "Si") : ""),
            'identifiaciontributaria_tit2' => ($autorizados && $autorizados->residenciaexterior == 1 ? $autorizados->ide_tribu : ""),
            'Leyfacta_tit2' => ($autorizados && $autorizados->pais_id_otra_residencia == 60 ? "Si" : "No"),
            'SujetoObligado_tit2' => ($autorizados ? ($autorizados->pais_id_otra_residencia == 1 ? "No" : "Si") : "No"),

            'ConvenioAAGI' => ($registro->tieneagente == 1 || $registro->tieneagente == "" ? "No" : "Si"),
            'DenominacionDDJJ' => ($registro->tieneagente == 1 || $registro->tieneagente == "" ? "" : $registro->agente),
            
            'form1a' => ($testInversor && $testInversor->pregunta1 == 3 ? "X" : ""),
            'form1b' => ($testInversor && $testInversor->pregunta1 == 2 ? "X" : ""),
            'form1c' => ($testInversor && $testInversor->pregunta1 == 1 ? "X" : ""),
            'form1d' => ($testInversor && $testInversor->pregunta1 == 0 ? "X" : ""),
            
            'form2a' => ($testInversor && $testInversor->pregunta2 == 0 ? "X" : ""),
            'form2b' => ($testInversor && $testInversor->pregunta2 == 1 ? "X" : ""),
            'form2c' => ($testInversor && $testInversor->pregunta2 == 2 ? "X" : ""),
            
            'form3a' => ($testInversor && $testInversor->pregunta3 == 0 ? "X" : ""),
            'form3b' => ($testInversor && $testInversor->pregunta3 == 2 ? "X" : ""),
            
            'form4a' => ($testInversor && $testInversor->pregunta4 == 1 ? "X" : ""),
            'form4b' => ($testInversor && $testInversor->pregunta4 == 2 ? "X" : ""),
            'form4c' => ($testInversor && $testInversor->pregunta4 == 3 ? "X" : ""),
            'form4d' => ($testInversor && $testInversor->pregunta4 == 4 ? "X" : ""),
            
            'form5a' => ($testInversor && $testInversor->pregunta5 == 0 ? "X" : ""),
            'form5b' => ($testInversor && $testInversor->pregunta5 == 2 ? "X" : ""),
            'form5c' => ($testInversor && $testInversor->pregunta5 == 4 ? "X" : ""),
            'form5d' => ($testInversor && $testInversor->pregunta5 == 6 ? "X" : ""),
            
            'form6a' => ($testInversor && $testInversor->pregunta6 == 0 ? "X" : ""),
            'form6b' => ($testInversor && $testInversor->pregunta6 == 1 ? "X" : ""),
            'form6c' => ($testInversor && $testInversor->pregunta6 == 3 ? "X" : ""),
            
            'form7a' => ($testInversor && $testInversor->pregunta7 == 0 ? "X" : ""),
            'form7b' => ($testInversor && $testInversor->pregunta7 == 2 ? "X" : ""),
            'form7c' => ($testInversor && $testInversor->pregunta7 == 4 ? "X" : ""),
            'form7d' => ($testInversor && $testInversor->pregunta7 == 6 ? "X" : ""),    
            
            'form8a' => ($testInversor && $testInversor->pregunta8 == 2 ? "X" : ""),
            'form8b' => ($testInversor && $testInversor->pregunta8 == 4 ? "X" : ""),
            'form8c' => ($testInversor && $testInversor->pregunta8 == 6 ? "X" : ""),
            'form8d' => ($testInversor && $testInversor->pregunta8 == 8 ? "X" : ""),
            
            'form9a' => ($testInversor && $testInversor->pregunta9 == 2 ? "X" : ""),
            'form9b' => ($testInversor && $testInversor->pregunta9 == 4 ? "X" : ""),
            'form9c' => ($testInversor && $testInversor->pregunta9 == 6 ? "X" : ""),
            
            'Resultado' => ( $sumaTestInversor ? $sumaTestInversor->total : ""),
            'TI-1' => $caract,
            
            //'FECHA' => 'FECHA valor',
            //'Cuenta' => 'Cuenta valor',
        ])
        ->needAppearances()
        ->saveAs($file);
        
        return response()->download($file, "Formulario de apertura - ". $registro->name .".pdf");
        if ($result === false) {
            $error = $pdf->getError();
            dd("error", $error);
        }
    }

    // Modulo de listado de registros

    public function listadoRegistros(Request $request){
        $registro = DB::table('registros')
                    //->select('registros.user_id','registros.name as name','registros.nro as dni', 'registros.email as email','registros.estado_registro')
                    ->select('registros.*','registros.nro as dni', 'registros.email as email')
                    ->join('users','users.id','registros.user_id')
                    ->where('users.user_orig_id',null)
                    ->where(function($q) use ($request) {
                        if ($request->filterByState != '' && $request->filterByState != 'all')
                            $q->where('estado_registro', $request->filterByState);
                    })
                    ->get();

        return view('admin.leads.registros',['registro' => $registro, 'filterByState' => $request->filterByState]);
    }

    public function getlistadoRegistroState(Request $request)
    {
        if (!isset($request->id) || !is_numeric($request->id)) {
            return '';
        }

        return Registros::find($request->id)->estado_registro;
    }

    public function updatelistadoRegistroState(UpdateRegistroStateRequest $request)
    {
        //Registros::UpdateOrCreate(['id'=>$request->id],['estado_registro' => $request->val]);
        $registro = Registros::where("id", $request->id)->first();
        $registro->estado_registro = $request->val;
        $registro->save();
    }

    public function detalleRegistro($id){

        $co  = DB::table('users')->select('id')->where('user_orig_id',$id)->get();
        if(isset($co[0])){
            $cotitular = $co[0]->id;
        }else{
            $cotitular = "";
        }
        $registro = DB::table('registros')->
            select( 'registros.user_id',
                    DB::raw("CONCAT(registros.name,' ',registros.surname) AS name"),//'registros.name',
                    'registros.email' ,
                    'registros.nro' ,
                    'registros.dni_frente',
                    'registros.dni_dorso',
                    'registros.selfi',
                    'registros.archivo_1',
                    'registros.archivo_2',
                    'registros.archivo_3',
                    'registros.servicio',
                    'fotos_registro.name AS aleatoria',
                    'fotos_configuracion.name AS aleatoria_nombre')
            ->leftJoin('fotos_registro', 'fotos_registro.registro_id', '=', 'registros.id')
            ->leftJoin('fotos_configuracion', 'fotos_configuracion.id', '=', 'fotos_registro.index')
            ->where('user_id',  $id)
            ->orWhere('user_id', $cotitular)
            ->get();
            //dd("registro", $registro);
        return view('admin.leads.registroDetalle',compact('registro'));
    }

    // Modulo Edicion Cotitulares

    public function editarCotitulares(){
        $q_tieneCoTitular = DB::table('registros')
        ->select('registros.user_id','registros.name','registros.email','registros.nro')
        ->join('users','users.id','registros.user_id')
        ->where('users.user_orig_id',Auth()->user()->id)
        ->get();

        return view('admin.leads.listadoCotitular', compact('q_tieneCoTitular'));
    }

    public function eliminaCotitular($id)
    {
        if (isset($id) and is_numeric($id)) {
            DB::table('users')->where('id',$id)->delete();
        }

        return redirect()->route('editarCotitulares');
    }

    public function modificaCotitular($id)
    {
        session(['UserId' => $id]);
        return redirect('inicioCamino/editarCotitular');
    }

    // Modulo PDF

    public function pdf($id)
    {
        $usuario = DB::table('users')->select('id','created_at')
            ->where('id', '=', $id)
            ->get();

        //dump("usuario", $usuario);
        // $registro       = $this->consultaRegistros($id,'registros.user_id');
        $registro = DB::table('registros')
                ->select('registros.name','registros.surname','registros.user_id',
                        'registros.personaexpuesta as personaexpuesta',
                        'registros.inversor_calificado',
                         'registros.email',
                         'registros.fechanac',
                         'registros.nro',
                         'registros.celular',
                         'registros.cuit',
                         'registros.sujetoobligado',
                         'registros.residenciaexterior',
                         'registros.cp',
                         'paisdir.name as pais',
                         'registros.calle',
                         'registros.pisodto',
                         'registros.motivo',
                         'registros.dni_frente',
                         'registros.ide_tribu',
                         'registros.pais_id_otra_residencia',
                         'registros.dni_dorso',
                         'registros.selfi',
                         'registros.archivo_1',
                         'registros.archivo_2',
                         'registros.tieneagente',
                         'registros.aagi',
                         'registros.agente',
                         'registros.archivo_3',
                         'registros.servicio',
                         'registros.calle_nro',
                         'registros.cod_area',
                         'estado_civiles.NAME AS estado_civil',
                         'generos.NAME AS genero',
                         'paisnac.NAME AS nacionalidad',
                         'provincias.NAME AS provincia',
                         'localidads.NAME AS localidad',
                         'registros.genero_id as genero_id',
                         'tipo_documentos.name as tipo_documento',
                         'registros.name_pareja',
                         'tipo_documentos1.name as tipo_documento_pareja',
                         'registros.nro_dni_pareja')
            ->leftjoin('estado_civiles','estado_civiles.id','registros.estado_civil_id')
            ->leftjoin('generos','generos.id','registros.genero_id')
            ->leftjoin('paises as paisnac','paisnac.id','registros.pais_id')
            ->leftjoin('paises as paisdir','paisdir.id','registros.direccion_pais_id')
            ->leftjoin('provincias','provincias.id','registros.provincia_id')
            ->leftjoin('localidads','localidads.id','registros.localidad_id')
            ->leftjoin('tipo_documentos as tipo_documentos','tipo_documentos.id','registros.tipo_docuemnto_id')
            ->leftjoin('tipo_documentos as tipo_documentos1','tipo_documentos1.id','registros.tipo_docuemnto_pareja_id')
            ->where('registros.user_id', '=', $id)
            ->get();

        //dump("registro", $registro);
        //$autorizados    = $this->consultaRegistros($id,'users.user_orig_id');

        $autorizados = DB::table('registros')
            ->select(
                'registros.user_id as id_autorizado',
                'registros.name',
                'registros.surname',
                'registros.personaexpuesta as personaexpuesta',
                'registros.inversor_calificado',
                'registros.email',
                'registros.fechanac',
                'registros.nro',
                'registros.celular',
                'registros.cuit',
                'registros.sujetoobligado',
                'registros.residenciaexterior',
                'registros.cp',
                'paisdir.name as pais',
                'registros.pais_id_otra_residencia',
                'registros.calle',
                'registros.pisodto',
                'registros.motivo',
                'registros.ide_tribu',
                'registros.tieneagente',
                'registros.aagi',
                'registros.agente',
                'registros.dni_frente',
                'registros.dni_dorso',
                'registros.selfi',
                'registros.archivo_1',
                'registros.archivo_2',
                'registros.archivo_3',
                'registros.servicio',
                'registros.calle_nro',
                'registros.cod_area',
                'estado_civiles.NAME AS estado_civil',
                'generos.NAME AS genero',
                'paisnac.NAME AS nacionalidad',
                'provincias.NAME AS provincia',
                'localidads.NAME AS localidad',
                'registros.genero_id as genero_id',
                'tipo_documentos.name as tipo_documento',
                'actividades.NAME AS actividad',
                'tipo_relacion_laborales.NAME AS relacion_laboral',
                'registros.name_pareja',
                'tipo_documentos1.name as tipo_documento_pareja',
                'registros.nro_dni_pareja')
            ->leftjoin('estado_civiles','estado_civiles.id','registros.estado_civil_id')
            ->leftjoin('generos','generos.id','registros.genero_id')
            ->leftjoin('paises as paisnac','paisnac.id','registros.pais_id')
            ->leftjoin('paises as paisdir','paisdir.id','registros.direccion_pais_id')
            ->leftjoin('provincias','provincias.id','registros.provincia_id')
            ->leftjoin('localidads','localidads.id','registros.localidad_id')
            ->leftjoin('users','users.id','registros.user_id')
            ->leftjoin('tipo_documentos','tipo_documentos.id','registros.tipo_docuemnto_id')
            ->leftjoin('datos_laborales_registro','datos_laborales_registro.registro_id','registros.user_id')
            ->leftjoin('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->leftjoin('actividades','actividades.id','datos_laborales_registro.actividad_id')
            ->leftjoin('tipo_documentos as tipo_documentos1','tipo_documentos1.id','registros.tipo_docuemnto_pareja_id')
            ->where('users.user_orig_id', '=', $id)
            ->get()->toArray();
        if(isset($autorizados[0])){
            $autorizados = $autorizados[0];
        };

        //dd("autorizados", $autorizados);


        $declaracionJurada = DB::table('datos_laborales_registro')
                            ->select('actividad_id AS actividad', 'tipo_relacion_laborales.name AS relacion_laboral')
            ->join('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->where('datos_laborales_registro.registro_id', '=', $id)
            ->get();

        $declaracionJuradaCo = DB::table('datos_laborales_registro')
                                   ->select('actividad_id AS actividad', 'tipo_relacion_laborales.name AS relacion_laboral')
            ->join('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
            ->join('users','users.id','datos_laborales_registro.registro_id')
            ->where('users.user_orig_id', '=', $id)
        ->get();




        $testInversor = DB::table('test_inversor')->select('pregunta1','pregunta2','pregunta3','pregunta4','pregunta5','pregunta6','pregunta7','pregunta8','pregunta9')
            ->where('id', '=', $id)
            ->get();

        $sumaTestInversor = DB::table('test_inversor')->select(DB::raw("pregunta1 + pregunta2 + pregunta3 + pregunta4 + pregunta5 +  pregunta6 +  pregunta7 +  pregunta8 +  pregunta9 as total"))
            ->where('id', '=', $id)
            ->get();
        $data = ['registro' => $registro, 'declaracionJurada' => $declaracionJurada, 'declaracionJuradaCo' => $declaracionJuradaCo, 'id' => $id, 'usuario' => $usuario, 'autorizados' => $autorizados, 'testInversor' => $testInversor, 'sumaTestInversor' => $sumaTestInversor];

        $pdf= PDF::loadView('admin.leads.registropdf', $data);

        return $pdf->stream('Formulario de apertura - '. $registro[0]->name .'.pdf');
    }

    // Inicio

    public function inicioSetDatos($reg,$estado){
        if(!isset($reg[0])){
            if(session('estado') == 'nuevoCotitular'){
                $user_id = "";
                $email    = "";
                $name     = "";
		$email_login = Auth()->user()->email;
            }else{
                $user_id  = Auth()->user()->id;
                $email    = Auth()->user()->email;
		$email_login = Auth()->user()->email;
                $name     = Auth()->user()->name;
            }
            $data = [
                'user_id'                    => $user_id,
                'name'                       => $name,
                'surname'                    => "",
                'email'                      => $email,
                'email_login'                => $email_login,
                'tipo_documento_id'          => "",
                'nro'                        => "",
                'tipo_docuemnto_pareja_id'   => "",
                'nro_dni_pareja'             => "",
                'preCuit'                    => "",
                'postCuit'                   => "",
                'genero_id'                  => "",
                'estado_civil_id'            => "",
                'birth_day'                  => "",
                'birth_month'                => "",
                'birth_year'                 => "",
                'pais_id'                    => 1,
                'pais_name'                  => "Argentina",
                'cod_area'                   => "",
                'calle_nro'                  => "",
                'status'                     => "",
                'celular'                    => "",
                'q_relLab'                   => "",
                'tieneagente'                => "",
                'agente'                     => "",
                'personaexpuesta'            => "",
                'inversor_calificado'        => "",
                'motivo'                     => "",
                'name_pareja'                => "",
                'nro_dni_pareja'             => "",
                'tipodomicilio_id'           => "",
                'direccion_pais_id'          => 1,
                'direccion_pais_name'        => "Argentina",
                'provincia_id'               => "",
                'provincia_name'             => "",
                'localidad_id'               => "",
                'localidad_name'             => "",
                'cp'                         => "",
                'calle'                      => "",
                'pisodto'                    => "",
                'pais_id_otra_residencia'    => 1,
                'sujetoobligado'             => 1,
                'residenciaexterior'         => 1,
                'ide_tribu'                  => "",
                'dni_frente'                 => "",
                'dni_dorso'                  => "",
                'selfi'                      => "",
                'archivo_1'                  => "",
                'archivo_2'                  => "",
                'archivo_3'                  => "",
                'servicio'                   => "",
                'q_relLab'                   => "",
                'aagi'                       => ""
            ];
        }else{
            $pais_query                 = Pais::select('name')->where('id',$reg[0]->pais_id)->get();
            $direccion_pais_query       = Pais::select('name')->where('id',$reg[0]->direccion_pais_id)->get();
            $direccion_provincia_query  = Provincia::select('name')->where('id',$reg[0]->provincia_id)->get();
            $direccion_localidad_query  = Localidad::select('name')->where('id',$reg[0]->localidad_id)->get();
	    $email_login = Auth()->user()->email;
            $foto                       = FotosRegistro::whereRegistroId($reg[0]->id)->first();
            $q_relLab=DB::table('datos_laborales_registro')
                        ->join('tipo_relacion_laborales','tipo_relacion_laborales.id','datos_laborales_registro.relacion_laboral_id')
                        ->where('registro_id',$reg[0]->user_id)
                        ->get();
            $data = [
                'user_id'                    => $reg[0]->user_id,
                'name'                       => $reg[0]->name,
                'surname'                    => $reg[0]->surname,
                'email'                      => $reg[0]->email,
                'email_login'                => $email_login,
                'tipo_documento_id'          => $reg[0]->tipo_docuemnto_id,
                'nro'                        => $reg[0]->nro,
                'tipo_docuemnto_pareja_id'   => $reg[0]->tipo_docuemnto_pareja_id,
                'nro_dni_pareja'             => $reg[0]->nro_dni_pareja,
                'preCuit'                    => substr($reg[0]->cuit, 0, 2),
                'postCuit'                   => substr($reg[0]->cuit, -1, 1),
                'pais_id'                    => $reg[0]->pais_id,
                'genero_id'                  => $reg[0]->genero_id,
                'estado_civil_id'            => $reg[0]->estado_civil_id,
                'birth_day'                  => date('j',strtotime($reg[0]->fechanac)),
                'birth_month'                => date('n',strtotime($reg[0]->fechanac)),
                'birth_year'                 => date('Y',strtotime($reg[0]->fechanac)),
                'pais_name'                  => $pais_query[0]->name,
                'direccion_pais_id'          => $reg[0]->direccion_pais_id,
                'provincia_id'               => $reg[0]->provincia_id,
                'localidad_id'               => $reg[0]->localidad_id,
                'direccion_pais_name'        => $direccion_pais_query[0]->name,
                'provincia_name'             => $direccion_provincia_query[0]->name,
                'localidad_name'             => $direccion_localidad_query[0]->name,
                'name_pareja'                => $reg[0]->name_pareja,
                'nro_dni_pareja'             => $reg[0]->nro_dni_pareja,
                'tipo_docuemnto_pareja_id'   => $reg[0]->tipo_docuemnto_pareja_id,
                'cp'                         => $reg[0]->cp,
                'calle'                      => $reg[0]->calle,
                'pisodto'                    => $reg[0]->pisodto,
                'celular'                    => $reg[0]->celular,
                'status'                     => $reg[0]->user_id,
                'cod_area'                   => $reg[0]->cod_area,
                'tieneagente'                => $reg[0]->tieneagente,
                'agente'                     => $reg[0]->agente,
                'calle_nro'                  => $reg[0]->calle_nro,
                'motivo'                     => $reg[0]->motivo,
                'personaexpuesta'            => $reg[0]->personaexpuesta,
                'inversor_calificado'        => $reg[0]->inversor_calificado,
                'sujetoobligado'             => $reg[0]->sujetoobligado,
                'residenciaexterior'         => $reg[0]->residenciaexterior,
                'pais_id_otra_residencia'    => $reg[0]->pais_id_otra_residencia,
                'ide_tribu'                  => $reg[0]->ide_tribu,
                'dni_frente'                 => $reg[0]->dni_frente,
                'dni_dorso'                  => $reg[0]->dni_dorso,
                'selfi'                      => $reg[0]->selfi,
                'archivo_1'                  => $reg[0]->archivo_1,
                'archivo_2'                  => $reg[0]->archivo_2,
                'archivo_3'                  => $reg[0]->archivo_3,
                'servicio'                   => $reg[0]->servicio,
                'q_relLab'                   => $q_relLab,
                'aagi'                       => $reg[0]->aagi,
                'foto__'                     => isset($foto) ? $foto->name : null
            ];
        }
        return $data;
    }



    public function getTest(){
        $test_inv   = DB::table('test_inversor')->where('id', Auth::user()->id )->get();
        return $test;
    }

    public function tieneTest(){
        $test_inv   = DB::table('test_inversor')->where('id', Auth::user()->id )->get();
        if(isset($test_inv[0])){
            return true;
        }{
            return false;
        }
    }

    public function inicioCamino($param)
    {
        $tipo_documentos       = TipoDocumento::all()->pluck('name','id');
        $estado_civiles        = DB::table('estado_civiles')
                                ->select('id','name')
                                ->get()->pluck('name','id');
        $generos               = Genero::all()->pluck('name','id');
        $paises                = Pais::all()->pluck('name','id');
        $meses                 = DB::table('meses')->pluck('name','id');

        $tiporelacionlaborales = TipoRelacionLaboral::all()->pluck('name','id');
        $actividades           = Actividad::all()->pluck('name','id');

        $documento_query = DB::table('tipo_documentos')
            ->select('id','name')
            ->get()->pluck('name','id');

        $tiene_test = $this->tieneTest();

        if($param == 'nuevoTitular'){
            session(['esCotitular' => false]);
            $reg = "";
            session(['estado' => 'nuevoTitular' ]);
        }

        if($param == 'nuevoCotitular'){
            session(['esCotitular' => true]);
            $reg = "";
            session(['estado' => 'nuevoCotitular' ]);
        }

        if($param == 'editarTitular'){
            session(['esCotitular' => false]);
            $reg = DB::table('registros')
                 ->where('user_id', session('UserId'))
                 ->get();
            session(['estado' => 'editarTitular' ]);

        }

        if($param == 'editarCotitular'){
            session(['esCotitular' => true]);
            $reg = DB::table('registros')
                 ->where('user_id', session('UserId'))
                 ->get();
            $tiene_test = false;
            session(['estado' => 'editarCotitular' ]);
        }
        $tipos_fotos = FotosConfiguracion::whereActive(true)->inRandomOrder()->limit(1)->get();
        if(isset($reg[0])) {
            $record = FotosRegistro::whereRegistroId($reg[0]->id)->first();
            if ($record) {
                $tipos_fotos = FotosConfiguracion::where("id", $record->index)->get();
            }
        }

        $data = $this->inicioSetDatos($reg,session('estado'));
        //dd($data);
        return view('admin2.formularios.form1',
                    compact('generos',
                            'meses',
                            'tipo_documentos',
                            'tiporelacionlaborales',
                            'actividades',
                            'estado_civiles',
                            'paises',
                            'data',
                            'documento_query',
                            'tiene_test',
                            'tipos_fotos'
                    ));
    }
    // Funciones Auxiliaras

    public function getProvincias($id)
    {
        return Provincia::select('id','name')->where('pais_id',$id)->orderBy('name','asc')->get()->toArray();
    }
    public function getLocalidades($id)
    {
        return Localidad::select('id','name')->where('provincia_id',$id)->orderBy('name','asc')->get()->toArray();
    }

    public function getCP($id)
    {
        $cp = Localidad::select('codigopostal')->where('id',$id)->get();
        return $cp[0]->codigopostal;
    }

    public function getActividadId($id)
    {
        return Actividad::select('id','name')->where('id',$id)->get()->toArray();
    }

    public function getActividad()
    {
        return Actividad::select('id','name')->whereNotIn('id', [1,2,5,6])->get()->toArray();
    }

    public function getTipoRelacionLaboral()
    {
        return TipoRelacionLaboral::select('id','name')->get()->toArray();
    }

    public function sacacaracteres($variable){
        $caracteres = ['[','"',']'];
        foreach($caracteres as $car){
            $variable = str_replace($car,"",$variable);
        }
        return $variable;
    }

    public function validarEstado(Request $request){

        $estado=$request->estado;
        $id=$request->user;


         DB::table('registros')
            ->where('user_id', $id  )
            ->update([
                'estado'=> $estado
            ]);

        return redirect('listadoRegistros');

    }

    // Guardados

    public function formularioSave(Request $request)
    {

        $id=session('UserId');

        Log::info(array("formularioSave", "id", $id));

        $q_estitular = DB::table('users')
                       ->select('user_orig_id')
                       ->where('id',$id)
                       ->get();

        Log::info(array("formularioSave", "q_estitular", $q_estitular));

        if($q_estitular[0]->user_orig_id != null){
                $id = $q_estitular[0]->user_orig_id;
        }


        $q_datos = DB::table('registros')
                    ->select('cod_area','celular','name','email')
                    ->where('user_id',$id)
                    ->get();

        $celular = $q_datos[0]->cod_area . "-" . $q_datos[0]->celular;

        $request = [
            'canal_id' => 30,
            'product_id' => 21,
            'name' => $q_datos[0]->name,
            'email' => $q_datos[0]->email,
            'telefono' => $celular
        ];

        $response = Http::post('https://demos-crm.ddns.net/site/public/api/addlead', $request);

        Log::info(array("formularioSave", "request", $request));
        Log::info(array("formularioSave", "response", $response));
        Log::info(array("formularioSave", "response->body()", $response->body()));

        Storage::put('/temporal/Apertura de Cuenta Sailing - '.$id.'.pdf', $this->pdf($id));

        $fPdf = storage_path('app/temporal/Apertura de Cuenta Sailing - '.$id.'.pdf');

        $q_tieneCoTitular = DB::table('registros')
        ->select('registros.user_id','registros.name','registros.email','registros.nro')
        ->join('users','users.id','registros.user_id')
        ->where('users.user_orig_id',Auth()->user()->id)
        ->get();

        $mailArray = [];
        foreach($q_tieneCoTitular as $record) {
            $mailArray[] = $record->email;
        }

        \Mail::to($q_datos[0]->email)
            ->cc($mailArray)
            ->send(new \App\Mail\Bienvenido($fPdf));
        session(['UserOrig' => NULL]);
        return view('admin2.formularios.finalizar');

    }

    public function saveDataTestInversor(Request $request){


        $id = session('UserId');
        $uno=$request->uno;
        $dos=$request->dos;
        $tres=$request->tres;
        $cuatro=$request->cuatro;
        $cinco=$request->cinco;
        $seis=$request->seis;
        $siete=$request->siete;
        $ocho=$request->ocho;
        $nueve=$request->nueve;


        DB::table('test_inversor')->where('id', $id )->delete();

        DB::table('test_inversor')->insert(
                        [
                            'id' => $id,
                            'pregunta1' => $uno,
                            'pregunta2' => $dos,
                            'pregunta3' => $tres,
                            'pregunta4' => $cuatro,
                            'pregunta5' => $cinco,
                            'pregunta6' => $seis,
                            'pregunta7' => $siete,
                            'pregunta8' => $ocho,
                            'pregunta9' => $nueve
                        ]
                    );


    }

    public function saveData(Request $request){
        // Asignacion variables
        $relLab_id = explode(",",$this->sacacaracteres($request->relLab_id));
        $relLab_act = explode(",",$this->sacacaracteres($request->relLab_act));
        $data = [
            'id'  => $relLab_id,
            'act' => $relLab_act,
        ];
        $name=$request->name;
        $surname=$request->surname;
        $email=$request->email;
        $fechanac = $request->fechanac;
        $tipo_docuemnto_id=$request->tipo_docuemnto_id;
        $nro=$request->nro;
        $estado_civil_id=$request->estado_civil_id;
        $genero_id=$request->genero_id;
        $celular=$request->celular;
        $cod_area=$request->cod_area;

        $name_pareja=$estado_civil_id==2?$request->name_pareja:null;
        $tipo_docuemnto_pareja_id=$estado_civil_id==2?$request->tipo_docuemnto_pareja_id:null;
        $nro_dni_pareja=$estado_civil_id==2?$request->nro_dni_pareja:null;

        $cuit = $request->nro;
        $preCuit=$request->preCuit;
        $postCuit=$request->postCuit;

        $pais_id=$request->pais_id;
        $direccion_pais_id=$request->direccion_pais_id;
        $provincia_id=$request->provincia_id;
        $localidad_id=$request->localidad_id;
        $cp=$request->cp;
        $calle=$request->calle;
        $pisodto=$request->pisodto;
        $calle_nro=$request->calle_nro;

        $personaexpuesta=$request->personaexpuesta;
        $motivo=$request->motivo;
        $sujetoobligado=$request->sujetoobligado;
        $residenciaexterior=$request->residenciaexterior;
        $pais_id_otra_residencia=$request->pais_id_otra_residencia;
        $status=$request->status;
        $inversor_calificado=$request->inversor_calificado;

        $ide_tribu=$request->ide_tribu;

        $cuit = $preCuit.$cuit.$postCuit;

        $tieneagente = $request->tieneagente;
        $agente = $request->agente;
        $aagi = $request->aagi;

        // Comienza grabado
        // Situacion 1: estado nuevoTitular
        // Situacion 2: estado nuevoCotitular
        // Situacion 3: estado editarTitular
        // Situacion 4: estado editarCotitular

        $logdatos = [
                'status'      => $status,
                'esCotitular' => session('esCotitular'),
                'MarcaUser'   => session('MarcaUser'),
                'UserId'      => session('UserId'),
                'estado'      => session('estado'),
                'data'        => $data
        ];
       // Log::info($logdatos);

        if(session('estado') == 'nuevoTitular'){
            $accion         = 'insert';
            $nuevo_estado   = 'editarTitular';

        }

        if (session('estado') == 'nuevoCotitular') {
            $status= "";
            $fecha_email = Carbon::now();
            $user_dep = DB::table('users')->insertGetId(
                [
                    'name' => $name,
                    'surname' => $surname,
                    'email' => $email,
                    'user_orig_id' => session('UserId'),
                    'password' => Hash::make(123456),
                    'email_verified_at' => $fecha_email
                ]
            );
            $user_id = $user_dep;
            session(['UserId' => $user_id]);
            $accion = "insert";
            $nuevo_estado   = 'editarCotitular';
        }

        if(session('estado') == 'editarTitular'){
            $accion         = "update";
            $nuevo_estado   = 'editarTitular';
        }

        if(session('estado') == 'editarCotitular'){
            $accion         = "update";
            $nuevo_estado   = 'editarCotitular';
        }

	$fecha_actualizacion = Carbon::now();
        if($accion == "update"){
            // Update Registros
                DB::table('registros')
                ->where('user_id', session('UserId')  )
                ->update([
                    'name'=> $name,
                    'surname'=> $surname,
                    'email' => $email,
                    'fechanac' => $fechanac,
                    'tipo_docuemnto_id' => $tipo_docuemnto_id,
                    'nro' => $nro,
                    'estado_civil_id' => $estado_civil_id,
                    'genero_id' => $genero_id,
                    'celular' => $celular,
                    'pais_id' => $pais_id,
                    'cuit' => $cuit,
                    'name_pareja' => $name_pareja,
                    'tipo_docuemnto_pareja_id' => $tipo_docuemnto_pareja_id,
                    'nro_dni_pareja'    => $nro_dni_pareja,
                    'direccion_pais_id' => $direccion_pais_id,
                    'provincia_id' => $provincia_id,
                    'localidad_id' => $localidad_id,
                    'cp' => $cp,
                    'calle' => $calle,
                    'pisodto' => $pisodto,
                    'personaexpuesta' => $personaexpuesta,
                    'inversor_calificado' => $inversor_calificado,
                    'motivo' => $motivo,
                    'sujetoobligado'  => $sujetoobligado,
                    'residenciaexterior'  => $residenciaexterior,
                    'pais_id_otra_residencia'  => $pais_id_otra_residencia,
                    'user_id' => session('UserId'),
                    'cod_area'  => $cod_area,
                    'calle_nro'   => $calle_nro,
                    'ide_tribu' => $ide_tribu,
                    'agente' => $agente,
                    'tieneagente' => $tieneagente,
                    'updated_at' => $fecha_actualizacion,
                    'aagi' => $aagi
                ]);
            // Update Relaciones Laborales
                DB::table('datos_laborales_registro')->where('registro_id',session('UserId'))->delete();
                $textoActividad = "";
                for ($i=0; $i < count($relLab_id); $i++) {
                    $textoActividad = str_replace("@", ",", $relLab_act[$i]);
                    DB::table('datos_laborales_registro')->insert(
                        [
                            'registro_id' => session('UserId'),
                            'relacion_laboral_id' => $relLab_id[$i],
                            'actividad_id' => $textoActividad,
                        ]);
                }

        }else{

            // inserto datos
                $id = DB::table('registros')->insertGetId(
                    [
                            'name'=> $name,
                            'surname'=> $surname,
                            'email' => $email,
                            'fechanac' => $fechanac,
                            'tipo_docuemnto_id' => $tipo_docuemnto_id,
                            'nro' => $nro,
                            'estado_civil_id' => $estado_civil_id,
                            'genero_id' => $genero_id,
                            'celular' => $celular,
                            'pais_id' => $pais_id,
                            'cuit' => $cuit,
                            'name_pareja' => $name_pareja,
                            'tipo_docuemnto_pareja_id' => $tipo_docuemnto_pareja_id,
                            'nro_dni_pareja'    => $nro_dni_pareja,
                            'direccion_pais_id' => $direccion_pais_id,
                            'provincia_id' => $provincia_id,
                            'localidad_id' => $localidad_id,
                            'cp' => $cp,
                            'calle' => $calle,
                            'pisodto' => $pisodto,
                            'personaexpuesta' => $personaexpuesta,
                            'inversor_calificado' => $inversor_calificado,
                            'motivo' => $motivo,
                            'sujetoobligado'  => $sujetoobligado,
                            'residenciaexterior'  => $residenciaexterior,
                            'pais_id_otra_residencia'  => $pais_id_otra_residencia,
                            'user_id' => session('UserId'),
                            'cod_area'  => $cod_area,
                            'calle_nro'   => $calle_nro,
                            'ide_tribu' => $ide_tribu,
                            'agente' => $agente,
                            'tieneagente' => $tieneagente,
                    	    'created_at' => $fecha_actualizacion,
                            'aagi' => $aagi
                    ]
                );

            // inserto actividades laborales

                $textoActividad = "";
                for ($i=0; $i < count($relLab_id); $i++) {
                    $textoActividad = str_replace("@", ",", $relLab_act[$i]);
                    DB::table('datos_laborales_registro')->insert(
                            [
                                'registro_id' => session('UserId'),
                                'relacion_laboral_id' => $relLab_id[$i],
                                'actividad_id' => $textoActividad,
                            ]
                        );
                }
        }
        session(['estado' => $nuevo_estado]);

    }

    public function dropzonePhotoExtended($index, Request $request)
    {
        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararePhoto($id,$imagen,$index);
    }

    public function dropzone1(Request $request){
        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'dni_frente');
    }

    public function dropzone2(Request $request){
        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'dni_dorso');
    }

    public function dropzone3(Request $request){

        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'selfi');
    }

    public function dropzone4(Request $request){   ;
        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'archivo_1');

    }
    public function dropzone5(Request $request){
        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'archivo_2');

    }
    public function dropzone6(Request $request){

        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'archivo_3');

    }

    public function dropzone7(Request $request){

        $imagen = $request->file('file');
        $id=session('UserId');
        $nombre = $this->prepararImagen($id,$imagen,'servicio');
    }

    public function prepararImagen($id,$imagen,$campo){
        if (isset($imagen)){
	    $fecha_hoy = Carbon::now();
            $nombre = $id."_".$fecha_hoy."_".$imagen->getClientOriginalName();
            $path = public_path()."/".$id;
            $imagen ->move($path, $nombre);
        }

        DB::table('registros')
        ->where('user_id', $id)
        ->update([
            $campo => $nombre,
        ]);
    }

    public function prepararePhoto($id,$imagen,$index){
        if (isset($imagen)){
            $nombre = $id."_".$imagen->getClientOriginalName();
            $path = public_path()."/".$id;
            $imagen ->move($path, $nombre);
        }

        $registro = Registros::Where('user_id', $id)->first();
	/*FotosRegistro::UpdateOrCreate(['registro_id' => $registro->id, 'index' => $index], ['name' => $nombre]);*/
	FotosRegistro::UpdateOrCreate(['registro_id' => $registro->id], ['index' => $index, 'name' => $nombre]);
    }

    public function limpiezaInicial($token)
    {
        if ($token != "antonio2021") {
            return "token invalido";
        }
        /*$registros = Registros::where("genero_id", 3)->orderBy("id", "ASC")->get();//->get()->toArray();//
        dd($registros->toArray());*/
        $mailsHombres = ["aure.fernandez@gmail.com", "juancattalini@gmail.com", "joralbra@gmail.com", "francopetti@hotmail.com", "rodolfo282+sailing2@gmail.com", "juanferbertolo@gmail.com", "lucasguzman64@gmail.com", "marialauraszurkalo@hotmail.com"];
        $mailsMujeres = ["gabriela.daprato@gmail.com", "siempreunaprueba@hotmail.com", "mayerdacosta@gmail.com"];
        $registros = Registros::whereIn("email", $mailsMujeres)->orderBy("id", "ASC")->get();
        //dump($registros->toArray());
        foreach ($registros as $registro) {
            $registro->genero_id = 1;
            $registro->save();
        }
        $registros = Registros::whereIn("email", $mailsMujeres)->orderBy("id", "ASC")->get()->toArray();
        dd($registros);
        $User = User::orderBy("id", "ASC")->where('id', $registros->user_id)->get()->toArray();//->first();//
        dd($User);
        //francopetti@hotmail.com - 100
        //gabriela.daprato@gmail.com - 104
        //Borrado de usuario
        /*$registros = Registros::whereIn("email", ["mlnazarian@hotmail.com"])->orderBy("id", "ASC")->first();//->get()->toArray();
        dump($registros->delete());
        $User = User::orderBy("id", "ASC")->where('id', $registros->user_id)->first();//->get()->toArray();
        dd($User->delete());*/

        /*$registros = Registros::whereIn('id', [95, 96])->orderBy("id", "ASC")->get();//->toArray();
        foreach ($registros as $registro) {
            $registro->delete();
        }*/

        //$testInversor = DB::table('test_inversor')->select('pregunta1','pregunta2','pregunta3','pregunta4','pregunta5','pregunta6','pregunta7','pregunta8','pregunta9')
        /*$testInversor = DB::table('test_inversor')->select('id', 'pregunta6')
            ->where('pregunta6', 3)
            ->get();
        //dd("testInversor pregunta6", $testInversor);
        foreach ($testInversor as $registro) {
            if ($registro->pregunta6 == 3) {
                DB::table('test_inversor')
                ->where('id', $registro->id  )
                ->update([
                    'pregunta6'=> 2
                ]);
            }
            dump("registro pregunta6", DB::table('test_inversor')->where('id', $registro->id)->select('id', 'pregunta6')->get());
        }*/
        //dd("testInversor", $testInversor);
        /*$FotosConfiguracion = FotosConfiguracion::whereActive(true)->get();
        foreach ($FotosConfiguracion as $registro) {
            switch ($registro->id) {
                case '4':
                    $registro->name = "Foto mostrando la palma derecha";
                    break;
                case '5':
                    $registro->name = "Foto mostrando la palma izquierda";
                    break;
                case '6':
                    $registro->name = "Foto levantando dedo indice derecho";
                    break;
                case '7':
                    $registro->name = "Foto levantando dedo indice izquierdo";
                    break;
            }
            $registro->save();
        }
        $FotosConfiguracion = FotosConfiguracion::whereActive(true)->get();
        dd("FotosConfiguracion", $FotosConfiguracion);
        */

        /*foreach ($registros as $registro) {
            $registro->name_pareja = null;
            $registro->tipo_docuemnto_pareja_id = null;
            $registro->nro_dni_pareja = null;
            $registro->save();
        }*/
    }
}
