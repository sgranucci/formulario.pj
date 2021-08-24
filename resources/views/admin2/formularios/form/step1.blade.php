<div class="container step1" >
    <h2>Datos Personales</h2>
    <div class="content">
        <div class='fila'>
            <div class="row mt-2">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control required" id="name" value="{{$data['name']}}">
                        @if ($errors->has('name'))
                            <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" name="surname" class="form-control required" id="surname" value="{{$data['surname']}}">
                        @if ($errors->has('surname'))
                            <small class="text-danger"><b>{{ $errors->first('surname') }}</b></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Email</label>
        		@if(session('estado') == 'nuevoCotitular' or session('estado') == 'editarCotitular')
                        	<input type="text" name="email" id="email" class="form-control required" value="{{$data['email']}}">
                        	<input type="hidden" id="email_login"    value={{$data['email_login']}} >
        		@else
                        	<input type="text" name="email" id="email" class="form-control required" value="{{$data['email']}}" readonly>
                        	<input type="hidden" id="email_login"    value="" >
        		@endif

                        @if ($errors->has('email'))
                        	<small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-4">
                    <label>Fecha de nacimiento</label>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group" >
                                <select name="birthDay" id="birthDay"  data-placeholder="Dia" class="form-control required" data-fouc>
                                    @if ($data['birth_day'] == "")
                                       	<option selected value=""></option>
				    @endif
                                    @for ($i = 1; $i < 32; $i++)
                                    	@if($data['birth_day'] == $i)
                                       		<option selected value="{{$data['birth_day']}}">{{$data['birth_day']}}</option>
					@else
                                       	 	<option value="{{$i}}">{{$i}}</option>
                                    	@endif
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="birthMonth" id="birthMonth" data-placeholder="Mes" class="form-control required" data-fouc>
                                    @if ($data['birth_month'] == "")
                                       	<option selected value=""></option>
				    @endif
                                    @foreach ($meses as $item => $value)
                                    	@if($data['birth_month'] == $item)
                                        	<option value="{{$data['birth_month']}}" selected>{{/*$data['birth_month']*/$meses[$data['birth_month']]}}</option>
					@else
                                        	<option value="{{$item}}">{{$value}}</option>
                                    	@endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select name="birthYear" id="birthYear" data-placeholder="Año" value="{{$data['birth_year']}}" class="form-control required" data-fouc>
                                @if ($data['birth_year'] == "")
                                     	<option selected value=""></option>
				@endif
                                @for ($i = (\Carbon\Carbon::now()->year - 18); $i > (\Carbon\Carbon::now()->year - 118); $i--)
                                	@if($data['birth_year'] == $i)
                                    		<option value="{{$data['birth_year']}}" selected>{{$data['birth_year']}}</option>
                                	@else
                                    		<option value="{{$i}}">{{$i}}</option>
                                	@endif
                                @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2">
                    <div class="form-group">
                                <label>Tipo Documento</label>
                                <select name="tipo_documento_id" id="tipo_documento_id"  data-placeholder="Tipo Documento" class="form-control required" data-fouc>
                                    @foreach ($documento_query as $key => $value)
                                    @if ($data['tipo_documento_id'] == $key)
                                        <option value="{{$key}}" selected>{{$value}}</option>
                                    @else
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Número</label>
                                <input type="text" name="nro" id="nro" class="form-control required" value="{{$data['nro']}}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Género </label>
                                <select name="genero_id" id="genero_id" class="form-control required"  data-placeholder="Femenino | Masculino" data-fouc>
                                    <option selected value=""></option>
                                    @foreach ($generos as $key => $value)
                                        <option value="{{$key}}"
                                            @if($data['genero_id'] == $key)
                                                selected
                                            @endif
                                        >{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nacionalidad</label>
                                <select name="pais_id" id="pais_id" data-placeholder="País" class="form-control required" data-fouc>
                                    @if($data['pais_id'] == "")
                                        <option selected value=""></option>
                                    @else
                                        <option value="{{$data['pais_id']}}" selected>{{$data['pais_name']}}</option>
                                    @endif
                                    @foreach ($paises as $item => $value)
                                        @if($data['pais_id'] != $item)
                                            <option value="{{$item}}">{{$value}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2">
                            <div class="form-group" >
                                    <label>Cod. Area</label>
                                    <input type="text" name="cod_area" id="cod_area" value="{{$data['cod_area']}}" class="form-control required"  >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Celular (Sin el 15)</label>
                                    <input type="text" name="celular" id="celular" value="{{$data['celular']}}" class="form-control required" >
                                </div>
                            </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>CUIT | CUIL</label>
                                <input type="text" maxlength="2"  name="preCuit" id="preCuit" class="form-control " aria-modal="1" value="{{$data['preCuit']}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="color:white">a</label>
                                <input value="{{$data['nro']}}" type="text" name="cuit" id="cuit" class="form-control" maxlength="8"  placeholder="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style="color:white">a</label>
                                <input type="text" maxlength="1"   name="postCuit" id="postCuit" class="form-control " value="{{$data['postCuit']}}">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">

                        <div class="col-md-3" >
                            <div class="form-group">
                                <label>Estado Civil </label>
                                    <select name="estado_civil_id"  id="estado_civil_id" data-placeholder="Estado civil" class=" form-control required" data-fouc>
                                    <option value="" selected></option>
                                    @foreach ($estado_civiles as $key => $value)
                                        <option value="{{$key}}" {{ !empty($data['estado_civil_id']) && $key == $data['estado_civil_id'] ? ' selected="selected" ' : '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div id='cajaPareja'>
                            <div class="row mt-4" id="pareja">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre y Apellido del Cónyuge</label>
                                        <input type="text" name="name_pareja" class="form-control" id="name_pareja" value="{{$data['name_pareja']}}">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Tipo Documento</label>
                                        <select name="tipo_docuemnto_pareja_id" id="tipo_docuemnto_pareja_id"  data-placeholder="Tipo Documento" class="form-control " data-fouc>
                                            @foreach ($documento_query as $key => $value)
                                            @if ($data['tipo_documento_id'] == $key)
                                                <option value="{{$key}}" selected>{{$value}}</option>
                                            @else
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Número</label>
                                        <input type="text" name="nro_dni_pareja" id="nro_dni_pareja" class="form-control" value="{{$data['nro_dni_pareja']}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

            <div class="mt-5">
                <h2>Domicilio Real <FONT SIZE=1>(el mismo debe coincidir con su DNI o servicio a su nombre)</font></h2>
                <div class="content">
                    <div class='fila'>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group" wire:ignore>
                                    <label>País donde radica actualmente </label>
                                    <select name="direccion_pais_id" id="direccion_pais_id" data-placeholder="País" class="form-control required" data-fouc>
                                        @if($data['direccion_pais_id'] == "")
                                            <option selected></option>
                                        @else
                                            <option value="{{ $data['direccion_pais_id'] }}" selected>{{$data['direccion_pais_name']}}</option>
                                        @endif
                                        @foreach ($paises as $item => $value)
                                            @if($data['direccion_pais_id'] != $item)
                                                <option value="{{$item}}">{{$value}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" id='prov'>
                                <div class="form-group">
                                    <label>Provincias</label>
                                    <select name="provincia_id" id="provincia_id" data-placeholder="Provincia" class="form-control required" data-fouc>
                                        @if($data['provincia_id'] == "")
                                            <option selected></option>
                                        @else
                                            <option value="{{$data['provincia_id']}}" selected>{{$data['provincia_name']}}</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3" id='loc'>
                                <div class="form-group">
                                    <label>Localidad</label>
                                    <select name="localidad_id" id='localidad_id' data-placeholder="Localidad" class="form-control required" data-fouc>
                                        @if($data['localidad_id'] == "")
                                            <option selected></option>
                                        @else
                                            <option value="{{$data['localidad_id']}}" selected>{{$data['localidad_name']}}</option>
                                        @endif
                                    </select>
                                    <input type="hidden" id="localidad_id_previa"    value={{$data['localidad_id']}} >
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Código Postal</label>
                                    <input type="text" name="cp" id="cp" value="{{$data['cp']}}" class="form-control required" placeholder="Codigo Postal">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Calle</label>
                                    <input type="text" name="calle" id="calle" value="{{$data['calle']}}" class="form-control required" placeholder="Calle">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="number" name="calle_nro" id="calle_nro" value="{{$data['calle_nro']}}" class="form-control required" placeholder="Número">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Piso / Depto</label>
                                <input type="text" name="pisodto" id="pisodto" value="{{$data['pisodto']}}" class="form-control" placeholder="Depto / Piso">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2>Datos Laborales <FONT SIZE=1>(Se puede poner mas de 1)</font></h2>
                <div class="list-icons">
                    <button type="button" onclick="add_button()" class="abrir text-white-400 border-white-400">
                    <i class="icon-plus-circle2 mr-2"></i>Agregar Relación laboral
                </div>
                <div class="content">
                    @php
                        $contador=0;
                    @endphp
                    @if($data['q_relLab'] == "")
                        <div class='fila'>
                            <div class="row mt-2" class="cRL" id="caja_1">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Relación Laboral </label>
                                        <select name="tiporelacionlaboral" class="form-control tiporelacionlaboral required"  data-placeholder="Relación Laboral" data-fouc>
                                            @foreach ($tiporelacionlaborales as $item => $value)
                                                <option value="{{$item}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Actividad o Profesión </label>
                                        <input type="text" name="actividad" id="actividad" data-placeholder="Actividad" class="form-control actividad required">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="valueID" id="valueID" value="1">

                            <div class="inner"></div>
                    @else
                        @foreach($data['q_relLab'] as $q => $key)
                            <div class='fila'>
                                <div class="row mt-2" class="cRL" id={{"caja_".$contador}}>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Relación Laboral </label>
                                            <select name="tiporelacionlaboral" class="form-control tiporelacionlaboral required"  data-placeholder="Relación Laboral" data-fouc>
                                            <option selected value="{{ $key->relacion_laboral_id}}">{{$key->name}}</option>
                                                @foreach ($tiporelacionlaborales as $item => $value)
                                                    <option value="{{$item}}">{{$value}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Actividad o Profesión </label>
                                             <input type="text" name="actividad" id="actividad" data-placeholder="Actividad" class="form-control actividad required" value="{{$key->actividad_id}}">
                                        </div>
                                        <div style="margin-top: -30px;  margin-left:100%;">
                                            <i class="fas fa-trash-alt borrarAdd2"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $contador++
                            @endphp
                        @endforeach
                        <div class="inner"></div>
                        <input type="hidden" name="valueID" id="valueID" value="{{$contador}}">
                    @endif
                </div>
            </div>
            <!--
            <div class="mt-5">
                <h2>Declaración jurada sobre relación con agentes asesores globales de inversión</h2>
            </div>
            <div class="content">
                <div class='fila'>
                    <div class="row mt-2">
                        <div class="col-md-10">
                            <div class="form-group">
                                <div class="form-group">
                                    <p>
                                        De conformidad con lo dispuesto en el Anexo I del Capítulo I de la RG 731/2018 de la CNV,
                                        modificatorias y complementarias, declara usted que posee un convenio firmado con un Agente Asesor Global
                                        de Inversiones (”AAGI”).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <select name="tieneagente" id="tieneagente" class="form-control required" data-fouc>

                                    @if($data['tieneagente'] == "1" or $data['tieneagente'] == "" or is_null($data['tieneagente']))
                                        <option value="1" selected>NO</option>
                                        <option value="2">Si</option>
                                    @else
                                        <option value="2" selected>SI</option>
                                        <option value="1">NO</option>
                                    @endif


                            </select>
                        </div>
                    </div>
                </div>
                <div class='fila'>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="col-md-9" id='cajaAgente' >
                                <div class="form-group">
                                    <label>Agente</label>
                                    <input type="text" name="agente" id="agente" class="form-control" value="{{$data['agente']}}" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->



            <div class="mt-5">
                <h2>Declaraciones Juradas Obligatorias</h2>

                <div class="content">
                    <div class='fila'>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Persona Expuesta Politicamente<i class="fas fa-info-circle" data-toggle="modal" data-target="#persexopo" style="color: #0083a7;"></i></label>
                                    <select name="personaexpuesta" id="personaexpuesta" class="form-control required" data-fouc>
                                            @if($data['personaexpuesta'] == "1" or $data['personaexpuesta'] == "" )
                                                <option value="1" selected>NO</option>
                                                <option value="2">Si</option>
                                            @else
                                                <option value="2" selected>SI</option>
                                                <option value="1">NO</option>
                                            @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9" id="cajaMotivo" >
                                <div class="form-group">
                                    <label>Motivo</label>
                                <input type="text" name="motivo" id="motivo" class="form-control" placeholder="Motivo" value="{{$data['motivo']}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Condición de inversor calificado <i class="fas fa-info-circle" data-toggle="modal" data-target="#inversor_calificado_info" style="color: #0083a7;"></i></label>
                                    <select name="inversor_calificado" id="inversor_calificado" class="form-control " data-fouc>
                                        @if($data['inversor_calificado'] == "1" or $data['inversor_calificado'] == "" )
                                                <option value="1" selected>No soy Inversor Calificado</option>
                                                <option value="2">Soy Inversor Calificado</option>
                                            @else
                                                <option value="2" selected>Soy Inversor Calificado</option>
                                                <option value="1">No soy Inversor Calificado</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sujeto Obligado <i class="fas fa-info-circle" data-toggle="modal" data-target="#sujobli" style="color: #0083a7;"></i></label>
                                    <select name="sujetoobligado" id="sujetoobligado" class="form-control " data-fouc>
                                        @if($data['sujetoobligado'] == "1" or $data['sujetoobligado'] == "" )
                                                <option value="1" selected>NO</option>
                                                <option value="2">Si</option>
                                            @else
                                                <option value="2" selected>SI</option>
                                                <option value="1">NO</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-5" >
                                <div class="form-group">
                                    <label>Otra residencia fiscal fuera de Argentina - "Ley FATCA y OCDE" <i class="fas fa-info-circle" style="color: #0083a7;" data-toggle="modal" data-target="#leyfacta"></i></label>
                                    <select name="residenciaexterior" id="residenciaexterior" class="form-control " data-fouc>
                                        @if($data['residenciaexterior'] == "1" or $data['residenciaexterior'] == "" )
                                                <option value="1" selected>NO</option>
                                                <option value="2">Si</option>
                                            @else
                                                <option value="2" selected>SI</option>
                                                <option value="1">NO</option>
                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4" id="pais_residencia">
                                <div class="form-group">
                                    <label>Pais</label>
                                    <select name="pais_id_otra_residencia"  id="pais_id_otra_residencia" data-placeholder="País" class="form-control " data-fouc>
                                        @foreach ($paises as $item => $value)
                                            @if($item == $data['pais_id_otra_residencia'])
                                                <option value="{{$item}}" selected>{{$value}}</option>
                                            @else
                                                <option value="{{$item}}">{{$value}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 mensaje_rojo" style="margin-top:10px;color:red;display:none;" >
                                <div class="form-group">
                                    <label>Deberá completar y presentar el Formulario W8 proporcionado por Sailing.</label>
                                </div>
                            </div>

                             <div class="col-md-12 ide_tribu" style="display:none;margin-top:20px;" >
                                <div class="form-group">
                                    <label>Número de Identificación Fiscal (NIF)</label>
                                <input type="text" name="ide_tribu" id="ide_tribu" value="{{$data['ide_tribu']}}" class="form-control" placeholder="Número de Identificación Fiscal (NIF)" >
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Agente Asesor Global de Inversiones (”AAGI”)</label>
                                    <select name="tieneagente" id="tieneagente" class="form-control " data-fouc>
                                        @if($data['tieneagente'] == "1" or $data['tieneagente'] == "")
                                            <option value="1" selected>No tengo cuenta</option>
                                            <option value="2">Tengo Cuenta</option>
                                        @else
                                            <option value="2" selected>Tengo Cuenta</option>
                                            <option value="1">No tengo cuenta</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="col-md-9" id='cajaAgente' >
                                            <div class="form-group">
                                                <label>Agente</label>
                                                <input type="text" name="agente" id="agente" class="form-control" value="{{$data['agente']}}" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2>Leer atentamente por favor</h2>

                <div class="content">
                    <div class='fila'>
                        <div class="row mt-2">
                            <div class="col-md-12">
                Manifiesta, en carácter de declaración jurada que los valores aportados para operar a través de Sailing S.A. son lícitos en función de las leyes vigentes de la República Argentina y las que se dicten en el futuro en materia de prevención de lavado de dinero y financiamiento del terrorismo. Asimismo, manifiesta expresamente la adhesión a las políticas y procedimientos de prevención de lavado de activos y financiamiento del terrorismo adoptadas por Sailing S.A. de acuerdo con los términos e instrucciones particulares emitidas por las leyes y reglamentaciones vigentes de la República Argentina y las que se dicten en el futuro. La presente adhesión incluye asimismo autorización expresa para que Sailing S.A., en su carácter de Sujeto Obligado en los términos de la Ley 25.246, pueda solicitar documentación e información que entienda pertinente a los efectos de realizar una debida diligencia de clientes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <input type="hidden" name="status" id="status" value="{{$data['status']}}">
            <div style="width:100%;height: 50px;">
                <div onclick="mover(2);"              style="margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer" class = "float-right">Continuar</div>
                <div onclick="window.history.back();" style="margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer" class = "float-right">Volver</div>
            </div>
        </div>
    </div>
</div>

@include('admin2.formularios.form.modal_expuesta')
@include('admin2.formularios.form.sujeto_obligado')
@include('admin2.formularios.form.ley_facta')
@include('admin2.formularios.form.documentacion_origen_fondo')


