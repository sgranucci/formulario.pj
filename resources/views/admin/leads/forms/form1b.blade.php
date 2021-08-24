<h6>Datos Personales y Declaración Jurada</h6>
<fieldset>
    
<section class="contact">
    <div class="container">
        <div class="content">       
            <div class='fila'>
                <div class="row mt-2">               
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nombre y Apellido</label>
                            <input type="text" name="name" class="form-control required" id="name" value="{{$name}}">
                            @if ($errors->has('name'))
                                <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Email</label> 
                            <input type="text" name="email" id="email" class="form-control required" value="{{$email}}">
                            @if ($errors->has('email'))
                                <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Fecha de nacimiento</label>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" >
                                    <select name="birthDay" id="birthDay"  data-placeholder="Dia" class="form-control form-control-select2 required" data-fouc>
                                        @for ($i = 1; $i < 32; $i++)
                                            @if($birth_day == $i or $birth_day == "")
                                                <option value="{{$birth_day}}" selected>{{$birth_day}}</option>
                                            @endif
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="birthMonth" id="birthMonth" data-placeholder="Mes" class="form-control form-control-select2 required" data-fouc>
                                        @foreach ($meses as $item => $value)
                                            @if($birth_month == $item or $birth_month == "")
                                                <option value="{{$birth_month}}" selected>{{$value}}</option>
                                            @endif
                                            <option value="{{$item}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="form-group">
                                <select name="birthYear" id="birthYear" data-placeholder="Año" value="{{$birth_year}}" class="form-control form-control-select2 required" data-fouc>
                                        @for ($i = (\Carbon\Carbon::now()->year - 18); $i > (\Carbon\Carbon::now()->year - 118); $i--)
                                            @if($birth_year == $i or $birth_year == "")
                                                <option value="{{$birth_year}}" selected>{{$birth_year}}</option>
                                            @endif
                                            <option value="{{$i}}">{{$i}}</option>                                        
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>             
                    </div>         
                </div>
            
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>DNI | CI | Pasaporte </label>
                            <select name="tipo_docuemnto_id" id="tipo_docuemnto_id"  data-placeholder="Tipo Documento" class="form-control form-control-select2 required" data-fouc>
                            <option></option> 
                                @foreach ($tipo_documentos as $item => $value)
                                    @if($tipo_documento_id == $item or $tipo_documento_id == "")
                                        <option value="{{$tipo_documento_id}}" selected>{{$tipo_documento_name}}</option>
                                    @endif    
                                <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Número</label>
                            <input type="text" name="nro" id="nro" class="form-control required" value="{{$nro}}">
                           
                        </div>
                    </div>

                    <div class="col-md-2" >
                        <div class="form-group">
                            <label>Estado Civil </label>
                            <select name="estado_civil_id"  id="estado_civil_id" data-placeholder="Estado civil" class=" form-control form-control-select2 required" data-fouc>
                                <option></option> 
                                @foreach ($estado_civiles as $item => $value)
                                    @if($estado_civil_id == $item or $estado_civil_id == "")
                                        <option value="{{$estado_civil_id}}" selected>{{$estado_civil_name}}</option>
                                    @endif
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Género </label>
                            <select name="genero_id" id="genero_id" class="form-control form-control-select2 required"  data-placeholder="Femenino | Masculino" data-fouc> 
                                @foreach ($generos as $item => $value)
                                    @if($genero_id == $item or $genero_id == "")
                                        <option value="{{$genero_id}}" selected>{{$genero_name}}</option>
                                    @endif    
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nacionalidad</label>
                            <select name="pais_id" id="pais_id" data-placeholder="País" class="form-control form-control-select2 required" data-fouc>       
                                @foreach ($paises as $item => $value)
                                    @if($pais_id == $item or $pais_id == "")
                                        <option value="{{$item}}" selected>{{$pais_name}}</option>
                                    @endif
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group" >
                                <label>Cod. Area</label>
                                <input type="number" name="cod_area" id="cod_area" value="{{$cod_area}}" class="form-control required" placeholder="(54)" >
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Celular (Sin el 15)</label>
                                <input type="text" name="celular" id="celular" value="{{$celular}}" class="form-control required" placeholder="9999-9999" >
                            </div>
                        </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>CUIT | CUIL</label>
                            <input type="text" maxlength="2"  name="preCuit" id="preCuit" class="form-control " aria-modal="1" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label style="color:white">a</label>
                            <input value="{{$nro}}" type="text" name="cuit" id="cuit" class="form-control" disabled placeholder="">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label style="color:white">a</label>
                            <input type="text" maxlength="1"   name="postCuit" id="postCuit" class="form-control " placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</section>
    
