@extends('lay.main')
@section('content')
<section class="nosotros-mod1">
    <div class="container">
      <img data-aos="fade-right" data-aos-easing="ease" data-aos-delay="300" src="https://www.sailinginversiones.com/images/bloque-azul-mod1-acciones.png" alt="" class="aos-init">

      <article>
        <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Apertura de Cuenta</span>
        </h1>
      </article>

      <img data-aos="fade-left" data-aos-easing="ease" data-aos-delay="1000" src="https://www.sailinginversiones.com/images/foto-mod1-nosotros.png" alt="" class="aos-init">
    </div>
  </section>
<form id="form" class="wizard-form steps-validation wizard clearfix"  action="{{route('formularioSave')}}"  method="post" enctype="multipart/form-data" data-fouc>
    @csrf

    <div class="steps clearfix">
        <ul role="tablist">
            <li role="tab" class="first" aria-disabled="false" aria-selected="true" style="    height: 70px;">
                <div class="number" style=" margin-top: 20px; color:black;" id="paso1_nro">1</div>
                <div style="margin-left: 184px;margin-top: 65px;color:black;" id="paso1_texto">Datos personales</div>
            </li>
            <li role="tab" class="disabled" aria-disabled="false" aria-selected="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso2_nro">2</div>
                <div style="margin-left: 184px;margin-top: 65px;color:black;" id="paso2_texto">Documentación</div>
            </li>
            <li role="tab" class="disabled" aria-disabled="false" aria-selected="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso3_nro">3</div>
                <div style="margin-left: 184px;margin-top: 65px;color:black;" id="paso3_texto">Test Inversor</div>
            </li>
            <li role="tab" class="disabled last" aria-disabled="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso4_nro">4</div>
                <div style="margin-left: 154px;margin-top: 65px;color:black;" id="paso4_texto">Términos y condiciones</div>
            </li>
        </ul>
    </div>

    <section class="contacto-mod2">
        <div class="container step1">
            <h2>Datos Personales</h2>
            <div class="content">
                <div class='fila'>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre y Apellido</label>
                                <input type="text" name="name" class="form-control required" id="name" value="{{$name}}">
                                @if ($errors->has('name'))
                                    <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control required" value="{{$email}}">
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
                                        <select name="birthDay" id="birthDay"  data-placeholder="Dia" class="form-control form-control-select2 required" data-fouc>
                                            @for ($i = 1; $i < 32; $i++)
                                                @if($birth_day == $i)
                                                    <option value="{{$birth_day}}" selected>{{$birth_day}}</option>
                                                @endif
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                {{-- {{dd($birth_month)}} --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="birthMonth" id="birthMonth" data-placeholder="Mes" class="form-control form-control-select2 required" data-fouc>
                                            @foreach ($meses as $item => $value)
                                                @if($birth_month == $item)
                                                    <option value="{{$birth_month}}" selected>{{$value}}</option>
                                                @endif
                                                <option value="{{$item}}">{{$value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
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

                    <div class="row mt-4">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipo Documento</label>
                                <select name="tipo_docuemnto_id" id="tipo_docuemnto_id"  data-placeholder="Tipo Documento" class="form-control form-control-select2 required" data-fouc>
                                    @foreach ($documento_query as $key => $value)
                                    @if ($tipo_documento_id == $key)
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
                                <input type="text" name="nro" id="nro" class="form-control required" value="{{$nro}}">
                            </div>
                        </div>

                        <div class="col-md-3" >
                            <div class="form-group">
                                <label>Estado Civil </label>
                                    <select name="estado_civil_id"  id="estado_civil_id" data-placeholder="Estado civil" class=" form-control form-control-select2 required" data-fouc>
                                    @foreach ($estado_civiles as $key => $value)
                                        @if($estado_civil_id == $key)
                                            <option value="{{$key}}" selected>{{$value}}</option>
                                            @continue
                                        @endif
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Género </label>
                                <select name="genero_id" id="genero_id" class="form-control form-control-select2 required"  data-placeholder="Femenino | Masculino" data-fouc>
                                    @foreach ($generos as $key => $value)
                                        @if($genero_id == $key)
                                            <option value="{{$key}}" selected>{{$value}}</option>
                                            @continue
                                        @endif
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Nacionalidad</label>
                                <select name="pais_id" id="pais_id" data-placeholder="País" class="form-control form-control-select2 required" data-fouc>
                                    @foreach ($paises as $item => $value)
                                        @if($pais_id == $item or $pais_id == "")
                                            <option value="{{$item}}" selected>{{$pais_name}}</option>
                                            @continue
                                        @endif
                                        <option value="{{$item}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2">
                            <div class="form-group" >
                                    <label>Cod. Area</label>
                                    <input type="text" name="cod_area" id="cod_area" value="{{$cod_area}}" class="form-control required" placeholder="(54)" >
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Celular (Sin el 15)</label>
                                    <input type="text" name="celular" id="celular" value="{{$celular}}" class="form-control required" placeholder="9999-9999" >
                                </div>
                            </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>CUIT | CUIL</label>
                                <input type="text" maxlength="2"  name="preCuit" id="preCuit" class="form-control " aria-modal="1" value="{{$preCuit}}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label style="color:white">a</label>
                                <input value="{{$nro}}" type="text" name="cuit" id="cuit" class="form-control" maxlength="8"  placeholder="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label style="color:white">a</label>
                                <input type="text" maxlength="1"   name="postCuit" id="postCuit" class="form-control " value="{{$postCuit}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2>Domicilio Real</h2>
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
                                                @continue
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

                        <div class="row mt-4">
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

            <div class="mt-5">
                <h2>Datos Laborales</h2>
                <div class="list-icons">
                    <button type="button" onclick="add_button()" class="abrir text-white-400 border-white-400">
                    <i class="icon-plus-circle2 mr-2"></i>Agregar Relación laboral
                </div>
                <div class="content">
                    <div class='fila'>
                        <div class="row mt-2" class="cRL" id="caja_1">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Relación Laboral </label>
                                    <select name="tiporelacionlaboral" class="form-control form-control-select2 tiporelacionlaboral required"  data-placeholder="Relación Laboral" data-fouc>
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

                        <input type="hidden" name="aTipoL" id="aTipoL" value="">
                        <input type="hidden" name="aActividad" id="aActividad" value="">
                        <div class="inner"></div>

                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h2>Declaración Jurada</h2>
                <div class="content">
                    <div class='fila'>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Persona Expuesta Politicamente</label>
                                    <select name="personaexpuesta" id="personaexpuesta" class="form-control form-control-select2 required" data-fouc>
                                        <option value="1" selected>NO</option>
                                        <option value="2">Si</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9" id="motivo" >
                                <div class="form-group">
                                    <label>Motivo</label>
                                    <input type="text" name="motivo" id="motivo" class="form-control" placeholder="Motivo" >
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sujeto Obligado </label>
                                    <select name="sujetoobligado" id="sujetoobligado" class="form-control form-control-select2" data-fouc>
                                        <option value="1" selected>NO</option>
                                        <option value="2">SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="form-group">
                                    <label>Otra residencia fiscal fuera de Argentina </label>
                                    <select name="residenciaexterior" id="residenciaexterior" class="form-control form-control-select2 " data-fouc>
                                        <option value="1" selected>NO</option>
                                        <option value="2">Si</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-5" id="pais_residencia">
                                <div class="form-group">
                                    <label>Pais</label>
                                    <select name="pais_id_otra_residencia"  id="pais_id_otra_residencia" data-placeholder="País" class="form-control form-control-select2" data-fouc>
                                        @foreach ($paises as $item => $value)
                                            <option value="{{$item}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <input type="hidden" name="status" id="status" value="{{$status}}">
            <div style="width:100%;height: 50px;">
                <div onclick="mover(2);" style="flex: 1;align-items: flex-end;   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right">Continuar</div>
            </div>
        </div>

        <div class="container step2" style="display: none">
            <fieldset>
                <div class="card" style="border:0px solid black !important;">
                    <h2>Documentación que acredita identidad</h2>
                    <div class="car-body ">
                        <div class="container">
                            <div class="row mt-2">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="d-block">DNI Frente</label>
                                        <input name="dni_frente_file" id="dni_frente_file" type="file" onchange="readURL(this,'dni_frente');" class="form-input-styled required" data-fouc enctype="multipart/form-data">
                                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                                        <img id="dni_frente" class="img-fluid img-preview rounded" style=" width: 135px;" src="http://placehold.it/180" alt="your image" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="d-block">DNI Dorso</label>
                                        <input name="dni_dorso_file" id="dni_dorso_file"  type="file" onchange="readURL(this,'dni_dorso');" class="form-input-styled required" data-fouc enctype="multipart/form-data" data-fouc>
                                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                                        <img id="dni_dorso" class="img-fluid img-preview rounded" style=" width: 135px;" src="http://placehold.it/180" alt="your image" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="d-block">Selfie con DNI:</label>
                                        <input name="selfi_file" id="selfi_file" type="file" onchange="readURL(this,'selfi');" class="form-input-styled required" data-fouc enctype="multipart/form-data" data-fouc>
                                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                                        <img id="selfi" class="img-fluid img-preview rounded" style=" width: 135px;" src="http://placehold.it/180" alt="your image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="border:0px solid black !important;margin-top:15px;">

                    <h2>Documentación Origen de Fondos</h2>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr class="table-active text-nowrap">
                                                <th>Relación laboral</th>
                                                <th>Documentación requerida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Relacion de dependencia</td>
                                                <td>Dos a mas recibos de sueldo con firma del empleador</td>
                                            </tr>
                                            <tr>
                                                <td>Monotributista</td>
                                                <td>Facturas del último mes</td>
                                            </tr>
                                            <tr>
                                                <td>Jubilado</td>
                                                <td>Recibo de la Jubilación</td>
                                            </tr>
                                            <tr>
                                                <td>Otros</td>
                                                <td>Certificado de ingresos, boleto de venta de automotor o inmueble, acta societaria con distribucion de dividendos, entre otros.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <div id="drop-region">
                                        <div class="drop-message">
                                            Drag & Drop images or click to upload
                                        </div>
                                        <div id="image-preview"></div>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
                <div class="card" style="border:0px solid black !important;margin-top:15px;">

                    <h2>Servicios (opcional)</h2>
                    <div class="car-body ">
                        <div class="container">
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Servicio:</label>
                                        <input name="servicio_file" data-fouc enctype="multipart/form-data" id="servicio_file" onchange="readURL(this,'servicio');" type="file" class="form-input-styled" data-fouc>
                                        <span class="form-text text-muted">Formato Aceptado: pdf, doc. Maximo tamaño 2Mb</span>
                                        <img id="servicio" class="img-fluid img-preview rounded" src="http://placehold.it/180" alt="your image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </fieldset>

            <br><br>

            <hr>

            <div style="width:100%;height: 50px;">
                <div onclick="mover(3);" style="flex: 1;align-items: flex-end;      margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Continuar</div>
                <div onclick="mover(1);" style="flex: 1;align-items: flex-end;       margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Volver</div>

            </div>
        </div>
        <div class="container step3" style="display: none">
            <section class="tdi-mod2">
                <img src="https://www.sailinginversiones.com/images/bg1-mod6-home.png" alt="">
                <div class="container">
                  <h2>Evalue su perfil de inversor</h2>

                  <form id="tdi-form">
                    <h3>El test consta de 9 preguntas para poder analizar de forma específica objetivos, horizonte de inversor, necesidades de liquidez, grado de tolerancia y entendimiento del riesgo que estás dispuesto a asumir.</h3>

                    <fieldset id="preg1">
                      <div class="progress uno"></div>

                      <h4>1 - ¿Cuál es tu edad?</h4>

                      <div class="options">
                        <label>Menor a 25 años <input type="radio" name="uno" value="3" checked></label>
                        <label>Entre 26 y 35 años <input type="radio" name="uno" value="2"></label>
                        <label>Entre 36 y 55 años <input type="radio" name="uno" value="1"></label>
                        <label>Mayor a 55 años <input type="radio" name="uno" value="0"></label>
                      </div>

                      <div class="btns">
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg2">
                      <div class="progress dos"></div>

                      <h4>2 - ¿Cuánto conoces del mercado de capitales?</h4>

                      <div class="options">
                        <label>Nada <input type="radio" name="dos" value="0" checked></label>
                        <label>Poco <input type="radio" name="dos" value="1"></label>
                        <label>Bastante / Mucho <input type="radio" name="dos" value="2"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg3">
                      <div class="progress tres"></div>

                      <h4>3 - ¿Ya realizaste alguna inversión en el mercado de capitales?</h4>

                      <div class="options">
                        <label>No <input type="radio" name="tres" value="0" checked></label>
                        <label>Si <input type="radio" name="tres" value="2"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg4">
                      <div class="progress cuatro"></div>

                      <h4>4 - ¿Qué porcentaje de tus ahorros estás dispuesto a invertir en el mercado de capitales?</h4>

                      <div class="options">
                        <label>Menos del 25% <input type="radio" name="cuatro" value="1" checked></label>
                        <label>Entre el 26% y el 40% <input type="radio" name="cuatro" value="2"></label>
                        <label>Entre el 41 % y el 65% <input type="radio" name="cuatro" value="3"></label>
                        <label>Más del 65% <input type="radio" name="cuatro" value="4"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg5">
                      <div class="progress cinco"></div>

                      <h4>5 - ¿En cuá de los siguientes productos invertirías?</h4>

                      <div class="options">
                        <label>100% activos de renta ﬁja a corto plazo: menor rentabilidad y bajo riesgo. <input type="radio"
                            name="cinco" value="0" checked></label>
                        <label>60% activos de renta ﬁja a corto plazo y 40% activos de renta variable a mediano plazo: mayor
                          rentabilidad con mayor riesgo. <input type="radio" name="cinco" value="2"></label>
                        <label>40% activos de renta ﬁja a corto plazo y 60% activos de renta variable a mediano plazo <input
                            type="radio" name="cinco" value="4"></label>
                        <label>100% activos de renta variable a mediano o largo plazo <input type="radio" name="cinco"
                            value="6"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg6">
                      <div class="progress seis"></div>

                      <h4>6 - ¿Cuál es el plazo máximo que pensás mantener tus inversiones en el mercado de capitales?</h4>

                      <div class="options">
                        <label>Menos de 4 meses <input type="radio" name="seis" value="0" checked></label>
                        <label>Entre 4 y 12 meses <input type="radio" name="seis" value="1"></label>
                        <label>Mas de 12 meses <input type="radio" name="seis" value="3"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg7">
                      <div class="progress siete"></div>

                      <h4>7 - En el momento de realizar una inversión, ¿Cuál de las siguientes opciones preferís?</h4>

                      <div class="options">
                        <label>Preservar el dinero que se invirtió obteniendo una rentabilidad mínima sin arriesgar mi capital <input
                            type="radio" name="siete" value="0" checked></label>
                        <label>Tener una ganancia apenas superior a la de un plazo ﬁjo, aunque esté sujeta a una variación mínima del
                          mercado <input type="radio" name="siete" value="2"></label>
                        <label>Puedo asumir una pérdida del 10% si espero tener a mediano / largo plazo una mayor rentabilidad <input
                            type="radio" name="siete" value="4"></label>
                        <label>Obtener una ganancia signiﬁcativa, corriendo el riesgo de perder más de la mitad de la inversión
                          inicial <input type="radio" name="siete" value="6"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg8">
                      <div class="progress ocho"></div>

                      <h4>8 - En el supuesto de una baja importante en tu portafolio de inversiones, vos:</h4>

                      <div class="options">
                        <label>Rescatarías el total de tus activos <input type="radio" name="ocho" value="2" checked></label>
                        <label>Rescatarías parte del total de tus activos <input type="radio" name="ocho" value="4"></label>
                        <label>Mantendrías la totalidad de tus activos esperando que suba <input type="radio" name="ocho"
                            value="6"></label>
                        <label>Adicionarías más capital esperando comprar barato <input type="radio" name="ocho" value="8"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Siguiente</button>
                      </div>
                    </fieldset>

                    <fieldset id="preg9">
                      <div class="progress nueve"></div>

                      <h4>9 - ¿Estarías dispuesto a asumir una baja en el valor de tus activos?</h4>

                      <div class="options">
                        <label>De hasta el 15% <input type="radio" name="nueve" value="2" checked></label>
                        <label>Entre el 15 y 30% <input type="radio" name="nueve" value="4"></label>
                        <label>Más del 30% <input type="radio" name="nueve" value="6"></label>
                      </div>

                      <div class="btns">
                        <button type="button">Anterior</button>
                        <button class="active next" type="button">Finalizar</button>
                      </div>
                    </fieldset>

                    <fieldset id="datos">
                      <h4>Tu perfil es: <span></span></h4>

                      <p></p>

                      <h5>Completá tus datos para recibir recomendaciones de inversión acorde a tu perfil.</h5>

                      <div class="options">
                        <input type="text" name="nombre" required placeholder="Nombre y apellido *">
                        <input type="text" name="tel" required placeholder="Teléfono *">
                        <input type="email" name="email" required placeholder="Email *">
                        <p>* Campos obligatorios</p>
                      </div>

                      <div class="btns">
                        <button class="active send">Enviar</button>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </section>

            <div style="width:100%;height: 50px;">
                <div onclick="mover(4);" style="flex: 1;align-items: flex-end;      margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Continuar</div>
                <div onclick="mover(2);" style="flex: 1;align-items: flex-end;       margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Volver</div>
            </div>
        </div>
        <div class="container step4" style="display: none">
            <h2>Términos y condiciones</h2>
            <fieldset>
                <div class="card" style="border:0px solid black !important;margin-top:15px;">

                    <div class="car-body ">
                        <div class="container">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        Declaro que todos los datos consignados son correctos, ciertos y verdaderos, que he leído detenidamente y aceptado la totalidad de los <a href="../public/descargas/Condiciones_Generales_CC.pdf" target="_blank">términos y condiciones</a>a estipulados en el presente.<br><br>

                                        Doy conformidad a las <a href="../public/descargas/Tabla_de_Comisiones.pdf" target="_blank">comisiones, aranceles y gastos</a> derivados a la cuenta comitente y demás gastos aplicables de conformidad al presente convenio y declaro conocer y aceptar los textos de los <a href="../public/descargas/Reglamento_de_Gestioon_FCI.pdf" target="_blank">reglamentos</a> de gestión de los fondos comunes de inversión de los cuales Sailing tiene convenio.


                                        <br>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" name="tyc" id="tyc" class="form-input-styled required" data-fouc>
                                                            He leído y acepto los términos y condiciones de uso
                                            </label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <hr>

            <div style="width:100%;height: 50px;">
                <div onclick="mover(5);" style="flex: 1;align-items: flex-end;      margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Guardar</div>
                <div onclick="mover(3);" style="flex: 1;align-items: flex-end;       margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer;float:right;">Volver</div>


            </div>
        </div>

        <input type="hidden" name="archivo_1_file" id="archivo_1_file" value="" data-fouc enctype="multipart/form-data"  type="file"  data-fouc>
        <input type="hidden" name="archivo_2_file" id="archivo_2_file" value="" data-fouc enctype="multipart/form-data"  type="file"  data-fouc>
        <input type="hidden" name="archivo_3_file" id="archivo_3_file" value="" data-fouc enctype="multipart/form-data"  type="file"  data-fouc>

    </section>
    <input type="hidden" name="status" id="status" value="{{$status}}">
</form>
@endsection

<style type="text/css">

    .dz-message{
        display: none;
    }
    #drop-region {
    background-color: #fff;
    border-radius:20px;
    box-shadow:0 0 35px rgba(0,0,0,0.05);
    width:100%;
    padding:60px 40px;
    text-align: center;
    cursor:pointer;
    transition:.3s;
}
#drop-region:hover {
    box-shadow:0 0 45px rgba(0,0,0,0.1);
}

#image-preview {
    margin-top:20px;
}
#image-preview .image-view {
    display: inline-block;
    position:relative;
    margin-right: 13px;
    margin-bottom: 13px;
}
#image-preview .image-view img {
    max-width: 100px;
    max-height: 100px;
}
#image-preview .overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    z-index: 2;
    background: rgba(255,255,255,0.5);
}