<section class="contact">
    <div class="container">
        <div class="content">       
            <div class='fila'>
                <div class="row mt-2">               
                    <div class="col-md-3">
                        <div class="form-group" wire:ignore>
                            <label>País donde radica actualmente </label>
                            <select name="direccion_pais_id" id="direccion_pais_id" data-placeholder="País" class="form-control form-control-select2 required" data-fouc> 
                                @foreach ($paises as $item => $value)
                                    @if($direccion_pais_id == $item or $direccion_pais_id == "")
                                        <option value="{{$item}}" selected>{{$direccion_pais_name}}</option>
                                    @endif
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id='prov'>
                        <div class="form-group">
                            <label>Provincia</label>
                            <select name="provincia_id" id="provincia_id" data-placeholder="Provincia" class="form-control form-control-select2 required" data-fouc>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id='loc'>
                        <div class="form-group">
                            <label>Localidad</label>
                            <select name="localidad_id" id='localidad_id' data-placeholder="Localidad" class="form-control form-control-select2 required" data-fouc>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" id="provinciaext"> 
                        <div class="form-group">
                            <label>Provincia</label>
                            <input type="text" name="provinciaext" id="provinciaext" value="{{$provinciaext}}" class="form-control " placeholder="">
                        </div>
                    </div>
                    <div class="col-md-3" id="localidadext">
                        <div class="form-group">
                            <label>Localidad</label>
                            <input type="text" name="localidadext" id="localidadext" value="{{$localidadext}}" class="form-control " placeholder="">
                        </div>
                    </div>  
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Código Postal</label>
                            <input type="text" name="cp" id="cp" value="{{$cp}}" class="form-control required" placeholder="Codigo Postal">
                        </div>
                    </div>    
                </div>
            
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Calle</label>
                            <input type="text" name="calle" id="calle" value="{{$calle}}" class="form-control required" placeholder="Calle">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Número</label>
                            <input type="number" name="calle_nro" id="calle_nro" value="{{$calle_nro}}" class="form-control required" placeholder="Número">
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Piso / Depto</label>
                        <input type="text" name="pisodto" id="pisodto" value="{{$pisodto}}" class="form-control" placeholder="Depto / Piso">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</section>
    
    {{-- <div class="card">
        <div class="card-header bg-primary text-white header-elements-inline">
            <h6 class="card-title">Datos Laborales</h6>
            <div class="header-elements">
                <div class="list-icons">
                    <button type="button" onclick="add_button()" class="btn bg-blue-400 text-white-400 border-white-400">
                    <i class="icon-plus-circle2 mr-2"></i>Agregar Relación laboral
                </div>
            </div>
        </div>
        <div class="car-body ">
            <div class="container" id="relacionlaboralcontenedor">
                <div class="row mt-2" class="cRL" id="caja_1">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Relación Laboral </label>
                            <select name="tiporelacionlaboral" class="form-control form-control-select2 tiporelacionlaboral required"  data-placeholder="Relación Laboral" data-fouc> 
                                <option></option> 
                                @foreach ($tiporelacionlaborales as $item => $value)
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                   <div class="col-md-6">
                        <div class="form-group">
                            <label>Actividad o Profesión </label>
                            <select name="actividad" id="actividad" data-placeholder="Actividad" class="form-control form-control-select2 actividad required" data-fouc>
                                <option></option> 
                                @foreach ($actividades as $item => $value)
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="valueID" id="valueID" value="1">

                <input type="hidden" name="aTipoL" id="aTipoL" value="">
                <input type="hidden" name="aActividad" id="aActividad" value="">
                <div class="inner"></div>


            </div>
        </div>   
    </div>
    
    <div class="card">
        <div class="card-header bg-primary text-white header-elements-inline">
            <h6 class="card-title">Declaración Jurada</h6>
        </div>
        <div class="car-body ">
            <div class="container">
                <div class="row mt-2">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Persona Expuesta Politicamente
                                <span data-toggle="popover" data-placement="top" title="Ayuda sobre..." data-content="De acuerdo a la resolucion ..." class="input-group-addon" id="sizing-addon2">
                                    <i class="icon-info22 m-2"></i>
                                </span>
                            </label>
                            <select name="personaexpuesta" id="personaexpuesta" class="form-control form-control-select2 required" data-fouc>
                                <option value="1" selected>NO</option> 
                                <option value="2">Si</option> 
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-9" id="motivo" style="margin-top: 7px;">
                        <div class="form-group">
                            <label>Motivo</label>
                            <input type="text" name="motivo" id="motivo" class="form-control" placeholder="Motivo" style="margin-top: 8px;">
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sujeto Obligado </label>
                            <select name="sujetoobligado" id="sujetoobligado" class="form-control form-control-select2" data-fouc>
                                <option value="1" selected>NO</option> 
                                <option value="2">SI</option>  
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3" >
                        <div class="form-group">
                            <label>Otra residencia fiscal fuera de Argentina </label>
                            <select name="residenciaexterior" id="residenciaexterior" class="form-control form-control-select2 " data-fouc>
                                <option value="1" selected>NO</option> 
                                <option value="2">Si</option> 
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6" id="pais_residencia">
                        <div class="form-group">
                            <label>Pais</label>
                            <select name="pais_id_otra_residencia"  id="pais_id_otra_residencia" data-placeholder="País" class="form-control form-control-select2" data-fouc>
                                <option></option> 
                                @foreach ($paises as $item => $value)
                                    <option value="{{$item}}">{{$value}}</option>        
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div> --}}
</fieldset>         