.wizard-form[data-fouc].wizard {
    opacity: 1;
}
.wizard-form[data-fouc] {
    opacity: 0;
}
.wizard {
    width: 100%;
}


.wizard>.steps {
    position: relative;
    display: block;
    width: 100%;
}

.wizard>.steps>ul {
    display: table;
    width: 100%;
    table-layout: fixed;
    margin: 0;
    padding: 0;
    list-style: none;
}

.wizard>.steps>ul>li {
    display: table-cell;
    width: auto;
    vertical-align: top;
    text-align: center;
    position: relative;
}
* {
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
    font-family: "Raleway", sans-serif;
    box-sizing: border-box;
    text-align: justify;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.wizard>.steps>ul {
    display: table;
    width: 100%;
    table-layout: fixed;
    margin: 0;
    padding: 0;
    list-style: none;
}

.wizard>.steps>ul>li:first-child:before, .wizard>.steps>ul>li:last-child:after {
    content: none;
}
.wizard>.steps>ul>li:before {
    left: 0;
}
.wizard>.steps>ul>li:after, .wizard>.steps>ul>li:before {
    content: '';
    display: block;
    position: absolute;
    top: 2.375rem;
    width: 50%;
    height: 2px;
    background-color: #00bcd4;
    z-index: 9;
}

.wizard>.steps>ul>li:after {
    right: 0;
}
.wizard>.steps>ul>li:after, .wizard>.steps>ul>li:before {
    content: '';
    display: block;
    position: absolute;
    top: 2.375rem;
    width: 50%;
    height: 2px;
    background-color: #00bcd4;
    z-index: 9;
}

.wizard>.steps>ul>li {
    display: table-cell;
    width: auto;
    vertical-align: top;
    text-align: center;
    position: relative;
}

.wizard>.steps>ul {
    display: table;
    width: 100%;
    table-layout: fixed;
    margin: 0;
    padding: 0;
    list-style: none;
}

.wizard>.steps>ul>li:before {
    left: 0;
}
.wizard>.steps>ul>li:after, .wizard>.steps>ul>li:before {
    content: '';
    display: block;
    position: absolute;
    top: 2.375rem;
    width: 50%;
    height: 2px;
    background-color: #00bcd4;
    z-index: 9;
}

.wizard>.steps>ul>li:after {
    right: 0;
}
.wizard>.steps>ul>li:after, .wizard>.steps>ul>li:before {
    content: '';
    display: block;
    position: absolute;
    top: 2.375rem;
    width: 50%;
    height: 2px;
    background-color: #00bcd4;
    z-index: 9;
}
.wizard>.steps .number {
    background-color: #fff;
    color: #ccc;
    display: inline-block;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -1.1875rem;
    border: 2px solid #eee;
    font-size: .875rem;
    z-index: 10;
    line-height: 2.125rem;
    text-align: center;
    width: 2.375rem;
    height: 2.375rem;
    border-radius: 50%;
}

</style>

@push('scripts')
<script>
    var cur_num = 1;
    $(document).ready(function(){

        $("#cuit").val($("#nro").val());


        $( "#nro" ).keyup(function() {
            $("#cuit").val($("#nro").val())
        });

        $( "#nro" ).blur(function() {

           nro =  $( "#nro" ).val();


            $.ajax({
                url: "https://sisma.apn.gob.ar/api/dni/"+nro,
                dataType: "jsonp",
                success:function(data){
                   alert(data[0]['idPersona']);
                }
            });
        });


        $('a').click(function(){
            if ($(this)[0].hash=="#finish"){
                $("#form").submit();
            }
        });

        $("#provinciaext").hide();
        $("#localidadext").hide();

        $("#motivo").hide();
        $("#pais_residencia").hide();

        completarprovincias(1);
        completarLocalidades(1);

        $("#direccion_pais_id").change(function(){
            var direccion_pais_id = $(this).val();
            if( direccion_pais_id  != 1){
                $("#prov").hide();
                $("#loc").hide();
                $("#provinciaext").show();
                $("#localidadext").show();
            }else{
                $("#prov").show();
                $("#loc").show();
                $("#provinciaext").hide();
                $("#localidadext").hide();
                completarprovincias(direccion_pais_id);
            }

        });

        $("#provincia_id").change(function(){
            var  provincia_id = $(this).val();
            completarLocalidades(provincia_id);
        });

        $("#localidad_id").change(function(){
            var  localidad_id = $(this).val();
            completarCP(localidad_id);
        });

        $(".tiporelacionlaboral").change(function(){
             var tiporelacionlaboral_id = $(this).val();
             var caja_id = $(this).parent().parent().parent().attr('id');
             completarActividad(tiporelacionlaboral_id,caja_id);
        });

        $("#personaexpuesta").change(function(){
            var  personaexpuesta = $(this).val();
            if (personaexpuesta  == 2){
                $("#motivo").show();
            }
            if (personaexpuesta  == 1){
                $("#motivo").hide();
            }
        });

        $("#residenciaexterior").change(function(){
            var  residenciaexterior = $(this).val();
            if (residenciaexterior  == 2){
                $("#pais_residencia").show();
            }
            if (residenciaexterior  == 1){
                $("#pais_residencia").hide();
            }
        });

        $(function () { $('[data-toggle="tooltip"]').tooltip() })
        $(function () { $('[data-toggle="popover"]').popover({})})
    });

    function completarprovincias(direccion_pais_id){
        $.get('provinciasPais/'+direccion_pais_id, function(data){
            var prov = $.map(data, function(value, index){
                        return [value];
            });
            $("#provincia_id").empty();
            $.each(prov, function(index,value){
                $("#provincia_id").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
        });
    }

    function completarLocalidades(provincia_id){
        var loc_id;
        $.get('localidadesProvincia/'+provincia_id, function(data){
            var loc = $.map(data, function(value, index){
                return [value];
            });
            $("#localidad_id").empty();
            $.each(loc, function(index,value){
                $("#localidad_id").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
        });
        setTimeout(() => {
                var loc_id = $("#localidad_id").val();
                completarCP(loc_id)
        }, 3000);
    }

    function completarCP(localidad_id){
        $.get('localidadesCP/'+localidad_id, function(data){
            $("#cp").val(data);
        });
    }

    function completarActividad(relacionLaboral_id,caja_id){
        switch(relacionLaboral_id) {
            case "1":
                relacionLaboral_id = 5 ;
                $("#"+caja_id+" .actividad").empty();
                break;
            case "2":
                relacionLaboral_id = 6;
                $("#"+caja_id+" .actividad").empty();
                break;
            case "3":
                $.get('actividad', function(data){
                    var act = $.map(data, function(value, index){
                        return [value];
                    });
                    $("#"+caja_id+" .actividad").empty();
                    $.each(act, function(index,value){
                        $("#"+caja_id+" .actividad").append('<option selected value="'+value.id+'">'+value.name+'</option>');
                    });
                });
                return;
                break;
            case "4":
                relacionLaboral_id = 1;
                $("#"+caja_id+" .actividad").empty();
                break;
            case "5":
                relacionLaboral_id = 2;
                $("#"+caja_id+" .actividad").empty();
                break;
        }


       /* $.get('actividadId/'+relacionLaboral_id, function(data){
            var act = $.map(data, function(value, index){
                return [value];
            });
            $("#"+caja_id+" .actividad").empty();
            $.each(act, function(index,value){
                $("#"+caja_id+" .actividad").append('<option selected value="'+value.id+'">'+value.name+'</option>');
            });
            // ("#actividad_id").empty();
            // $.each(act, function(index,value){
            //     $("#actividad_id").append('<option selected value="'+value.id+'">'+value.name+'</option>');
            // });

        });*/
    }

    function completarRelacionLaboral(num){
        $.get('tipoRelacionLaboral', function(data){
            var tp = $.map(data, function(value, index){
                return [value];
            });
            $("#tiporelacionlaboral_"+num).empty();
            $.each(tp, function(index,value){
                $("#tiporelacionlaboral_"+num)
                    .append('<option value="'+value.id+'">'+value.name+'</option>');
            });
        });

    }

    function add_button(){

        var countCaja = $("#valueID").val();
        countCaja = parseInt(countCaja)+1;
        $(".inner").append("<div class='row mt-2' class='cRL' id='caja_"+countCaja+"'><div class='col-md-3'><div class='form-group'><label>Relación Laboral </label><select style='opacity:1 !important' name='tiporelacionlaboral' class='form-control form-control-select2 tiporelacionlaboral'  data-placeholder='Relación Laboral' data-fouc>@foreach ($tiporelacionlaborales as $item => $value)<option value='{{$item}}'>{{$value}}</option>@endforeach</select></div></div><div class='col-md-9'><div class='form-group'><label>Actividad o Profesión </label><input type='text' name='actividad' id='actividad' data-placeholder='Actividad' class='form-control actividad required'></div></div><div style='margin-top: -30px;margin-left: 100%;'><i class='fas fa-trash-alt borrarAdd'></i></div></div>");



        $(".tiporelacionlaboral").change(function(){
             var tiporelacionlaboral_id = $(this).val();
             var caja_id = $(this).parent().parent().parent().attr('id');
             completarActividad(tiporelacionlaboral_id,caja_id);
        });

        $('.borrarAdd').click(function(){
          $(this).parent().parent().remove();
        });

 //.remove();

        $("#valueID").val(countCaja);

    }

    function readURL(input,imagen) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+imagen).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


    function saveData() {

        a = []
        $(".tiporelacionlaboral").each(function(){
            a.push($(this).val());
        });

        b = []
        $(".actividad").each(function(){
            texto = $(this).val().replace(',', '@');
            b.push(texto);
        });

        $( "#aTipoL" ).val(a);
        $( "#aActividad" ).val(b);

        name=$("#name").val();
        email=$("#email").val();

        birthDay=$("#birthDay").val();
        birthMonth=$("#birthMonth").val();
        birthYear=$("#birthYear").val();
        fechanac = birthYear+"-"+birthMonth+"-"+birthDay;

        tipo_docuemnto_id=$("#tipo_docuemnto_id").val();
        nro=$("#nro").val();
        estado_civil_id=$("#estado_civil_id").val();
        genero_id=$("#genero_id").val();
        celular=$("#celular").val();
        pais_id=$("#pais_id").val();

        preCuit=$("#preCuit").val();
        cuit=$("#cuit").val();
        postCuit=$("#postCuit").val();
        cuit = preCuit+"-"+cuit+"-"+postCuit;

        direccion_pais_id=$("#direccion_pais_id").val();
        provincia_id=$("#provincia_id").val();
        localidad_id=$("#localidad_id").val();
        provinciaext=$("#provinciaext").val();
        localidadext=$("#localidadext").val();
        cp=$("#cp").val();
        calle=$("#calle").val();
        pisodto=$("#pisodto").val();
        personaexpuesta=$("#personaexpuesta").val();
        motivo=$("#motivo").val();
        sujetoobligado=$("#sujetoobligado").val();
        residenciaexterior=$("#residenciaexterior").val();
        pais_id_otra_residencia=$("#pais_id_otra_residencia").val();

        cod_area=$("#cod_area").val();
        calle_nro=$("#calle_nro").val();

        aTipoL =$("#aTipoL").val();
        aActividad =$("#aActividad").val();
        status=$("#status").val();

        $.ajax({
            url: "{{ url('saveData') }}",
            type:"POST",
            dataType:"html",
            data:{
                "_token": $("meta[name='csrf-token']").attr("content"),
                name:name,
                email:email,
                fechanac:fechanac,
                tipo_docuemnto_id:tipo_docuemnto_id,
                nro:nro,
                estado_civil_id:estado_civil_id,
                genero_id:genero_id,
                celular:celular,
                pais_id:pais_id,
                cuit:cuit,
                direccion_pais_id:direccion_pais_id,
                provincia_id:provincia_id,
                localidad_id:localidad_id,
                provinciaext:provinciaext,
                localidadext:localidadext,
                cp:cp,
                calle:calle,
                pisodto:pisodto,
                personaexpuesta:personaexpuesta,
                motivo:motivo,
                sujetoobligado:sujetoobligado,
                residenciaexterior:residenciaexterior,
                pais_id_otra_residencia:pais_id_otra_residencia,
                aTipoL:aTipoL,
                aActividad:aActividad,
                status:status,
                cod_area:cod_area,
                calle_nro:calle_nro,
                preCuit:preCuit,
                postCuit:postCuit
            },
            success:function(data){
                $("#status").val(data);

            }
        });

    }

   function mover(nro){

       // $("#form").submit();

        if (nro==5){
            if (!$("#tyc").is(":checked")) {
                alert("El campo terminos y condiciones es obligatorio");
            }else{

                b = []
                $(".image-view img").each(function(){
                    b.push($(this).attr('src'));
                });

                if (b[0]!=""){
                   // $("#foto_drop1").val(b[0]);
                    $('#archivo_1_file').val(b[0]);
                }

                if (b[1]!=""){
                   // $("#foto_drop2").val(b[1]);
                    $('#archivo_2_file').val(b[1]);
                }

                if (b[2]!=""){
                    $('#archivo_3_file').val(b[2]);
                }

                $("#form").submit();
            }

        }

        if (nro==4){
            $(".step1").hide();
            $(".step2").hide();
            $(".step3").hide();
            $(".step4").show();

            $("#paso3_nro").css("color", "#00bcd4");
            $("#paso3_texto").css("color", "#00bcd4");
            $('#paso3_nro').css('border', 'solid 1px #00bcd4');

            $("#paso4_nro").css("color", "black");
            $("#paso4_texto").css("color", "black");
            $('#paso4_nro').css('border', 'solid 1px #eee');
        }


        if (nro==1){
            $(".step2").hide();
            $(".step1").show();
            $(".step3").hide();
            $(".step4").hide();

            $("#paso1_nro").css("color", "black");
            $("#paso1_texto").css("color", "black");
            $('#paso1_nro').css('border', 'solid 1px #eee');
        }

        if (nro==3){
            if ( $("#dni_frente_file").val() == "" ){
                $("#dni_frente_file").css("border-color", "red");
                $("#dni_frente_file").focus();
            }else if ( $("#dni_dorso_file").val() == "" ){
                $("#dni_dorso_file").css("border-color", "red");
                $("#dni_dorso_file").focus();
            } else if ( $("#selfi_file").val() == "" ){
                $("#selfi_file").css("border-color", "red");
                $("#selfi_file").focus();
            } else{
                $(".step2").hide();
                $(".step3").show();

                $("#paso2_nro").css("color", "#00bcd4");
                $("#paso2_texto").css("color", "#00bcd4");
                $('#paso2_nro').css('border', 'solid 1px #00bcd4');
            }

            $(".step2").hide();
            $(".step1").hide();
            $(".step3").show();
            $(".step4").hide();

            $("#paso3_nro").css("color", "black");
            $("#paso3_texto").css("color", "black");
            $('#paso3_nro').css('border', 'solid 1px #eee');

        }

        if (nro==2){
            if ( $("#name").val() == "" ){
                $("#name").css("border-color", "red");
                $("#name").focus();
            }else if ( $("#email").val() == "" ){
                $("#email").css("border-color", "red");
                $("#email").focus();
            }else if ( $("#birthDay").val() == "" ){
                $("#birthDay").css("border-color", "red");
                $("#birthDay").focus();
            }else if ( $("#birthMonth").val() == "" ){
                $("#birthMonth").css("border-color", "red");
                $("#birthMonth").focus();
            }else if ( $("#birthYear").val() == "" ){
                $("#birthYear").css("border-color", "red");
                $("#birthYear").focus();
            }else if ( $("#tipo_docuemnto_id").val() == "" ){
                $("#tipo_docuemnto_id").css("border-color", "red");
                $("#tipo_docuemnto_id").focus();
            }else if ( $("#nro").val() == "" ){
                $("#nro").css("border-color", "red");
                $("#nro").focus();
            }else if ( $("#estado_civil_id").val() == "" ){
                $("#estado_civil_id").css("border-color", "red");
                $("#estado_civil_id").focus();
            }else if ( $("#genero_id").val() == "" ){
                $("#genero_id").css("border-color", "red");
                $("#genero_id").focus();
            }else if ( $("#celular").val() == "" ){
                $("#celular").css("border-color", "red");
                $("#celular").focus();
            }else if ( $("#pais_id").val() == "" ){
                $("#pais_id").css("border-color", "red");
                $("#pais_id").focus();
            }else if ( $("#preCuit").val() == "" ){
                $("#preCuit").css("border-color", "red");
                $("#preCuit").focus();
            }else if ( $("#cuit").val() == "" ){
                $("#cuit").css("border-color", "red");
                $("#cuit").focus();
            }else if ( $("#postCuit").val() == "" ){
                $("#postCuit").css("border-color", "red");
                $("#postCuit").focus();
            }else if ( $("#direccion_pais_id").val() == "" ){
                $("#direccion_pais_id").css("border-color", "red");
                $("#direccion_pais_id").focus();
            }else if ( $("#provincia_id").val() == "" ){
                $("#provincia_id").css("border-color", "red");
                $("#provincia_id").focus();
            }else if ( $("#localidad_id").val() == "" ){
                $("#localidad_id").css("border-color", "red");
                $("#localidad_id").focus();
            }else if ( $("#cp").val() == "" ){
                $("#cp").css("border-color", "red");
                $("#cp").focus();
            }else if ( $("#calle").val() == "" ){
                $("#calle").css("border-color", "red");
                $("#calle").focus();
            }else if ( $("#pisodto").val() == "" ){
                $("#pisodto").css("border-color", "red");
                $("#pisodto").focus();
            }else if ( $("#cod_area").val() == "" ){
                $("#cod_area").css("border-color", "red");
                $("#cod_area").focus();
            }else if ( $("#calle_nro").val() == "" ){
                $("#calle_nro").css("border-color", "red");
                $("#calle_nro").focus();
            }else{
                saveData();
                $(".step1").hide();
                $(".step3").hide();
                $(".step4").hide();

                $(".step2").show();

                $("#paso1_nro").css("color", "#00bcd4");
                $("#paso1_texto").css("color", "#00bcd4");
                $('#paso1_nro').css('border', 'solid 1px #00bcd4');

                $("#paso2_nro").css("color", "black");
            $("#paso2_texto").css("color", "black");
            $('#paso2_nro').css('border', 'solid 1px #eee');



            }
        }

    }




var // where files are dropped + file selector is opened
    dropRegion = document.getElementById("drop-region"),
    // where images are previewed
    imagePreviewRegion = document.getElementById("image-preview");


// open file selector when clicked on the drop region
var fakeInput = document.createElement("input");
fakeInput.type = "file";
fakeInput.accept = "image/*";
fakeInput.multiple = true;
dropRegion.addEventListener('click', function() {
    fakeInput.click();
});

fakeInput.addEventListener("change", function() {
    var files = fakeInput.files;
    handleFiles(files);
});


function preventDefault(e) {
    e.preventDefault();
    e.stopPropagation();
}

dropRegion.addEventListener('dragenter', preventDefault, false)
dropRegion.addEventListener('dragleave', preventDefault, false)
dropRegion.addEventListener('dragover', preventDefault, false)
dropRegion.addEventListener('drop', preventDefault, false)


function handleDrop(e) {
    var dt = e.dataTransfer,
        files = dt.files;

    if (files.length) {

        handleFiles(files);

    } else {

        // check for img
        var html = dt.getData('text/html'),
            match = html && /\bsrc="?([^"\s]+)"?\s*/.exec(html),
            url = match && match[1];



        if (url) {
            uploadImageFromURL(url);
            return;
        }

    }


    function uploadImageFromURL(url) {
        var img = new Image;
        var c = document.createElement("canvas");
        var ctx = c.getContext("2d");

        img.onload = function() {
            c.width = this.naturalWidth;     // update canvas size to match image
            c.height = this.naturalHeight;
            ctx.drawImage(this, 0, 0);       // draw in image
            c.toBlob(function(blob) {        // get content as PNG blob

                // call our main function
                handleFiles( [blob] );

            }, "image/png");
        };
        img.onerror = function() {
            alert("Error in uploading");
        }
        img.crossOrigin = "";              // if from different origin
        img.src = url;
    }

}

dropRegion.addEventListener('drop', handleDrop, false);



function handleFiles(files) {
    for (var i = 0, len = files.length; i < len; i++) {
        if (validateImage(files[i]))
            previewAnduploadImage(files[i]);
    }
}

function validateImage(image) {
    // check the type
    var validTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (validTypes.indexOf( image.type ) === -1) {
        alert("Invalid File Type");
        return false;
    }

    // check the size
    var maxSizeInBytes = 10e6; // 10MB
    if (image.size > maxSizeInBytes) {
        alert("File too large");
        return false;
    }

    return true;

}

function previewAnduploadImage(image) {

    // container
    var imgView = document.createElement("div");
    imgView.className = "image-view";
    imagePreviewRegion.appendChild(imgView);

    // previewing image
    var img = document.createElement("img");
    imgView.appendChild(img);

    // progress overlay
    var overlay = document.createElement("div");
    overlay.className = "overlay";
    imgView.appendChild(overlay);


    // read the image...
    var reader = new FileReader();
    reader.onload = function(e) {
        img.src = e.target.result;
    }
    reader.readAsDataURL(image);

    // create FormData
    var formData = new FormData();
    formData.append('image', image);

    // upload the image
    var uploadLocation = 'https://api.imgbb.com/1/upload';
    formData.append('key', 'bb63bee9d9846c8d5b7947bcdb4b3573');

    var ajax = new XMLHttpRequest();
    ajax.open("POST", uploadLocation, true);

    ajax.onreadystatechange = function(e) {
        if (ajax.readyState === 4) {
            if (ajax.status === 200) {
                // done!
            } else {
                // error!
            }
        }
    }

    ajax.upload.onprogress = function(e) {

        // change progress
        // (reduce the width of overlay)

        var perc = (e.loaded / e.total * 100) || 100,
            width = 100 - perc;

        overlay.style.width = width;
    }

    ajax.send(formData);

}


</script>
@endpush


