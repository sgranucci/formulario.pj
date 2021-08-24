<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ ltrim(elixir('fonts/monserrat.css'), '/') }}" />
    </head>

    <style>
        /* @page { margin: 180px 50px; }
        #header { position: fixed; left: -50px; top: -180px; right: 0px; height: 100px } */
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            margin-top: 4cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 1cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        footer {
            position: fixed;
            bottom: 1cm;
            left: 0cm;
            right: 3cm;
            height: 1cm;

            /** Estilos extra personales **/
            /* background-color: #03a9f4; */
            color: #0363f4;
            text-align: right;
            line-height: 1.5cm;
            font-size: 12px;
        }


        .fuente_chica{
            font-family: 'Montserrat', sans-serif;
            font-size: 8px;
            }
        .fuente_mediana{
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
        }
        .fuente_grande{
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: #0b4479;
        }

        .fuente_test_inversor{
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            color: #0b4479;
            text-align: center;
        }
        .titulostexto{
            font-family: 'Montserrat', sans-serif;
            font-size: 14px;
            color: #0b4479;
        }

        .texto_parrafo{
            font-family: 'Montserrat', sans-serif;
            font-size:10 px;
            color: #030303;
            text-align:justify;
        }

        .texto_campo{
            font-family: 'Montserrat', sans-serif;
            font-size:10 px;
            color: #030303;
            background-color:  #AED1FF;
        }
        .celda{
            background-color:   #d7e3f1;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
        }
        .celda td {
            padding: 8px;
        }
        .enca{
            background-color: #b1e4e1;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            font-size: 14   px;
        }
        .enca_izq {
            background-color: #b1e4e1;
            text-align: left;
            font-family: 'Montserrat', sans-serif;
            font-size: 14   px;
            padding: 10px 10px;
        }

        .enca_der {
            background-color: #b1e4e1;
            text-align: right;
            font-family: 'Montserrat', sans-serif;
            font-size: 14   px;
            padding: 10px 10px;
        }

        .enca th{
            padding: 10px 10px;
        }

        .campo{
            background-color: #d7e3f1;
            text-align: left;
        }

        .corte{
                page-break-after: always;
                border: none;
                margin: 0;
                padding: 0;
        }


        hr{
            color: #AED1FF;
        }
    </style>
    <body>
        <header>
            <img src="images/PDF/header.jpg" width="100%" height="100px">
        </header>
        <footer>
            <div class='pie'>
                Sailing S.A., ALyC registrado bajo el N° 578 y ACyDI N° 54 de la CNV
            </div>
            <hr>
        </footer>
        <main>
            <section class="atc-mod2">
                <table style="margin-top: -40">
                    <tr>
                        <td width="80%"><img src="images/PDF/apertura_humana.JPG" style="size: 80%"></td>
                    </tr>
                </table>
                <table  width="100%"  cellspacing="3px" style="bordercolor: #ffffff ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                        <tr class="enca">
                            <th> DATOS PERSONALES</th>
                            <th> TITULAR 1</th>
                            <th> TITULAR 2</th>
                        </tr>
                        <tr class="celda">
                            <td class="campo">Nombre y Apellido</td>
                            <td>{{$registro[0]->name}} {{$registro[0]->surname}}</td>
                            @if(isset($autorizados->name))
                                <td>{{$autorizados->name}} {{$autorizados->surname}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Fecha de Nacimiento</td>
                            <td>{{\Carbon\Carbon::parse($registro[0]->fechanac)->format("d/m/Y")}}</td>
                            @if(isset($autorizados->fechanac))
                                <td>{{\Carbon\Carbon::parse($autorizados->fechanac)->format("d/m/Y")}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Nacionalidad</td>
                            <td>{{$registro[0]->nacionalidad}}</td>
                            @if(isset($autorizados->nacionalidad))
                                <td>{{$autorizados->nacionalidad}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Tipo de documento</td>
                            <td>{{$registro[0]->tipo_documento}}</td>
                            @if(isset($autorizados->tipo_documento))
                                <td>{{$autorizados->tipo_documento}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Número de documento</td>
                            <td>{{$registro[0]->nro}}</td>
                            @if(isset($autorizados->nro))
                                <td>{{$autorizados->nro}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Estado Civil</td>
                            <td>{{$registro[0]->estado_civil}}</td>
                            @if(isset($autorizados->estado_civil))
                                <td>{{$autorizados->estado_civil}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Género</td>
                            <td>{{$registro[0]->genero}}</td>
                            @if(isset($autorizados->genero))
                                <td>{{$autorizados->genero}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Teléfono</td>
                            <td>{{$registro[0]->cod_area}} - {{$registro[0]->celular}}</td>
                            @if(isset($autorizados->cod_area))
                                <td>{{$autorizados->cod_area}} - {{$autorizados->celular}} </td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Email</td>
                            <td>{{$registro[0]->email}}</td>
                            @if(isset($autorizados->email))
                                <td>{{$autorizados->email}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="enca">
                            <th >DOMICILIO REAL</th>
                            <th>TITULAR 1</th>
                            <th>TITULAR 2</th>
                        </tr>
                        <tr class="celda">
                            <td class="campo">Calle / Nro / Piso / Depto</td>
                            <td>{{$registro[0]->calle}} - {{$registro[0]->calle_nro}} - {{$registro[0]->pisodto}}</td>
                            @if(isset($autorizados->calle))
                                <td>{{$autorizados->calle}} - {{$autorizados->calle_nro}} - {{$autorizados->pisodto}} </td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">CP / Localidad</td>
                            <td>{{$registro[0]->cp}} - {{$registro[0]->localidad}}</td>
                            @if(isset($autorizados->cp))
                                <td>{{$autorizados->cp}} - {{$autorizados->localidad}} </td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Provincia</td>
                            <td>{{$registro[0]->provincia}}</td>
                            @if(isset($autorizados->provincia))
                                <td>{{$autorizados->provincia}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">País</td>
                            <td>{{$registro[0]->pais}}</td>
                            @if(isset($autorizados->pais))
                                <td>{{$autorizados->pais}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="enca">
                            <th >CONDICION FISCAL</th>
                            <th>TITULAR 1</th>
                            <th>TITULAR 2</th>
                        </tr>

                        <tr class="celda">
                            <td class="campo">CUIT / CUIL / CDI</td>
                            <td>{{$registro[0]->cuit}}</td>
                            @if(isset($autorizados->cuit))
                                <td>{{$autorizados->cuit}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="enca">
                            <th>DATOS LABORALES</th>
                            <th>TITULAR 1</th>
                            <th>TITULAR 2</th>
                        </tr>

                        @if(isset($declaracionJurada[0]) || isset($declaracionJuradaCo[0]))
                            <?php $max = max(count($declaracionJurada), count($declaracionJuradaCo)); ?>
                            //@foreach ($declaracionJurada as $key => $value)
                            @for($i=0; $i<$max; $i++)
                                <tr class="celda">
                                    <td class="campo">Relación laboral</td>
                                    @if(isset($declaracionJurada[$i]))
                                        <td>{{$declaracionJurada[$i]->relacion_laboral}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                    @if(isset($declaracionJuradaCo[$i]))
                                        <td>{{$declaracionJuradaCo[$i]->relacion_laboral}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                                <tr class="celda">
                                    <td class="campo">Actividad</td>
                                    @if(isset($declaracionJurada[$i]))
                                        <td>{{$declaracionJurada[$i]->actividad}}</td>
                                    @else
                                        <td></td>
                                    @endif                                    
                                    @if(isset($declaracionJuradaCo[$i]))
                                        <td>{{$declaracionJuradaCo[$i]->actividad}}</td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endfor
                            //@endforeach
                        @else
                            <tr class="celda">
                                <td class="campo">Actividad</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="celda">
                                <td class="campo">Relación laboral</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endif
                        <tr class="enca">
                            <th>DATOS CONYUGE</th>
                            <th>TITULAR 1</th>
                            <th>TITULAR 2</th>
                        </tr>
                        <tr class="celda">
                            <td class="campo">Nombre</td>
                            <td>{{$registro[0]->name_pareja}}</td>
                            @if(isset($autorizados->name_pareja))
                                <td>{{$autorizados->name_pareja}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Tipo de documento</td>
                            @if(isset($registro[0]->nro_dni_pareja))
                                <td>{{$registro[0]->tipo_documento_pareja}}</td>
                            @else
                                <td></td>
                            @endif

                            @if(isset($autorizados->tipo_documento_pareja))
                                @if(isset($autorizados->nro_dni_pareja))
                                    <td>{{$autorizados->tipo_documento_pareja}}</td>
                                @else
                                    <td></td>
                                @endif
                            @else
                                <td></td>
                            @endif
                        </tr>
                        <tr class="celda">
                            <td class="campo">Nro Documento</td>
                            <td>{{$registro[0]->nro_dni_pareja}}</td>
                            @if(isset($autorizados->nro_dni_pareja))
                                <td>{{$autorizados->nro_dni_pareja}}</td>
                            @else
                                <td></td>
                            @endif
                        </tr>
                </table>

                <div class="corte"></div>

                {{-- SECCCION 2 --}}
                <img src="images/PDF/ddjj.png" >

                <div class="titulostexto">1)DECLARACIÓN JURADA SOBRE LA CONDICIÓN DE PERSONA EXPUESTA POLÍTICAMENTE (”PEP”)</div>
                <div class="texto_parrafo">
                    @if ($registro[0]->genero_id==1)
                        La
                    @else
                        El
                    @endif
                    que suscribe <b class="texto_campo">{{" ". $registro[0]->name . " " }}  {{$registro[0]->surname}}</b> declara bajo juramento que los datos consignados en la presente son correctos,
                    completos y fiel expresión de la verdad y que
                    @if ($registro[0]->personaexpuesta==1)
                        <b class="texto_campo"> No </b>
                    @else
                        <b class="texto_campo"> Si </b>
                    @endif
                    se encuentra incluido/a y/o alcanzado/a dentro de la "Nómina de Personas Expuestas
                    Políticamente" aprobada por la Unidad de Información Financiera, que ha leído.
                    @if ($registro[0]->personaexpuesta==2)
                        <p>El motivo se datalla a continuación: <b class="texto_campo">{{$registro[0]->motivo }}</b></p>
                    @endif
                    <br>
                    Además, asume el compromiso de informar cualquier modificación que se produzca a este respecto, dentro de los treinta (30) días de ocurrida, mediante
                    la presentación de una nueva declaración jurada.<br>
                    <table width="100%"  style="bordercolor: #ffffff ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                        <tr>
                            <td>
                                Documento: Tipo {{$registro[0]->tipo_documento}}
                            </td>
                            <td>
                                Número: {{$registro[0]->nro}}
                            </td>
                            <td>
                                País y Autoridad de Emisión: {{$registro[0]->nacionalidad}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CUIT/CUIL/CDI: {{$registro[0]->cuit}}
                            </td>
                        </tr>
                    </table>
                    NOTA: Remitirse a la Cláusula 5 del ANEXO D: CONDICIONES GENERALES DE LA CUENTA COMITENTE para conocer la nómina de sujetos considerados PEP.
                </div>

                <hr>
                <div class="titulostexto">
                    2) DECLARACIÓN JURADA SOBRE LA CONDICIÓN DE INVERSOR CALIFICADO
                </div>

                <div class="texto_parrafo">
                    De conformidad con lo dispuesto en el artículo 13 de la Sección I del Capítulo VI del Título II de las NORMAS de la Comisión Nacional de Valores (“CNV”)
                    declara que:<br>
                    @if ($registro[0]->inversor_calificado==1)
                        <b class="texto_campo"> No soy Inversor Calificado </b>
                    @else
                        <b class="texto_campo"> Soy Inversor Calificado </b>
                    @endif
                    <!--(i)<b class="texto_campo">No</b> posee domicilio real en el extranjero;--> <br>

                    <!--
                    (ii) ha tomado conocimiento de los riesgos involucrados en la inversión de títulos valores y en cualquier otro instrumento de inversión, en particular
                    aquellos destinados a Inversores Calificados y;<br>
                    (iii) se compromete a actualizar esta declaración jurada con frecuencia mínima anual o en la primera oportunidad en que opere con posterioridad a dicho plazo.
                    -->
                </div>
                <hr>
                <div class="titulostexto">
                    3) DECLARACIÓN JURADA PARA EL INTERCAMBIO DE INFORMACIÓN TRIBUTARIA (OCDE - FATCA)
                </div>
                <div class="texto_parrafo">
                    ¿Tiene residencia fiscal en una jurisdicción que no sea Argentina?
                    @if ($registro[0]->residenciaexterior==1)
                        <b class="texto_campo"> No </b>
                        <br>
                    @else
                        <b class="texto_campo"> Si </b><br>
                        Número de identificación tributaria: {{$registro[0]->ide_tribu}}
                        <br>
                    @endif
                    ¿Es una persona estadounidense a los efectos de la Ley FATCA?
                    @if ($registro[0]->pais_id_otra_residencia==60)
                        <b class="texto_campo"> Si </b>
                        <br>
                    @else
                        <b class="texto_campo"> No </b>
                        <br>

                    @endif

                    Será considerada persona estadounidense a aquellas personas (i) nacidas en Estados Unidos; (ii) con nacionalidad estadounidense, incluyendo casos de doble
                    nacionalidad; (iii) con domicilio y/o P.O. Box en Estados Unidos; (iv) poseedoras de una tarjeta de residencia permanente en Estados Unidos; (v) con residencia
                    fiscal en Estados Unidos; (vi) que mantenga alguna oficina, sucursal, planta, establecimiento y/o alguna otra sede comercial dentro de los Estados Unidos; (vii) con
                    residencia o un domicilio legal o de inscripción dentro de Estados Unidos.<br>
                    De resultar afirmativa la respuesta, completar y presentar el Formulario W8 Anexo o disponible en https://www.irs.gov/pub/irs-pdf/fw8ben.pdf<br>
                    Complementariamente, a los efectos de dar acabado cumplimiento con la Ley FATCA (“Foreign Account Tax Compliance Act”, por sus siglas en inglés) de Estados
                    Unidos, acepta dispensar a Sailing S.A. de la obligación de mantener el secreto establecido en el artículo 53 de la Ley de Mercado de Capitales. En consecuencia,
                    presta expresa conformidad y autoriza Sailing S.A. a remitir al Internal Revenue Service (“IRS”) y/o a la autoridad que designen los organismos de contralor de la
                    República Argentina, la información del Cliente que fuera requerida a fin de cumplir con la normativa estadounidense referida.<br>
                </div>
                <hr>
                <div class="titulostexto">4) DECLARACIÓN JURADA DE SUJETO OBLIGADO CONFORME LEY 25.246 Y MODIFICATORIAS</div>
                <div class="texto_parrafo">
                    Por medio de la presente, y en cumplimiento de lo establecido por la Resolución de la Unidad de Información Financiera (“UIF”) en la materia, quien
                    suscribe declara bajo juramento que
                        @if ($registro[0]->sujetoobligado==1)
                        <b class="texto_campo"> NO </b>
                        @else
                        <b class="texto_campo"> SI </b>
                        @endif
                        se encuentra alcanzado/a como Sujeto Obligado.<br>
                    NOTA: Remitirse a la Cláusula 6. del ANEXO D. CONDICIONES GENERALES DE LA CUENTA COMITENTE para conocer la nómina de sujetos obligados ante la UIF.
                </div>
                <hr>
                <div class="titulostexto">5) DECLARACIÓN JURADA DE ORIGEN Y LICITUD DE LOS FONDOS</div>
                <div class="texto_parrafo">
                    Manifiesta, en carácter de declaración jurada que los valores aportados para operar a través de Sailing S.A. son lícitos en función de las leyes vigentes
                    de la República Argentina y las que se dicten en el futuro en materia de prevención de lavado de dinero y financiamiento del terrorismo.
                    Asimismo, manifiesta expresamente la adhesión a las políticas y procedimientos de prevención de lavado de activos y financiamiento del terrorismo
                    adoptadas por Sailing S.A. de acuerdo con los términos e instrucciones particulares emitidas por las leyes y reglamentaciones vigentes de la República
                    Argentina y las que se dicten en el futuro. La presente adhesión incluye asimismo autorización expresa para que Sailing S.A., en su carácter de Sujeto
                    Obligado en los términos de la Ley 25.246, pueda solicitar documentación e información que entienda pertinente a los efectos de realizar una debida
                    diligencia de clientes.<br>
                </div>
                <hr>
                <div class="titulostexto">6) Tiene Agente Asesor Global de Inversiones (”AAGI”)</div>
                <div class="texto_parrafo">
                    De conformidad con lo dispuesto en el Anexo I del Capítulo I de la RG 731/2018 de la CNV, modificatorias y
                    complementarias, declaro que
                    @if ($registro[0]->tieneagente==1 || $registro[0]->tieneagente=="")
                        <b class="texto_campo"> No </b>
                    @else
                        <b class="texto_campo"> Si </b>
                    @endif
                    poseo un convenio firmado con un Agente Asesor Global de Inversiones
                    (”AAGI”).
                    @if ($registro[0]->tieneagente==2)
                        De ser afirmativo, declaro que su denominación es: <b class="texto_campo">{{$registro[0]->agente}}</b>
                    @endif
                </div>
                <div class="texto_parrafo">
                    <table>
                        <tr>
                            <td align="justify" width="1000%">Manifiesta que los datos consignados son correctos, completos y fiel
                    expresión de la verdad y que cualquier modificación de estos serán
                    presentados a Sailing S.A. dentro de los cinco (5) días hábiles de producidos
                    los mismos.</td>
                        </tr>
                    </table>
                </div>
                @if(isset($autorizados->name))
                    <div class="corte"></div>
                    {{-- TITULAR 2 --}}
                    <img src="images/PDF/ddjj2.png" >

                    <div class="titulostexto">1)DECLARACIÓN JURADA SOBRE LA CONDICIÓN DE PERSONA EXPUESTA POLÍTICAMENTE (”PEP”)</div>
                    <div class="texto_parrafo">
                        @if ($autorizados->genero_id==1)
                            La
                        @else
                            El
                        @endif
                        que suscribe <b class="texto_campo">{{" ". $autorizados->name . " " }}  {{$autorizados->surname}}</b> declara bajo juramento que los datos consignados en la presente son correctos,
                        completos y fiel expresión de la verdad y que
                        @if ($autorizados->personaexpuesta==1)
                            <b class="texto_campo"> No </b>
                        @else
                            <b class="texto_campo"> Si </b>
                        @endif
                        se encuentra incluido/a y/o alcanzado/a dentro de la "Nómina de Personas Expuestas
                        Políticamente" aprobada por la Unidad de Información Financiera, que ha leído.
                        @if ($autorizados->personaexpuesta==2)
                            <p>El motivo se datalla a continuación: <b class="texto_campo">{{$autorizados->motivo}}</b></p>
                        @endif
                        <br>
                        Además, asume el compromiso de informar cualquier modificación que se produzca a este respecto, dentro de los treinta (30) días de ocurrida, mediante
                        la presentación de una nueva declaración jurada.<br>
                        <table width="100%"  style="bordercolor: #ffffff ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                            <tr>
                                <td>
                                    Documento: Tipo {{$autorizados->tipo_documento}}
                                </td>
                                <td>
                                    Número: {{$autorizados->nro}}
                                </td>
                                <td>
                                    País y Autoridad de Emisión: {{$autorizados->nacionalidad}}
                                </td>
                            </tr>
                                <td>
                                    CUIT/CUIL/CDI: {{$autorizados->cuit}}
                                </td>
                            </table>
                        NOTA: Remitirse a la Cláusula 5 del ANEXO D: CONDICIONES GENERALES DE LA CUENTA COMITENTE para conocer la nómina de sujetos considerados PEP.
                    </div>
                    <hr>
                    <div class="titulostexto">
                        2) DECLARACIÓN JURADA SOBRE LA CONDICIÓN DE INVERSOR CALIFICADO
                    </div>
                    <div class="texto_parrafo">
                        De conformidad con lo dispuesto en el artículo 13 de la Sección I del Capítulo VI del Título II de las NORMAS de la Comisión Nacional de Valores (“CNV”) declara que:<br>
                        @if ($autorizados->inversor_calificado==1)
                            <b class="texto_campo"> No soy Inversor Calificado </b>
                        @else
                            <b class="texto_campo"> Soy Inversor Calificado </b>
                        @endif
                    </div>
                    <hr>
                    <div class="titulostexto">
                        3) DECLARACIÓN JURADA PARA EL INTERCAMBIO DE INFORMACIÓN TRIBUTARIA (OCDE - FATCA)
                    </div>
                    <div class="texto_parrafo">
                        ¿Tiene residencia fiscal en una jurisdicción que no sea Argentina?
                        @if ($autorizados->residenciaexterior==1)
                            <b class="texto_campo"> No </b>
                            <br>
                        @else
                            <b class="texto_campo"> Si </b><br>
                            Número de identificación tributaria: {{$autorizados->ide_tribu}}
                            <br>
                        @endif
                        ¿Es una persona estadounidense a los efectos de la Ley FATCA?
                        @if ($autorizados->pais_id_otra_residencia==60)
                            <b class="texto_campo"> Si </b>
                            <br>
                        @else
                            <b class="texto_campo"> No </b>
                            <br>

                        @endif

                        Será considerada persona estadounidense a aquellas personas (i) nacidas en Estados Unidos; (ii) con nacionalidad estadounidense, incluyendo casos de doble
                        nacionalidad; (iii) con domicilio y/o P.O. Box en Estados Unidos; (iv) poseedoras de una tarjeta de residencia permanente en Estados Unidos; (v) con residencia
                        fiscal en Estados Unidos; (vi) que mantenga alguna oficina, sucursal, planta, establecimiento y/o alguna otra sede comercial dentro de los Estados Unidos; (vii) con
                        residencia o un domicilio legal o de inscripción dentro de Estados Unidos.<br>
                        De resultar afirmativa la respuesta, completar y presentar el Formulario W8 Anexo o disponible en https://www.irs.gov/pub/irs-pdf/fw8ben.pdf<br>
                        Complementariamente, a los efectos de dar acabado cumplimiento con la Ley FATCA (“Foreign Account Tax Compliance Act”, por sus siglas en inglés) de Estados
                        Unidos, acepta dispensar a Sailing S.A. de la obligación de mantener el secreto establecido en el artículo 53 de la Ley de Mercado de Capitales. En consecuencia,
                        presta expresa conformidad y autoriza Sailing S.A. a remitir al Internal Revenue Service (“IRS”) y/o a la autoridad que designen los organismos de contralor de la
                        República Argentina, la información del Cliente que fuera requerida a fin de cumplir con la normativa estadounidense referida.<br>
                    </div>
                    <hr>
                    <div class="titulostexto">4) DECLARACIÓN JURADA DE SUJETO OBLIGADO CONFORME LEY 25.246 Y MODIFICATORIAS</div>
                    <div class="texto_parrafo">
                    Por medio de la presente, y en cumplimiento de lo establecido por la Resolución de la Unidad de Información Financiera (“UIF”) en la materia, quien
                    suscribe declara bajo juramento que
                        @if ($autorizados->sujetoobligado==1)
                        <b class="texto_campo"> NO </b>
                        @else
                        <b class="texto_campo"> SI </b>
                        @endif
                        se encuentra alcanzado/a como Sujeto Obligado.<br>
                    NOTA: Remitirse a la Cláusula 6. del ANEXO D. CONDICIONES GENERALES DE LA CUENTA COMITENTE para conocer la nómina de sujetos obligados ante la UIF.
                    </div>
                    <hr>
                    <div class="titulostexto">5) DECLARACIÓN JURADA DE ORIGEN Y LICITUD DE LOS FONDOS</div>
                    <div class="texto_parrafo">
                    Manifiesta, en carácter de declaración jurada que los valores aportados para operar a través de Sailing S.A. son lícitos en función de las leyes vigentes
                    de la República Argentina y las que se dicten en el futuro en materia de prevención de lavado de dinero y financiamiento del terrorismo.
                    Asimismo, manifiesta expresamente la adhesión a las políticas y procedimientos de prevención de lavado de activos y financiamiento del terrorismo
                    adoptadas por Sailing S.A. de acuerdo con los términos e instrucciones particulares emitidas por las leyes y reglamentaciones vigentes de la República
                    Argentina y las que se dicten en el futuro. La presente adhesión incluye asimismo autorización expresa para que Sailing S.A., en su carácter de Sujeto
                    Obligado en los términos de la Ley 25.246, pueda solicitar documentación e información que entienda pertinente a los efectos de realizar una debida
                    diligencia de clientes.<br>
                    </div>
                    <div class="texto_parrafo">
                        <table>
                            <tr>
                                <td align="justify" width="100%">Manifiesta que los datos consignados son correctos, completos y fiel
                        expresión de la verdad y que cualquier modificación de estos serán
                        presentados a Sailing S.A. dentro de los cinco (5) días hábiles de producidos
                        los mismos.</td>
                            </tr>
                        </table>
                    </div>
                @endif

                <div class="corte"></div>
                <img src="images/PDF/anexo_a.png">


                <hr>
                <div class="titulostexto">A.1) INSTRUCCIONES PERMANENTES. ASOCIACIÓN DE CUENTAS BANCARIAS PARA LA OPERATORIA</div>
                <div class="texto_parrafo">Por medio de la presente se autoriza a Sailing S.A., hasta tanto reciba una instrucción en sentido contrario, a realizar transferencias
                receptoras o realizar transferencias emisoras de monedas, desde o hacia una de las cuentas bancarias, cuyos datos serán enviado por medio de mi correo electrónico declarado en este Convenio.</div>
                <!--<hr>
                <div class="titulostexto">A.2) DECLARACIÓN JURADA SOBRE RELACIÓN CON AGENTES ASESORES GLOBALES DE INVERSIÓN</div>
                <div class="texto_parrafo">
                    De conformidad con lo dispuesto en el Anexo I del Capítulo I de la RG 731/2018 de la CNV, modificatorias y
                    complementarias, declaro que
                    @if ($registro[0]->tieneagente==1)
                        <b class="texto_campo"> No </b>
                    @else
                        <b class="texto_campo"> Si </b>
                    @endif
                    poseo un convenio firmado con un Agente Asesor Global de Inversiones
                    (”AAGI”).
                    @if ($registro[0]->tieneagente==2)
                        De ser afirmativo, declaro que su denominación es: <b class="texto_campo">{{$registro[0]->agente}}</b>
                    @endif
                </div>-->

                <hr>
                <div class="corte"></div>
                <img src="images/PDF/anexo_b.png">
                <div class="titulostexto">
                    COMISIONES, ARANCELES Y GASTOS
                </div>
                <div class="texto_parrafo">
                    Por medio de la presente se presta conformidad a las comisiones, aranceles y gastos derivados de la apertura o mantenimiento de la cuenta comitente y demás
                    gastos aplicables de conformidad al presente contrato. El Cliente toma conocimiento que el tarifario se encuentra disponible y actualizado para su consulta en el
                    sitio www.sailinginversiones.com y, en forma expresa, incondicional e irrenunciable, presta conformidad con los cambios razonables que puedan sufrir en el
                    futuro.

                    <img src="images/PDF/operaciones.JPG"><br>
                    <img src="images/PDF/otros_conceptos.JPG"><br>
                    <img src="images/PDF/tarifas.png"><br>
                </div>

                <div class="corte"></div>
                <img src="images/PDF/anexo_c.png">
                <div class="titulostexto">
                    CONSTANCIA DE ENTREGA DE REGLAMENTO DE GESTIÓN DE FONDOS COMUNES DE INVERSIÓN</font></b><br>
                    AGENTE DE COLOCACIÓN Y DISTRIBUCIÓN DE FONDOS COMUNES DE INVERSIÓN
                </div>

                <div class="texto_parrafo">
                    Registrado bajo en Nro. 54 en la CNV<br>
                    Sailing S.A.<br>
                    Carlos Pellegrini 1163, piso 7, 1009, CABA, Argentina<br>
                    Inscripción en IGJ 30/12/2014 bajo Nro. 24.940 Libro 72 de SA<br>
                    CUIT 30-71472804-7<br>
                    Declaro conocer y aceptar el/los texto/s de/los reglamento/s de gestión (el “Reglamento/s”) del/los fondo/s común/es de inversión (el/los “Fondo/s”) que
                    se detalla/n a continuación, del/los cual/es recibo copia íntegra del texto vigente, obrando el presente como suficiente recibo.<br>
                    Tomo conocimiento que este/os reglamento/s puede/n ser modificado/s, previa autorización de la Comisión Nacional de Valores y publicidad
                    correspondiente, en cuyo caso la/s nueva/s versión/es regirá/n la operatoria de/los Fondo/s a partir de su entrada en vigencia.<br>
                    El/Los texto/s vigente/s de/los reglamento/s, así como la información adicional sobre el/los Fondo/s, el Administrador y Custodio, podrán ser consultados
                    de forma gratuita en todo momento en www.cnv.gov.ar y/o www.fondosargentina.org.ar.<br>

                    <img src="images/PDF/fondosconcruz.png" width='100%'><br>

                </div>


                <div class="corte"></div>
                <img src="images/PDF/anexo_d.png">
                <div class="titulostexto">
                    CONDICIONES GENERALES DE LA CUENTA COMITENTE
                </div>

                <div class="texto_parrafo">
                    <b>1. APERTURA DE CUENTA COMITENTE.</b> El Cliente solicita a Sailing S.A. (la “Sociedad” o “Sailing”) la apertura de una Cuenta Comitente (la “Cuenta”), que
                    se regirá por las presentes condiciones generales (el “Convenio”) de conformidad con los términos y condiciones de la normativa aplicable según leyes
                    20.643, 25.246, 26.831 y 27.440, sus decretos reglamentarios, las normas de la Comisión Nacional de Valores (“CNV”), las resoluciones de la Unidad de
                    Información Financiera (“UIF”) y las disposiciones reglamentarias de los mercados habilitados por la CNV de los que la Sociedad sea miembro (las
                    “Normas Aplicables”). Por este acto, el Cliente encomienda voluntariamente, y la Sociedad se obliga a proveer sus servicios en calidad de agente de
                    liquidación y compensación (“ALyC”) y agente de negociación propio (“AN-P”) y/o agente de colocación y distribución integral de fondos comunes de
                    inversión (“ACyDI”). La Sociedad ajustará su accionar de acuerdo con las facultades, obligaciones, limitaciones, estipulaciones, términos y condiciones que
                    se establecen en el presente, de conformidad con las Normas Aplicables.<br>
                    <b>2. LEGAJO DEL CLIENTE.</b> Sailing deberá llevar un legajo por Cliente, según los requerimientos regulatorios de la materia. El Cliente toma conocimiento
                    que deberá entregar la documentación solicitada para la identificación de las personas y verificación de los datos ingresados en la Solicitud de Apertura
                    de Cuenta Comitente y que el legajo resultante quedará a disposición de los reguladores o autoridades competentes en caso de ser solicitado.<br>
                    <b>3. ACTIVIDADES PERMITIDAS.</b> En el marco de sus funciones, la Sociedad podrá realizar las siguientes actividades: (i) brindar asesoramiento respecto de
                    inversiones en el mercado de capitales a través de personas idóneas en los términos del artículo 2º, Capítulo VII del Título VII de las normas de la CNV; (ii)
                    actuar en la colocación primaria ingresando ofertas y en la negociación secundaria registrando operaciones a través de los Sistemas Informáticos de
                    Negociación de los Mercados autorizados por la CNV; (iii) intervenir en la liquidación y compensación de las operaciones concertadas; (iv) cursar órdenes,
                    conforme las pautas establecidas por el Cliente, para realizar operaciones de compra y/o venta en el exterior de instrumentos financieros que cuenten con
                    autorización por parte de Comisiones de Valores u otros organismos de control extranjeros, que correspondan a países incluidos en el listado previsto en
                    el inciso b) del artículo 2° del Decreto N° 589/2013 en materia de transparencia fiscal, y pertenezcan a jurisdicciones que no sean consideradas como no
                    cooperantes, ni de alto riesgo por el Grupo de Acción Financiera Internacional (“GAFI”), con las limitaciones establecidas en el artículo 3º, Capítulo II del
                    Título VII de la normas de la CNV.<br>
                    <b>4. ORIGEN Y LICITUD DE LOS ACTIVOS.</b> (i) El Cliente suministrará a la Sociedad toda la información y documentación que ésta razonablemente le
                    solicite en cumplimiento de las normas de prevención de lavado de dinero y financiamiento del terrorismo (“PLD y FT”), las normas de la CNV o cualquier
                    otra Norma Aplicable. Dado el caso, la Sociedad podrá entregar dicha información y/o documentación a los entes de contralor u otros organismos
                    requirentes locales o extranjeros; (ii) la Sociedad se reserva el derecho de aceptar a su solo criterio la recepción y custodia de activos que considere
                    pudieran provenir de fuentes ilícitas; (iii) el Cliente comprende que Sailing S.A. es un Sujeto Obligado ante la UIF y como tal debe cumplir con las
                    obligaciones y regulaciones que le corresponden. Por tal motivo, el presente Convenio cuenta con una Declaración Jurada de Origen y Licitud de Fondos
                    que el Cliente debe completar y firmar en el formulario de apertura de cuenta, corroborando la exactitud y veracidad de los datos e información volcados
                    en la misma. Recibido el presente formulario de apertura de cuenta junto con la documentación correspondiente, el mismo estará sujeto a la revisión por
                    parte de Sailing, quien se reserva el derecho de proceder o no a la apertura de la cuenta comitente. Adicionalmente, Sailing podrá solicitar, en caso de
                    considerarlo, la actualización de la documentación presentada como así también solicitar documentación complementaria, con el objetivo de cumplir con
                    la normativa vigente en materia de PLD y FT.<br>
                    <b>5. PERSONAS EXPUESTAS POLÍTICAMENTE (PEP).</b> Serán consideradas Personas Expuestas Políticamente las detalladas en el Texto Ordenado de la
                    Resolución 134/18 de la UIF y las que la modifiquen y complementen a futuro. (i) PEP EXTRANJERAS. Son consideradas PEP Extranjeras, los funcionarios
                    públicos pertenecientes a países extranjeros, que se desempeñen o se hayan desempeñado, en alguno de los cargos que se detallan a continuación: a) Jefe de
                    Estado, Jefe de Gobierno, Gobernador, Intendente, Ministro, Secretario, Subsecretario de Estado u otro cargo gubernamental equivalente. b) Miembro del
                    Parlamento, Poder Legislativo, o de otro órgano de naturaleza equivalente. c) Juez, Magistrado de Tribunales Superiores u otra alta instancia judicial, o
                    administrativa, en el ámbito del Poder Judicial. d) Embajador o Cónsul, de un país u organismo internacional. e) Autoridad, apoderado, integrantes del órgano de
                    administración o control y miembros relevantes de partidos políticos extranjeros. f) Oficial de alto rango de las Fuerzas Armadas (a partir de Coronel o grado
                    equivalente en la fuerza y/o país de que se trate) o de las fuerzas de seguridad pública (a partir de Comisario o rango equivalente según la fuerza y/o país de que
                    se trate). g) Miembro de los órganos de dirección y control de empresas de propiedad estatal. h) Miembro de los órganos de dirección o control de empresas de
                    propiedad privada o mixta; cuando el Estado posea una participación igual o superior al VEINTE POR CIENTO (20%) del capital o del derecho a voto, o ejerza de
                    forma directa o indirecta el control de la compañía. i) Director, gobernador, consejero, síndico o autoridad equivalente de bancos centrales y otros organismos
                    de regulación y/o supervisión. j) Director, subdirector; miembro de la junta, directorio, alta gerencia, o cargos equivalentes, apoderados, representantes legales
                    o autorizados, de una organización internacional, con facultades de decisión, administración o disposición. (ii) PEP NACIONALES. Son consideradas Personas
                    Expuestas Políticamente Nacionales, los funcionarios públicos del país que se desempeñen o se hayan desempeñado en alguno de los siguientes cargos: a)
                    Presidente o Vicepresidente de la Nación. b) Senador o Diputado de la Nación. c) Magistrado del Poder Judicial de la Nación. d) Magistrado del Ministerio
                    Público de la Nación. e) Defensor del Pueblo de la Nación o Defensor del Pueblo Adjunto. f) Jefe de Gabinete de Ministros, Ministro, Secretario o Subsecretario
                    del Poder Ejecutivo Nacional. g) Interventor federal, o colaboradores del interventor federal con categoría no inferior a Director o su equivalente. h) Síndico
                    General de la Nación o Síndico General Adjunto de la Sindicatura General de la Nación; Presidente o Auditor General de la Auditoría General de la Nación;
                    autoridad superior de un ente regulador o de los demás órganos que integran los sistemas de control del sector público nacional; miembros de organismos
                    jurisdiccionales administrativos, o personal de dicho organismo, con categoría no inferior a la de director o su equivalente. i) Miembro del Consejo de la
                    Magistratura de la Nación o del Jurado de Enjuiciamiento. j) Embajador o Cónsul. k) Personal de las Fuerzas Armadas, de la Policía Federal Argentina, de
                    Gendarmería Nacional, de la Prefectura Naval Argentina, del Servicio Penitenciario Federal o de la Policía de Seguridad Aeroportuaria con jerarquía no menor
                    de Coronel o grado equivalente según la fuerza. l) Rector, Decano o Secretario de las Universidades Nacionales. m) Funcionario o empleado con categoría o
                    función no inferior a la de Director General o Nacional, de la Administración Pública Nacional, centralizada o descentralizada, de entidades autárquicas, bancos
                    y entidades financieras del sistema oficial, de las obras sociales administradas por el Estado, de empresas del Estado, las sociedades del Estado y el personal con
                    similar categoría o función, designado a propuesta del Estado en sociedades de economía mixta, sociedades anónimas con participación estatal o en otros entes
                    del sector público. n) Funcionario o empleado público nacional encargado de otorgar habilitaciones administrativas, permisos o concesiones, para el ejercicio de
                    cualquier actividad; como así también todo funcionario o empleado público encargado de controlar el funcionamiento de dichas actividades o de ejercer
                    cualquier otro control en virtud de un poder de policía. o) Funcionario público de algún organismo de control de servicios públicos, con categoría no inferior a la
                    de Director General o Nacional. p) Personal del Poder Legislativo de la Nación, con categoría no inferior a la de Director. q) Personal del Poder Judicial de la
                    Nación o del Ministerio Público de la Nación, con categoría no inferior a Secretario. r) Funcionario o empleado público que integre comisiones de adjudicación
                    de licitaciones, de compra o de recepción de bienes, o participe en la toma de decisiones de licitaciones o compras. s) Funcionario público responsable de
                    administrar un patrimonio público o privado, o controlar o fiscalizar los ingresos públicos cualquiera fuera su naturaleza. t) Director o Administrador de alguna entidad sometida al control externo del Honorable Congreso de la Nación, de conformidad con lo dispuesto en el artículo 120 de la Ley Nº 24.156. (iii) PEP
                    PROVINCIALES, MUNICIPALES Y DE LA CIUDAD AUTONOMA DE BUENOS AIRES. Son consideradas PEP, los funcionarios públicos que se desempeñen o se
                    hayan desempeñado en alguno de los siguientes cargos, a nivel Provincial, Municipal o de la Ciudad Autónoma de Buenos Aires: a) Gobernador o
                    Vicegobernador, Intendente o Vice-intendente, Jefe de Gobierno o Vicejefe de Gobierno. b) Ministro de Gobierno, Secretario, Subsecretario, Ministro de los
                    Tribunales Superiores de Justicia de las provincias o de la Ciudad Autónoma de Buenos Aires. c) Juez o Secretario de los Poderes Judiciales Provinciales o de la
                    Ciudad Autónoma de Buenos Aires. d) Magistrado perteneciente al Ministerio Público, o su equivalente, en las provincias o en la Ciudad Autónoma de Buenos
                    Aires. e) Miembro del Consejo de la Magistratura o del Jurado de Enjuiciamiento, o su equivalente, de las Provincias o de la Ciudad Autónoma de Buenos Aires.
                    f) Defensor del Pueblo o Defensor del Pueblo Adjunto, en las Provincias o en la Ciudad Autónoma de Buenos Aires. g) Jefe de Gabinete de Ministros, Ministro,
                    Secretario o Subsecretario del Poder Ejecutivo de las Provincias o de la Ciudad Autónoma de Buenos Aires. h) Legislador provincial, municipal o de la Ciudad
                    Autónoma de Buenos Aires. i) Máxima autoridad de los organismos de control o de los entes autárquicos provinciales, municipales o de la Ciudad Autónoma de
                    Buenos Aires. j) Máxima autoridad de las sociedades de propiedad de los estados provinciales, municipales o de la Ciudad Autónoma de Buenos Aires. k) Rector,
                    Decano o Secretario de universidades provinciales. l) Funcionario o empleado público encargado de otorgar habilitaciones administrativas, permisos o
                    concesiones, para el ejercicio de cualquier actividad; como así también todo funcionario o empleado público encargado de controlar el funcionamiento de dichas
                    actividades o de ejercer cualquier otro control en virtud de un poder de policía. m) Funcionario de organismos de control de los servicios públicos provinciales o
                    de la Ciudad de Buenos Aires, con categoría no inferior a la de Director General o Provincial. n) Funcionario o empleado público que integre comisiones de
                    adjudicación de licitaciones, de compra o de recepción de bienes, o participe en la toma de decisiones de licitaciones o compras. o) Funcionario público que tenga
                    por función administrar un patrimonio público o privado, o controlar o fiscalizar los ingresos públicos cualquiera fuera su naturaleza. (iv) OTRAS PEP. Sin
                    perjuicio de lo expuesto en los artículos precedentes, son consideradas Personas Expuestas Políticamente aquellas personas que se desempeñen o se hayan
                    desempeñado en alguno de los siguientes cargos: a) Autoridad, apoderado, candidato o miembro relevante de partidos políticos o alianzas electorales, ya sea a
                    nivel nacional o distrital, de conformidad con lo establecido en las Leyes N° 23.298 y N° 26.215. b) Autoridad de los órganos de dirección y administración de
                    organizaciones sindicales (personas humanas con capacidad de decisión, administración, control o disposición del patrimonio de la organización sindical) y de
                    organizaciones empresariales (cámaras, asociaciones y otras formas de agrupación corporativa: personas humanas con capacidad de decisión, administración,
                    control o disposición del patrimonio de la organización sindical que, en función de su cargo tengan capacidad de decisión, administración, control o disposición
                    sobre fondos provenientes del sector público nacional, provincial, municipal o de la Ciudad Autónoma de Buenos Aires, y/o realicen actividades con fines de
                    lucro, para la organización o sus representados, que involucren la gestión, intermediación o contratación habitual con el Estado nacional, provincial, municipal o
                    de la Ciudad Autónoma de Buenos Aires). c) Autoridad, representante legal o integrante de la Comisión Directiva de las obras sociales contempladas en la Ley
                    Nº 23.660. El alcance comprende a las personas humanas de las mencionadas organizaciones con capacidad de decisión, administración, control o disposición
                    del patrimonio de las obras sociales. d) Las personas humanas con capacidad de decisión, administración, control o disposición del patrimonio de personas
                    jurídicas privadas en los términos del 148 del Código Civil y Comercial de la Nación, que reciban fondos públicos destinados a terceros y cuenten con poder de
                    control y disposición respecto del destino de dichos fondos. (v) PEP POR CERCANÍA O AFINIDAD. Son consideradas PEP por cercanía o afinidad, todos aquellos
                    sujetos que posean vínculos personales o jurídicos con quienes cumplan, o hayan cumplido, las funciones establecidas en los incisos (i) a (iv) de la presente. A los
                    fines indicados se consideran los siguientes vínculos: a) Cónyuge o conviviente reconocido legalmente. b) Familiares en línea ascendente, descendente, y
                    colateral hasta el segundo grado de consanguinidad o afinidad. c) Personas allegadas o cercanas: debe entenderse como tales a aquellas personas públicas y
                    comúnmente conocidas por su íntima asociación a la persona definida como Persona Expuesta Políticamente. d) Personas con las cuales se hayan establecido
                    relaciones jurídicas de negocios del tipo asociativa, aún de carácter informal, cualquiera fuese su naturaleza. e) Toda otra relación o vínculo que por sus
                    características y en función de un análisis basado en riesgo, a criterio del sujeto obligado, pueda resultar relevante.<br>
                    <b>6. SUJETOS OBLIGADOS.</b> Serán consideradas Sujetos Obligados los enumeradas en el artículo 20º de la Ley 25.246, modificatorias y complementarias. Ellos
                    son: (i) Las entidades financieras sujetas al régimen de la Ley 21.526 y modificatorias; (ii) las entidades sujetas al régimen de la Ley 18.924 y modificatorias y las
                    personas humanas o jurídicas autorizadas por el Banco Central de la República Argentina para operar en la compraventa de divisas bajo forma de dinero o de
                    cheques extendidos en divisas o mediante el uso de tarjetas de crédito o pago, o en la transmisión de fondos dentro y fuera del territorio nacional; (iii) las
                    personas humanas o jurídicas que como actividad habitual exploten juegos de azar; (iv) las personas humanas y/o jurídicas registradas ante la Comisión Nacional
                    de Valores para actuar como intermediarios en mercados autorizados por la citada comisión y aquellos que actúen en la colocación de Fondos Comunes de
                    Inversión o de otros productos de inversión colectiva autorizados por dicho organismo; (v) las personas jurídicas autorizadas por la Comisión Nacional de
                    Valores para actuar en el marco de sistemas de financiamiento colectivo a través del uso de portales web u otros medios análogos y demás personas jurídicas
                    registradas en el citado organismo a cargo de la apertura del legajo e identificación del perfil del cliente para invertir en el ámbito del mercado de capitales; (vi)
                    los registros públicos de comercio, los organismos representativos de fiscalización y control de personas jurídicas, los registros de la propiedad inmueble, los
                    registros de la propiedad automotor, los registros prendarios, los registros de embarcaciones de todo tipo y los registros de aeronaves; (vii) las personas
                    humanas o jurídicas dedicadas a la compraventa de obras de arte, antigüedades u otros bienes suntuarios, inversión filatélica o numismática, o a la exportación,
                    importación, elaboración o industrialización de joyas o bienes con metales o piedras preciosas; (viii) las empresas aseguradoras; (ix) las empresas emisoras de
                    cheques de viajero u operadoras de tarjetas de crédito o de compra; (x) las empresas dedicadas al transporte de caudales; (xi) las empresas prestatarias o
                    concesionarias de servicios postales que realicen operaciones de giros de divisas o de traslado de distintos tipos de moneda o billete; (xii) los escribanos públicos;
                    (xiii) las entidades comprendidas en el Artículo 9º de la Ley 22315; (xiv) los despachantes de aduana definidos en el artículo 36 y concordantes del Código
                    Aduanero; (xv) los organismos de la Administración Pública y entidades descentralizadas y/o autárquicas que ejercen funciones regulatorias, de control,
                    supervisión y/o superintendencia sobre actividades económicas y/o negocios jurídicos y/o sobre sujetos de derecho, individuales o colectivos: el Banco Central
                    de la República Argentina, la Administración Federal de Ingresos Públicos, la Superintendencia de Seguros de la Nación, la Comisión Nacional de Valores, la
                    Inspección General de Justicia, el Instituto Nacional de Asociativismo y Economía Social y el Tribunal Nacional de Defensa de la Competencia; (xvi) los
                    productores, asesores de seguros, agentes, intermediarios, peritos y liquidadores de seguros cuyas actividades estén regidas por las leyes 20.091 y 22.400, sus
                    modificatorias, concordantes y complementarias; (xvii) los profesionales matriculados cuyas actividades estén reguladas por los consejos profesionales de
                    ciencias económicas; (xviii) igualmente están obligados al deber de informar todas las personas jurídicas que reciben donaciones o aportes de terceros; (xix) los
                    agentes o corredores inmobiliarios matriculados y las sociedades de cualquier tipo que tengan por objeto el corretaje inmobiliario, integradas y/o administradas
                    exclusivamente por agentes o corredores inmobiliarios matriculados; (xx) las asociaciones mutuales y cooperativas reguladas por las leyes 20.321 y Ley 20.337
                    respectivamente; (xxi) las personas humanas o jurídicas cuya actividad habitual sea la compraventa de automóviles, camiones, motos, ómnibus y micrómnibus,
                    tractores, maquinaria agrícola y vial, naves, yates y similares, aeronaves y aerodinos; (xxii) las personas humanas o jurídicas que actúen como fiduciarios, en
                    cualquier tipo de fideicomiso y las personas humanas o jurídicas titulares de o vinculadas, directa o indirectamente, con cuentas de fideicomisos, fiduciantes y
                    fiduciarios en virtud de contratos de fideicomiso; y (xxiii) las personas jurídicas que cumplen funciones de organización y regulación de los deportes
                    profesionales.<br>
                    <b>7. NORMAS APLICABLES A LA RELACIÓN ENTRE PARTES. BREVE DESCRIPCIÓN DE LA NORMATIVA Y PROCEDIMIENTOS APLICABLES ANTE
                    EVENTUALES RECLAMOS POR EL CLIENTE.</b> (i) El Cliente se encuentra facultado a operar con cualquier intermediario inscripto en los registros de la
                    CNV, cuyo listado se encuentra a disposición en la página www.cnv.gob.ar; (ii) la Sociedad previo a la apertura de la Cuenta exigirá al Cliente o a aquella
                    persona humana que actúe en su representación, original y copia del Documento Nacional de Identidad y/o Pasaporte en caso de extranjeros, a los fines
                    de la debida identificación y la guarda de la copia en el legajo correspondiente, además del cumplimiento de las normas de apertura de Cuenta según lo
                    establecido en la normativa vigente; (iii) la apertura de una Cuenta autoriza a la Sociedad a operar por cuenta y orden de su/s Titular/es (Cliente/s). En
                    este caso, el Cliente acepta que las órdenes podrán ser en forma personal o a través de los diferentes medios de comunicación autorizados por la
                    normativa vigente, dejando constancia de tal decisión. La manera y metodología en que se registren las órdenes recibidas será determinada por la
                    Sociedad, teniendo en consideración que debe cumplimentar los requerimientos que la regulación aplicable al respecto le establezca para cada mercado
                    de negociación; (iv) la Sociedad deberá tener a la vista del público y publicada en sus sitio de Internet la tabla de aranceles, derechos de mercado y demás
                    gastos que demanden la apertura de Cuentas, depósitos de valores negociables en Agentes de Custodia y Registro y operaciones realizadas, o en su caso
                    una nota que contenga dicha información. En este último caso se deberá dejar constancia de su recepción; (v) al suscribirse la documentación
                    correspondiente a la apertura de la Cuenta, la Sociedad deberá hacer entrega al Cliente, bajo constancia documentada en el mismo legajo, o bajo
                    cualquier otra modalidad que permita acreditar su toma de conocimiento, de un ejemplar de la presente; (vi) en el acto de apertura de Cuenta o en la
                    primera oportunidad que un Cliente quiera operar, la Sociedad deberá, sin perjuicio de suscribir el presente Convenio y demás formularios, arbitrar los
                    medios para conocer adecuadamente a sus Clientes, a los fines de proporcionar los servicios que correspondan; (vii) cumplidos los recaudos establecidos
                    precedentemente, será de exclusiva responsabilidad y decisión del Cliente realizar o no las inversiones; (viii) por cada una de las operaciones realizadas,
                    la Sociedad deberá entregar al Cliente un boleto que cumpla con las exigencias de la reglamentación vigente y que refleje fielmente ante el Cliente la
                    naturaleza del contrato celebrado; (ix) por cada uno de los ingresos y egresos de dinero y/o valores negociables efectuados, la Sociedad deberá extender
                    los comprobantes de respaldo correspondientes; (x) la Sociedad tiene el derecho a exigir al Cliente el depósito previo, total o parcial, o bloqueo total o
                    parcial de saldos disponibles en la Cuenta del Cliente, como condición para la realización de cualquier operación; (xi) el Cliente tiene derecho a retirar
                    los saldos a su favor en cualquier momento, como así también a solicitar el cierre de la Cuenta, tal como se explica en el punto 23 del presente; (xii) el
                    Cliente se obliga al cumplimiento en términos de las coberturas de fondos y/o valores negociables a fin de atender los débitos por liquidaciones que
                    extienda la Sociedad, reservándose ésta el derecho a solicitar el previo depósito antes de ejecutar las operaciones encomendadas; (xiii) La
                    documentación entregada por la Sociedad al Cliente deberá contar con toda la información y elementos requeridos para dar cumplimiento con las
                    normas de aplicación de la CNV; (xiv) es derecho de la Sociedad la realización de cualquier saldo a favor del Cliente, tanto monetario como en especie,
                    para cubrir operaciones concertadas y no cumplidas a su vencimiento por el Cliente y para cubrir cualquier gasto o comisión que surja de la operación;
                    (xv) la Sociedad cuenta con personal incluido en el Registro de Idóneos en el mercado de capitales, para que desarrollen la actividad de venta, promoción
                    o prestación de cualquier tipo de asesoramiento o actividad que implique el contacto con el público inversor y el Cliente. El Registro de Idóneos es
                    público, pudiendo el Cliente consultarlo a través de la página de internet de la CNV o en las oficinas de la Sociedad.<br>
                    <b>8. FACULTADES DE SAILING.</b> (i) Conforme a las instrucciones que imparta el Cliente a los efectos de la ejecución del presente mandato el Cliente otorga
                    amplias facultades a la Sociedad para que ésta, actuando en forma directa o a través de terceros, pueda realizar con los valores, otros activos y fondos
                    que integran la cartera del Cliente todo tipo de operaciones por cuenta y orden del Cliente, en moneda argentina o extranjera, quedando expresamente
                    autorizado para firmar en nombre del Cliente la documentación pertinente, y realizar asimismo todos los demás actos que la Sociedad considere
                    convenientes para la preservación de los intereses del Cliente, siempre conforme a la Normativa Aplicable; (ii) asimismo, el Cliente expresamente
                    autoriza a la Sociedad para cobrar y percibir cualquier valor o suma de dinero proveniente del cobro de dividendos, servicios de renta o amortización,
                    rescates, reintegro de capital, o cualquier otro concepto, otorgando a nombre del Cliente los recibos correspondientes. Sin perjuicio de ello, la Sociedad
                    podrá solicitar al Cliente que éste le extienda recibos, confirmaciones y demás documentación que la Sociedad le solicite con relación a las operaciones
                    realizadas; (iii) la Sociedad le podrá solicitar al Cliente que éste otorgue autorizaciones, permisos y poderes que pueden ser necesarios para representar
                    adecuadamente al Cliente en la realización de cualquier acto bajo el presente mandato.<br>
                    <b>9. OBLIGACIONES DE SAILING.</b> La Sociedad, sus directores, administradores, gerentes, síndicos, accionistas controlantes, profesionales intervinientes,
                    empleados y todas aquellas personas relacionadas temporaria o accidentalmente con Sailing en el cumplimiento de sus funciones de ALyC, AN-P y
                    ACyDI, tienen como obligación: (i) observar la conducta y decoro que se consideran propios de un buen hombre de negocios para con las autoridades y
                    funcionarios de la CNV y de los Mercados en los que actúen, atendiendo las pautas específicas establecidas en las leyes y regulaciones aplicables a la
                    actividad de la Sociedad; (ii) actuar con honestidad, imparcialidad, profesionalidad, diligencia y lealtad en el mejor interés del Cliente; (iii) actuar para con
                    el Cliente de manera leal y transparente, en todo lo referente a las diferentes operaciones ofrecidas, de acuerdo con las disposiciones legales y
                    reglamentarias vigentes; (iv) informar al Cliente de manera clara y precisa acerca de aquellas operaciones que la Sociedad pueda concertar, suministrando
                    los conocimientos necesarios al momento de la toma de decisión; (v) tener un conocimiento fehaciente del Cliente y conocer su perfil de riesgo como
                    inversor, según los requisitos regulatorios que le permita adecuar sus servicios a tales fines; (vi) otorgar al Cliente información relacionada con las
                    operaciones que se concertarán por cuenta y orden del mismo; (vii) guardar reserva y confidencialidad de toda información relativa a cada uno de los
                    Clientes, en los términos del artículo 53º de la Ley 26.831. Quedarán relevados de esta obligación por decisión judicial dictada en cuestiones de familia
                    y en procesos criminales vinculados a esas operaciones o a terceros relacionados con ellas, así como también cuando les sean requeridas por la CNV, la
                    UIF y demás autoridades competentes en el marco de investigaciones propias de sus funciones, y de conformidad con las normas que rigen su eventual
                    divulgación; (viii) ejecutar con celeridad las órdenes recibidas del Cliente. En tal sentido, la Sociedad registrará toda orden que se le encomiende, de
                    modo tal que surja en forma adecuada la oportunidad, cantidad, calidad, precio y toda otra circunstancia relacionada con la operación que resulte
                    necesaria para evitar confusión en las negociaciones; (ix) no anteponer operaciones para cartera propia cuando tengan pendiente de concertación
                    órdenes de clientes de la misma naturaleza, tipo, condiciones y especies; (x) otorgar absoluta prioridad al interés de los clientes en la compra y venta de
                    valores negociables y abstenerse de actuar en caso de advertir conflicto de intereses; (xi) abstenerse de multiplicar transacciones en forma innecesaria
                    y sin beneficio a los Clientes; (xii) en caso de conflicto de intereses entre Clientes, la Sociedad deberá evitar privilegiar a cualquiera de ellos; (xiii) guardar
                    confidencialidad y poner en práctica medidas que permitan un adecuado control del acceso a la información privilegiada o reservada, como así también
                    a la documentación u otros soportes en que la misma esté contenida. Esta obligación deberá seguir vigente aún después de que las personas obligadas
                    cesen en su vinculación con la Sociedad; (xiv) abstenerse de realizar prácticas que falseen la libre formación de precios o provoquen una evolución
                    artificial de las cotizaciones; (xv) distinguir claramente cuando operan para su cartera propia o por cuenta y orden de terceros; (xvi) tener a disposición
                    del Cliente toda información que, siendo de su conocimiento y no encontrándose amparada por el deber de reserva, pudiera tener influencia directa y
                    objetiva en la toma de decisiones; (xvii) la Sociedad no podrá conceder financiamiento ni otorgar préstamos a sus Clientes, no quedando comprendidos
                    en tal prohibición los contratos de Underwriting celebrados en el marco de colocaciones primarias bajo el régimen de la oferta pública, los adelantos transitorios excepcionales con fondos propios de la Sociedad a los fines de cubrir eventos de descalce en las liquidaciones de operaciones y demoras en
                    la transferencia de fondos, y/o anticipo de operaciones ya concertadas pero no liquidadas, en la medida que se trate de operaciones realizadas en
                    segmentos garantizados, previo acuerdo con el Cliente y por plazos acotados sin que el saldo deudor se extienda por más de cinco (5) días hábiles.<br>
                    <b>10. DERECHOS DEL CLIENTE.</b> (i) La Sociedad ha designado una persona Responsable de Relaciones con el Público, cuya función será atender todas las
                    sugerencias, quejas, reclamos y/o denuncias de los clientes e informarlo inmediatamente al órgano de administración y al órgano de fiscalización. (ii) Sin
                    perjuicio del punto anterior, y en caso de que el Cliente advirtiera un incumplimiento por parte de la Sociedad respecto a las órdenes que haya impartido
                    para la ejecución de operaciones, podrá presentar una denuncia ante la CNV, sita en la calle 25 de Mayo 175, Ciudad Autónoma de Buenos Aires.<br>
                    <b>11. DECLARACIONES Y OBLIGACIONES DEL CLIENTE.</b>
                    11.1. El Cliente manifiesta que: (i) acepta los riesgos que implican los objetivos operativos planteados, tales como riesgo de liquidez, riesgo cambiario,
                    riesgo de volatilidad, riesgo de precio, riesgo de tasa de interés y riesgo de crédito, asumiendo las posibles pérdidas que su elección pueda generar; (ii)
                    acepta que Sailing puede notificarle que una inversión solicitada pueda resultar imprudente o inadecuada según la información brindada, y en caso de
                    producir demoras operativas no serán imputables a Sailing; (iii) conoce las características del Mercado de Capitales y sus variaciones permanentes de
                    precios y volúmenes, por lo que constituye de por sí un mercado de riesgo respecto de otras posibilidades de inversión de sus ahorros, no obstante lo
                    cual asume los riesgos patrimoniales que sus objetivos de inversión implican; (iv) acepta que la actuación de Sailing para la concertación y/o liquidación
                    de las Operaciones son por su cuenta y orden y que Sailing no asegura rendimientos de ningún tipo ni cuantía y que las inversiones del Cliente están
                    sujetas a las fluctuaciones de precios del mercado; (v) conoce y acepta que Sailing puede remitir información a la UIF y demás entidades públicas y/o
                    judiciales, en caso que resulte exigido por la legislación aplicable; (vi) acepta y ha analizado las restantes obligaciones y derechos pactados en el presente
                    Convenio y las Normas Aplicables; (vii) el domicilio especial constituido, correo electrónico y teléfono celular declarados es por donde serán válidas
                    todas las notificaciones que se le cursen en cualquiera de ellos, y se mantendrán vigentes hasta tanto comunique el cambio de los mismos.
                    11.2. Sin perjuicio de las demás obligaciones establecidas en el presente y las normas que rigen las Operaciones, el Cliente se obliga a: (i) actualizar la
                    firma registrada a requerimiento de Sailing; (ii) notificar cualquier cambio de los datos declarados en el presente; (iii) entregar a Sailing las sumas
                    necesarias para el pago de los impuestos, gastos y comisiones que graven las Operaciones, de corresponder; (iv) abstenerse de proponer, entablar o
                    consentir operaciones que constituyan bajo cualquier forma la concesión de financiamiento, préstamos o adelantos por parte de Sailing, incluso
                    mediante la cesión de derechos; (v) salvaguardar sus claves, códigos de identificación y demás mecanismos de seguridad entregados por Sailing; (vi)
                    asumir toda responsabilidad por las instrucciones y órdenes confeccionadas en debida forma, pero conteniendo datos erróneos, incompletos y/o
                    inexactos, por cuanto debe garantizar la autenticidad, veracidad, legitimidad y precisión de los mismos. Sin perjuicio de ello, Sailing realizará los mejores
                    esfuerzos para subsanar los inconvenientes.<br>
                    <b>12. MODALIDAD OPERATIVA ELEGIDA POR EL CLIENTE.</b> El cliente conoce que puede operar con Sailing mediante: (i) instrucciones específicas para
                    cada operación según disposiciones del apartado 13; (ii) en los términos del artículo 2º del Capítulo II del Título VII y artículo 19º del Capítulo VIII del
                    Título VII de las Normas de la CNV, el Cliente podrá optar por extenderle a la Sociedad una autorización de carácter general para que ésta actúe en su
                    nombre, administrando los saldos y/o tenencias disponibles en la Cuenta, que podrá revocar o limitar en cualquier momento. A los fines del
                    cumplimiento de sus obligaciones y sin perjuicio de aquellas operaciones que requieran autorización previa y expresa del Cliente, la Sociedad se
                    encontrará expresamente autorizada para ejercer todas las acciones que a su leal saber y entender, actuando con normal diligencia, considere necesarias
                    o convenientes para su mejor desempeño en cumplimiento de las funciones que se les asignan por el presente. A los fines de otorgar esta autorización,
                    el Cliente deberá suscribir y presentar a la Sociedad el formulario MANDATO DEL COMITENTE AL AGENTE DE LIQUIDACIÓN Y COMPENSACIÓN Y
                    AGENTE DE NEGOCIACIÓN PROPIO PARA LA ADMINISTRACIÓN DISCRECIONAL DE CARTERA.<br>
                    <b>13. EJECUCIÓN DE OPERACIONES. INSTRUCCIONES ESPECÍFICAS.</b> (i) La Sociedad ejecutará las órdenes que reciba del Cliente durante los días
                    hábiles, dentro de los horarios habilitados para el funcionamiento de los mercados locales y del exterior, y las ejecutará en los términos indicados por el
                    Cliente, o en su defecto, dentro de las condiciones de plaza al momento de la efectiva ejecución. El Cliente declara y acepta que cuando no indique
                    expresamente en qué condiciones desea que se realice la operación, la misma se realizará de acuerdo con las condiciones de plaza al momento de la
                    efectiva ejecución. Si la Sociedad no pudiese cumplir con tales instrucciones en el día requerido, la misma será ejecutada el día hábil siguiente; (ii) LA
                    RECEPCIÓN Y EJECUCIÓN DE UNA ORDEN POR LA SOCIEDAD NO IMPLICARÁ, EN NINGUNA CIRCUNSTANCIA, UNA PROMESA O SEGURIDAD
                    DE UN DETERMINADO RENDIMIENTO DE CUALQUIER CUANTÍA, ESTANDO TALES OPERACIONES SUJETAS A LAS FLUCTUACIONES DE LOS
                    PRECIOS DE MERCADO; (iii) el Cliente podrá cursar sus órdenes e instrucciones, a través del correo electrónico registrado en la presente o de manera
                    presencial. El Cliente reconoce y acepta expresamente los riesgos asociados con las comunicaciones electrónicas y que, a los fines de implementar
                    mayores medidas de seguridad en las comunicaciones electrónicas, la Sociedad se reserva el derecho de exigir en el futuro medidas de seguridad
                    complementarias; (iv) cuando el Cliente impartiera instrucciones a esta Sociedad para realizar operaciones que impliquen débitos de valores, deberá
                    mantener indefectiblemente en su Cuenta los fondos necesarios para abonarlas salvo expresa autorización de la Sociedad; (v) las operaciones que
                    impliquen créditos de valores serán ejecutadas por esta Sociedad siempre que a la fecha correspondiente los valores negociables se encuentren
                    depositados en el correspondiente Agente de Depósito Colectivo o Agente de Custodia, Registro y Pago, o en la depositaria de valores del exterior en su
                    caso; (vi) la recepción de fondos del Cliente podrán tomarse siempre y cuando provengan de transferencias bancarias en el país desde cuentas a la vista
                    de titularidad o cotitularidad del Cliente abiertas en entidades del país autorizadas por el Banco Central de la República Argentina (“BCRA”), cheques
                    librados contra cuentas corrientes abiertas en entidades financieras del país autorizadas por el BCRA de titularidad o cotitularidad del Cliente
                    o a favor de este con endoso completo; (vii) si el Cliente lo requiriese, la Sociedad depositará los fondos existentes en su Cuenta en las cuentas bancarias
                    a la vista de titularidad o cotitularidad del Cliente abiertas en entidades del país autorizadas por el BCRA, sirviendo la constancia de depósito o
                    transferencia de suficiente y eficaz recibo; (viii) el Cliente autoriza a la Sociedad a que retire por su cuenta y orden todos los fondos necesarios de su
                    cuenta para cumplir con los pagos que las operaciones requiriesen y conforme a prácticas de mercado, la venta de valores negociables de su Cuenta, en
                    el caso de que ésta arrojase saldos deudores exigibles por cualquier concepto o circunstancia, hasta cubrir dichos saldos, sin la necesidad de previa
                    intimación. A su vez, autoriza a la Sociedad a compensar los saldos deudores con los saldos acreedores que existiesen en otras cuentas de su titularidad
                    en esta Sociedad; (ix) la Sociedad se encuentra autorizada para depositar los valores negociables en un Agente de Depósito Colectivo habilitado (tal
                    como Caja de Valores S.A.) bajo el sistema de depósito colectivo y/o en la cuenta que corresponda en la depositaria de valores del exterior; (x) en el caso
                    que la Cuenta se encuentre abierta a la orden indistinta de una o más personas o, en su defecto el Cliente no haya expresado tácitamente la
                    administración de la Cuenta de manera conjunta, los fondos o valores negociables que se depositen o adquieran a través de la Cuenta podrán ser
                    retirados indistintamente por cualquiera de ellos. El Cliente libera a la Sociedad de toda responsabilidad relacionada por esta autorización.<br>
                    <b>14. TRATAMIENTO DE LOS SALDOS LÍQUIDOS AL FINAL DEL DÍA.</b> El cliente conoce que el tratamiento de los saldos líquidos al final del día deberá
                    ser acordado expresamente con Sailing, formalizando su decisión mediante la instrucción correspondiente. A estos efectos se define como Saldos Líquidos las acreencias, incluyendo pero no limitándose a rentas, amortizaciones o dividendos, derivadas de los valores negociables que sean iguales o
                    superiores a $ 10.000.- (Pesos argentinos diez mil). De no mediar instrucción específica por parte del Cliente los saldos se mantendrán disponibles en
                    su cuenta comitente, hasta la recepción de una nueva instrucción.<br>
                    <b>15. FONDO DE GARANTÍA PARA RECLAMOS DE CLIENTES.</b> (i) De conformidad con lo establecido por el Capítulo III, Titulo VII de las Normas de la
                    CNV, todos los Agentes que registren operaciones, deberán aportar a un Fondo de Garantía para Reclamos de Clientes, que será administrado por
                    los Mercados de los que sean miembros. Estos aportes constituirán un requisito de actuación para estos Agentes; (ii) la CNV establecerá los supuestos
                    que serán atendidos con el Fondo de Garantía para Reclamos de Clientes.<br>
                    <b>16. RIESGOS.</b> (i) El Cliente manifiesta tener conocimiento de la naturaleza de las operaciones que la Sociedad realizará en base a lo aquí estipulado y
                    las instrucciones que el Cliente curse, y de los riesgos inherentes a cada una de esas operaciones. Asimismo, declara y asume que las inversiones a ser
                    realizadas son de carácter especulativo y sujetas a múltiples variaciones, incluyendo condiciones de mercado, riesgo económico-financiero de los
                    emisores de valores, etc. Consecuentemente el Cliente asume los riesgos originados en las inversiones que se realicen quedando expresamente
                    aclarado y convenido que la Sociedad no garantiza la solvencia ni el rendimiento de las inversiones, ni responde por la existencia, legitimada y/o
                    evicción debida por los enajenantes de tales inversiones. La Sociedad indicará si las operaciones cuentan o no con garantía del mercado de
                    concertación o de la cámara compensadora; (ii) el Cliente conoce que el incumplimiento de la Sociedad a sus obligaciones puede provocarle perjuicios,
                    y/o pérdidas patrimoniales parciales o totales por las que será responsable la Sociedad por su culpa o dolo así declarado por resolución firme de
                    tribunal competente. En tal caso el Cliente podrá reclamar el pago de la indemnización a que tuviera derecho con imputación al Fondo de Garantía
                    para Reclamos de Clientes; (iii) el Cliente está obligado, entiende y acepta que es el único responsable por el conocimiento de las condiciones de
                    emisión de los valores negociables respecto de los cuales efectúa instrucciones para operar y exime a la Sociedad de toda responsabilidad que pudiera
                    resultar por la adquisición, venta o mera titularidad de estos. En caso que el Cliente deseara obtener una copia del prospecto de los valores
                    negociables de que se trate deberá solicitarlo al emisor o a los colocadores autorizados del mismo; (iv) el Cliente manifiesta tener conocimiento y
                    acepta expresamente que otros Clientes le han otorgado u otorgarán mandato a la Sociedad en los mismos o similares términos y condiciones
                    expresados en la presente y acepta, con renuncia a reclamar la exclusividad por parte de la Sociedad, prioridad o preferencia frente a otros Clientes en
                    la ejecución de las operaciones; (v) el Cliente manifiesta tener conocimiento y acepta que la Sociedad, sus directores o empleados pueden estar
                    vinculados con bancos u otras entidades depositarias, emisoras, underwriters, compradoras, vendedoras y/o intermediarias de los valores negociables
                    que puedan integrar la cartera del Cliente; (vi) el Cliente manifiesta tener conocimiento y acepta que empresas vinculadas a la Sociedad, sus directores
                    o empleados, puedan actuar como comprador, vendedor, depositarios, agente o intermediario en operaciones relacionadas con la cartera del Cliente y
                    percibir remuneraciones por sus servicios; (vii) el Cliente renuncia expresamente a cualquier reclamo o acción fundada en un supuesto o potencial
                    conflicto de intereses de la naturaleza arriba descripta; (viii) el Cliente se compromete a mantener a la Sociedad indemne de todo daño y/o perjuicio
                    que pueda sufrir como consecuencia directa o indirecta del cumplimiento del presente y/o de las instrucciones del Cliente y/o de las transacciones
                    que celebre para su beneficio; (ix) el Cliente reconoce y acepta que el sitio de internet www.sailinginversiones.com propiedad de la Sociedad es un
                    sistema que depende en su funcionamiento de distintos recursos tecnológicos, y que el mismo puede sufrir caídas, cortes y/o interrupciones debido a
                    dificultades técnicas o por cualquier otra circunstancia ajena a su voluntad y que la respuesta del sistema puede variar debido a varios factores
                    incluyendo el rendimiento del sistema y contingencias que pueden acarrear la imposibilidad o demora en la utilización del sitio de internet; (x) el
                    Cliente se compromete a informar a esta Sociedad cualquier cambio que se produzca sobre la/s persona/s que consultan, operan o administran la
                    Cuenta, ya sea a través de poderes, autorizaciones, facultades estatutarias u otro mecanismo.</br>
                    <b>17. REGIMEN INFORMATIVO CON EL CLIENTE.</b> Luego de realizada cada operación se enviará un detalle a la dirección de correo electrónico
                    declarada por el Cliente en la apertura de Cuenta o a la que haya notificado posteriormente de manera fehaciente. Tal comunicación tendrá el valor de
                    rendición de cuentas. Pasados treinta (30) días de recibida la información sin que el Cliente la haya observado por escrito y en forma fundada, se
                    entenderá que ha prestado conformidad a la misma. También se comunicará: (a) diariamente, boletos de las operaciones concertadas si las hubiera,
                    quedando el original a disposición del Cliente; (b) semanalmente, posición valorizada de la Cuenta; (c) mensualmente, resumen de cuenta con los
                    movimientos mensuales realizados y la posición actualizada de las tenencias.<br>
                    <b>18. OPERACIONES A TRAVÉS DE MEDIOS ELECTRÓNICOS.</b> (i) El Cliente declara que la Sociedad no será responsable por el uso de los servicios
                    electrónicos de envío y ruteo de órdenes bursátiles que la Sociedad ponga o pusiere a su disposición, hacia el Mercado o Bolsa que corresponda y/o
                    Sailing. Consecuentemente, la Sociedad, no será responsable por las operatorias ni por los posibles inconvenientes que puedan generarse en el/los
                    sistema/s, ya sea por el/los sistema/s mismo/s o por el uso que haga de él/ellos el Cliente y/o por posibles desperfectos en el/los sistema/s, de
                    terceros proveedores del/los servicio/s correspondiente/s, aun cuando pudieren generarle daños, pérdidas o menor rentabilidad y/o beneficios al
                    Cliente; (ii) asimismo, el Cliente comprende y acepta que, si por cualquier causa vinculada a factores técnicos y/o humanos, tareas de reparación,
                    mantenimiento o en el evento de casos fortuitos y/o de fuerza mayor, el/los servicio/s deba/n ser interrumpido/s la Sociedad no será pasible de
                    ningún tipo de responsabilidad derivado de dicho/s supuesto/s; (iii) el Cliente declara conocer que el uso del/de los sistema/s respectivo/s constituye
                    una herramienta adicional y complementaria al servicio tradicional provisto por la Sociedad, cuya finalidad es otorgarle mayor comodidad para realizar
                    sus transacciones;
                    (iv) El Cliente libera a la Sociedad de responsabilidad por todo posible inconveniente derivado del uso de la clave personal; (v) el Cliente acepta que toda
                    conexión efectuada en la página del servicio electrónico proporcionado, utilizando el usuario y clave personal proporcionados por la Sociedad, se
                    entenderá realizada por él mismo, asumiendo así el Cliente toda responsabilidad por las operaciones ordenadas y, además, se presumirá, sin prueba en
                    contrario, que el Cliente ha aceptado la utilización del/de los servicio/s; (vi) el Cliente, al utilizar el/los sistema/s responderá por el buen uso de la
                    conexión, comprometiéndose expresamente a evitar cualquier tipo de acción que pueda dañar el sistema, incluyendo la congestión intencionada de
                    enlaces; (vii) el Cliente acepta que la asistencia técnica en cuanto al manejo del sistema, podrá estar a cargo de los terceros proveedores del servicio, la
                    cual será provista a través del medio que éste último considere más adecuado a las circunstancias del caso, no siendo la misma a cargo de la Sociedad
                    ni de responsabilidad de ésta ni tampoco las consecuencias de la falta o la defectuosa asistencia como tampoco la demora en su provisión; (viii) el Cliente
                    se compromete a no utilizar las facilidades del/los servicio/s para realizar o sugerir actividades prohibidas por la ley; (ix) el Cliente acepta que la Sociedad
                    podrá cobrar comisiones por el mantenimiento y/o uso del/de los servicio/s, entendiéndose facultado expresamente para efectuar los correspondientes
                    débitos en la/s Cuenta/s del Cliente; (x) el Cliente acepta que si por cualquier motivo la Sociedad debe responder ante terceros por el uso que de éstos
                    servicios hiciere el Cliente, la Sociedad se reserva el derecho de repetir cualquier suma de dinero por cualquier concepto que abonare y a reclamar los
                    daños y perjuicios sufridos, autorizando a la Sociedad a retener las sumas de dinero, títulos o demás documentos en poder de la Sociedad o depositados
                    en su Cuenta hasta tanto el Cliente no cancele las sumas oportunamente abonadas por la Sociedad con más los daños y perjuicios e intereses que
                    correspondiesen.<br>
                    <b>19. OTRAS DISPOSICIONES SOBRE EL FUNCIONAMIENTO DE LA CUENTA.</b> Los depósitos en custodia quedarán sujetos a la siguiente
                    reglamentación: (i) en el caso de Cuentas comitentes abiertas a nombre de dos o más personas titulares que actúen indistintamente, la Sociedad
                    entregará el depósito total o parcial a cualquiera de los titulares, aún en los casos de fallecimiento o incapacidad sobreviniente de los demás, siempre
                    que no medie orden judicial en contrario; (ii) en el caso de Cuentas abiertas a nombre de dos o más personas titulares que actúen conjuntamente, la
                    Sociedad entregará el depósito sólo mediante solicitud de todos los titulares y en caso de fallecimiento o incapacidad de alguno de ellos, se requerirá
                    orden judicial para disponer del depósito; (iii) los poderes y autorizaciones para la disposición de los valores negociables custodiados por la Sociedad
                    serán válidos hasta tanto no medie revocación escrita en tal sentido; (iv) las autorizaciones que los clientes otorguen a favor de terceros en las Cuentas
                    abiertas en la Sociedad deberán especificar clara y detalladamente el alcance de las facultades otorgadas al autorizado en los formularios de apertura de
                    Cuenta provisto; (v) la dirección de correo electrónico constituido para notificaciones sobre la cuenta y consignado en la solicitud subsistirá en tanto el
                    Cliente no le informe por escrito a la Sociedad una dirección distinta para su reemplazo; (vi) las personas designadas en representación del titular de la
                    Cuenta se habilitarán como tales luego de la integración de los respectivos elementos de identificación que al efecto la Sociedad solicite y que registren
                    sus firmas en presencia de un funcionario designado o en su defecto certificadas por banco o escribano y que de la evaluación de los elementos se
                    determinen claramente su validez, vigencia de mandatos y atribuciones asignadas a cada uno de ellos. La validez de la autorización otorgada de esta
                    manera por el Cliente se mantendrá hasta la fecha indicada en el respectivo elemento y en tanto no sea rectificado o modificado mediante nota escrita
                    y/o nueva escritura pública que el Cliente presente en la Sociedad en su reemplazo; (vii) los valores negociables depositados en custodia quedan
                    automáticamente afectados en garantía de cualquier deuda contraída por el Cliente ante la Sociedad, derivadas del presente.; (viii) Sailing podrá adoptar
                    decisiones que impliquen afectar el funcionamiento de la cuenta total o parcialmente y/o modificar el importe de las comisiones cuyos débitos hubieren
                    sido aceptados. En tal sentido, la Sociedad deberá informar al Cliente las modificaciones propuestas según lo dispuesto en el ANEXO B. COMISIONES,
                    ARANCELES Y GASTOS de estas cláusulas; (ix) cuando las órdenes de compra no se liquiden al contado, si el Cliente no abonase el importe
                    correspondiente en la fecha pactada, la Sociedad, a su sola opción, estará facultada para vender los valores negociables u otros depositados en custodia
                    a nombre del Cliente en cantidad suficiente para cancelar la obligación impaga.<br>
                    <b>20. CONDICIONES PARTICULARES APLICABLES A LAS OPERACIONES DE CONTRATOS DE FUTURO EN EL MERCADO A TÉRMINO DE ROSARIO
                    S.A. (“ROFEX”).</b> (i) El Cliente presta conformidad a la cesión y/o transmisión por parte de la Sociedad a ROFEX de la información de identificación e
                    individualización del Cliente que obra en su poder y que fuera suministrada por parte del Cliente a la Sociedad. Asimismo, el Cliente se compromete a
                    aportar la documentación adicional que ROFEX solicite para el cumplimiento de las disposiciones legales y regulatorias relativas a PLD y FT; (ii) el Cliente
                    otorga un mandato especial a favor de la Sociedad para que a través de las órdenes de compra o de venta de contratos de futuros, estos se ejecuten en
                    ROFEX bajo la modalidad “prioridad precio tiempo”, según las instrucciones que a tal efecto el Cliente determine en cada caso; (iii) las órdenes que se
                    impartan y se ingresen en ROFEX se regirán por las disposiciones de la presente, por los términos y condiciones de la solicitud de apertura de la Cuenta,
                    las emitidas por el Reglamento Interno de ROFEX, por las disposiciones legales vigentes, las normas de la CNV y comunicados de ROFEX y de Argentina
                    Clearing S.A. que resulten aplicables, las que el Cliente declara conocer y aceptar; (iv) se deja constancia que ROFEX podría, en aplicación de las citadas
                    normas, intentar alterar los derechos y/u obligaciones acordados bajo los contratos concertados en el ámbito de ROFEX, lo que podría dar lugar directa
                    o indirectamente a pérdidas para el Cliente. En consecuencia, el Cliente renuncia a realizar cualquier reclamo judicial, extrajudicial o administrativo a la
                    Sociedad, a las sociedades controlantes, vinculadas, directivos o empleados, por o en ocasión del ejercicio de la aplicación de tales normas por parte de
                    ROFEX; (v) las órdenes cursadas por el Cliente a la Sociedad que en cumplimiento de las mismas se ejecuten en ROFEX serán consideradas a todos los
                    efectos legales como realizadas por el Cliente y como tales, obligatorias y vinculantes para el mismo, conforme con los medios de captación de órdenes
                    habilitadas por la Sociedad y por la CNV; (vi) las operaciones de contratos de futuro de ROFEX establecen la condición de integración de márgenes de
                    garantía, conforme con las condiciones establecidas por ROFEX. La Sociedad podrá exigir al Cliente y recaudar márgenes de garantía superiores a las
                    que exige ROFEX. Asimismo, el Cliente autoriza a la Sociedad para que indique a ROFEX y/o a Argentina Clearing S.A. cómo deben realizarse las
                    inversiones de los aportes realizados a los fondos de garantía que excedan los márgenes de garantía requeridos, de acuerdo con la lista habilitada a estos
                    efectos confeccionada por ROFEX y/o Argentina Clearing S.A. y aprobada por la CNV. El Cliente tendrá el derecho de retirar los saldos excedentes de
                    garantías, previa solicitud cursada a la Sociedad; (vii) el Cliente tiene derecho a solicitar el traspaso de su posición abierta a otro Agente de ROFEX, previa
                    solicitud cursada a la Sociedad, para ejecutarla de acuerdo con las respectivas instrucciones establecidas por ROFEX; (viii) el Cliente acepta que la
                    participación en la negociación de contratos de futuros presenta riesgo de pérdida de la inversión y requiere el pago de derechos, cargos y tasas
                    establecidas por el mercado, las que serán abonadas por el Cliente a la Sociedad para el pago correspondiente en ROFEX; (ix) el Cliente conoce y acepta
                    el esquema de comisiones que la Sociedad percibe en su condición de Agente de Mercado para la concertación y la administración de contratos en
                    ROFEX, obligándose a su debido pago en la fecha exigida por la Sociedad; (x) el Cliente podrá revocar la presente y solicitar el cierre de la cuenta en
                    ROFEX en cualquier momento, notificando fehacientemente a la Sociedad con cinco (5) días hábiles de anticipación. La revocación del mandato será de
                    ningún efecto respecto de las Operaciones efectuadas o por los contratos abiertos que se hallen en curso de ejecución. Asimismo, la Sociedad podrá a
                    su exclusivo criterio, discontinuar con la cuenta del Cliente en ROFEX en forma temporaria o definitiva. En ambos supuestos, la Sociedad no asumirá
                    responsabilidad alguna; (xi) la Sociedad se reserva el derecho de no cumplir con las órdenes del Cliente si las garantías necesarias para concertar las
                    mismas no fueran integradas o entregadas por el Cliente en debido tiempo y forma o no se pagaren los resultados diarios de valuación, pudiendo la
                    Sociedad proceder con el cierre de la cuenta del comitente y liquidar las posiciones; (xii) el Cliente acepta y se compromete a cumplir todas las
                    obligaciones que en virtud de las normas y reglamentos de ROFEX y de Argentina Clearing S.A., las normas de la CNV y la Ley de Mercado de Capitales
                    le fueran aplicables.<br>
                    <b>21. CONFIDENCIALIDAD.</b> El Cliente y la Sociedad reconocen y acuerdan que en el transcurso de sus negociaciones han intercambiado e intercambiarán
                    información que no es de dominio público, la cual es confidencial y de propiedad exclusiva de la parte que la hubiera entregado y cuya divulgación podría
                    ser perjudicial para cualquiera o ambas partes. En virtud de lo antedicho, cada una de las partes se obliga a otorgar tratamiento confidencial a toda la
                    información suministrada por la otra parte y a impedir la divulgación de dicha información a otra persona, ya sea en forma total o parcial, sin el previo
                    consentimiento escrito de la otra parte. Las partes entienden que no se considerará que la información es confidencial o de propiedad exclusiva de una
                    de las partes cuando la información suministrada ya hubiera sido conocida por la parte que la recibe, cuando la información suministrada ya hubiera sido
                    de dominio público en el momento de ser divulgada por la parte que la divulgue, o que la parte que recibe la información la hubiese obtenido de terceros
                    que no se hallaban vinculados por obligaciones de confidencialidad en relación con tal información. Se establece, asimismo, que cualquiera de las partes
                    tendrá derecho a revelar la información confidencial cuando así sea requerido en virtud de orden judicial, por una autoridad competente, o cuando fuere
                    estrictamente necesario a fin de ejercer la defensa de sus derechos. La obligación de confidencialidad acordada se mantendrá vigente aún después de la
                    terminación del presente, cualquiera sea la causa de dicha terminación.<br>
                    <b>22. COMISIONES, GASTOS E IMPUESTOS.</b> (i) El Cliente abonará a Sailing los aranceles, comisiones, gastos e impuestos (incluyendo los aranceles de
                    Caja de Valores S.A., derechos de mercado y bolsa u otras entidades que prestan similares servicios), que se relacionen directa o indirectamente con el
                    presente Convenio así como con el mantenimiento, operatoria o cierre de la Cuenta, según el detalle de gastos y comisiones que se acompaña como
                    parte integrante del presente, aceptando el Cliente que dichos aranceles y comisiones pueden ser modificados en el futuro; (ii) las modificaciones que
                    se produzcan serán debidamente comunicadas a través de la página www.sailinginversiones.com y/o al correo electrónico registrado. El Cliente presta
                    conformidad para que Sailing debite los aranceles que correspondan de los fondos que posea en su Cuenta.<br>
                    <b>23. RESCISION / CIERRE DE CUENTA.</b> El convenio de apertura de cuenta que resulte de la aceptación de esta solicitud tendrá una duración indefinida.
                    El Cliente y/o la Sociedad podrán, cualquiera de ellos y en cualquier momento, dar por terminado unilateralmente este contrato mediante notificación
                    fehaciente a la otra parte a los domicilios consignados en el convenio de apertura de cuenta y/o los que estuvieran registrados como vigentes. El Cliente
                    y/o la Sociedad podrán dar por concluidas sus relaciones comerciales y proceder con el cierre de la cuenta del Cliente en la Sociedad en forma unilateral
                    mediante la notificación fehaciente con una antelación de tres (3) días hábiles bursátiles manifestando tal decisión. La Sociedad podrá dejar de cumplir
                    total o parcialmente una orden recibida ante la inexistencia de saldo en la cuenta o tenencia de los valores negociables por el Cliente. La Sociedad
                    además podrá, ante cualquier incumplimiento por parte del Cliente, disponer el cierre de la cuenta, debiendo liquidar las operaciones pendientes y poner
                    a disposición del Cliente el saldo, en caso de que lo hubiera. Por cualquier situación que origine el cierre de cuenta, la Sociedad percibirá el valor de las
                    comisiones, gastos y cargos efectivamente devengados hasta la fecha efectiva de cierre y mantendrá los saldos remanentes a disposición del Cliente no
                    haciéndose cargo de futuros servicios que los valores negociables devenguen. La Sociedad podrá supeditar la fecha de la efectiva disposición de los
                    saldos a favor del Cliente cuando tuviera operaciones pendientes de liquidar, aunque dicha fecha fuera posterior a la fecha para el efectivo cumplimiento
                    del cierre de la cuenta. Una vez dispuesto el cierre de la cuenta, el Cliente tiene derecho a retirar los saldos a su favor en cualquier momento. Asimismo,
                    la Sociedad podrá cerrar la cuenta del Cliente por causas legales o por disposición de autoridad competente en la materia. El cierre de la cuenta, que
                    implica liquidar las operaciones pendientes y entregar el saldo, en caso de que lo hubiera, al titular de la cuenta, se realizará salvo que medie decisión
                    judicial o de autoridad competente en contrario.<br>
                    <b>24. MODIFICACIONES.</b> La Sociedad, sin perjuicio de lo estipulado para la modificación o ampliaciones de las comisiones detalladas en el Anexo B, podrá
                    modificar los términos y condiciones establecidas en cualquiera de las cláusulas del presente, previo informe por escrito o cualquier otro medio
                    fehaciente, como por ejemplo al correo electrónico declarado por el Cliente en el convenio de apertura de cuenta, con una anticipación no menor a diez
                    (10) días hábiles anteriores a la fecha de su entrada en vigencia. Si dentro de dicho plazo el Cliente no observa por escrito las modificaciones, éstas se
                    considerarán aceptadas por el Cliente.<br>
                    <b>25. DIVISIBILIDAD.</b> La invalidez, ilegalidad o nulidad, total o parcial, de cualquier cláusula del presente mandato no afectará la validez, legalidad o
                    vigencia de ninguna otra cláusula del presente. Si cualquier disposición contenida en esta carta mandato se declara nula o inválida de acuerdo con la
                    legislación aplicable, dicha disposición se considerará sustituida por aquella otra disposición válida que pueda cumplir con mayor rigor el objetivo de la
                    primera. Las restantes disposiciones continuarán en plena vigencia.<br>
                    <b>26. JURISDICCIÓN.</b> Las partes solucionarán de buena fe, por medio de consulta mutua, toda cuestión o disputa que surja de o en relación con la
                    presente carta mandato, y tratarán de llegar a un acuerdo satisfactorio. En caso de no arribarse a una solución de acuerdo con lo establecido
                    precedentemente, las partes acuerdan que cualquier controversia, conflicto o reclamo emergente o relacionado a la celebración o cumplimiento del
                    presente mandato será sometida a laudo inapelable del Tribunal de Arbitraje General de la Bolsa de Comercio de Buenos Aires, por las reglas del arbitraje
                    de derecho. Ello, sin perjuicio del derecho que al Cliente le otorga el artículo 46º de la Ley 26.831.<br>
                    <b>27. INFORMACIÓN Y NORMATIVA RELATIVA A LA ACTIVIDAD DE LA SOCIEDAD.</b> El Cliente podrá acceder a la información y normativa relativa a la
                    actividad de la Sociedad como Agente en el sitio de internet www.cnv.gob.ar y en las páginas de internet de los mercados de los que la Sociedad es
                    miembro. Respecto a la información y normativa relativa a PLD y FT de la Sociedad como Sujeto Obligado en el sitio de internet
                    www.argentina.gob.ar/uif.<br>
                    <b>28. CONSTITUCIÓN DE DOMICILIO POSTAL, DE CORREO ELECTRÓNICO Y DE TELÉFONO CELULAR DEL CLIENTE PARA NOTIFICACIONES.</b> El
                    Cliente indicará en el formulario de solicitud de apertura de la Cuenta provista por la Sociedad al inicio de la relación contractual la totalidad de los datos
                    necesarios para la identificación e individualización de la persona, además de aquellos datos establecido por las disposiciones previstas para PLD y FT
                    en vigencia. Complementariamente, indicará el domicilio postal, la dirección del correo electrónico y el número de teléfono fijo o celular para las
                    notificaciones, debiendo informar los cambios de domicilio dentro de los treinta (30) días de ocurridos. La Sociedad no se responsabilizará por los
                    inconvenientes que tal omisión pudiera ocasionar ante terceros.<br><br>
                    <b>POR EL PRESENTE DECLARO/DECLARAMOS QUE TODOS LOS DATOS CONSIGNADOS SON CORRECTOS, CIERTOS Y VERDADEROS, QUE
                    HE/HEMOS LEÍDO DETENIDAMENTE Y ACEPTADO LA TOTALIDAD DE LOS TÉRMINOS Y CONDICIONES ESTIPULADOS EN EL PRESENTE Y QUE
                    HE/HEMOS RECIBIDO UNA COPIA.</b>
                </div>

                <div class="corte"></div>
                <img src="images/PDF/anexo_e.png">
                <div class="titulostexto">
                    TEST DEL INVERSOR
                </div>
                <div class="texto_parrafo">
                    El presente Test del Inversor debe ser completado por el Cliente, en cumplimiento a la regulación vigente (RG 731/18 CNV) a fin de catalogarlo dentro
                    de un grupo determinado de inversores, al que se le podrán ofertar productos que satisfagan sus necesidades de rentabilidad, liquidez y riesgo. Los
                    resultados son indicativos, y no comprometen la responsabilidad de Sailing.
                </div>

                @if (count($testInversor)>0)

                    <table  width="100%"  style="bordercolor: #ffffff ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                        <tr>
                            <td colspan="3" class="enca_izq">1 - ¿CUAL ES LA EDAD PROMEDIO DE LOS INTEGRANTES DE LA CUENTA?</td>
                        </tr>

                        <tr class="celda">
                            <td class="campo" width="60%">Menor a 25 años</td>
                            <td width="20%">@if ($testInversor[0]->pregunta1==3)
                                                X
                                            @endif</td>
                            <td width="20%">3 pts.</td>
                        </tr>
                        <tr class="celda">
                            <td class="campo" width="60%">Entre 26 y 35 años</td>
                            <td width="20%">@if ($testInversor[0]->pregunta1==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr class="celda">
                            <td class="campo" width="60%">Entre 36 y 55 años</td>
                            <td width="20%">@if ($testInversor[0]->pregunta1==1)
                                                X
                                            @endif</td>
                            <td width="20%">1 pts.</td>
                        </tr>
                        <tr class="celda">
                            <td class="campo" width="60%">Mayor a 55 años</td>
                            <td width="20%">@if ($testInversor[0]->pregunta1==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="enca_izq">2 - ¿CUANTO CONOCES DEL MERCADO DE CAPITALES?</td>
                        </tr>

                        <tr class="celda">
                            <td class="campo" width="60%">Nada</td>
                            <td width="20%">@if ($testInversor[0]->pregunta2==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr class="celda">
                            <td class="campo" width="60%">Un poco</td>
                            <td width="20%">@if ($testInversor[0]->pregunta2==1)
                                                X
                                            @endif</td>
                            <td width="20%">1 pts.</td>
                        </tr>
                        <tr class="celda">
                            <td class="campo" width="60%">Bastante / mucho</td>
                            <td width="20%">@if ($testInversor[0]->pregunta2==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="enca_izq">3 - ¿YA REALIZASTE ALGUNA INVERSION EN EL MERCADO DE CAPITALES?</td>
                        </tr>

                        <tr class="celda">

                            <td class="campo" width="60%">No</td>
                            <td width="20%">@if ($testInversor[0]->pregunta3==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Si</td>
                            <td width="20%">@if ($testInversor[0]->pregunta3==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>

                        <tr>
                            <td colspan="3" class="enca_izq">4 - ¿QUE PORCENTAJE DE TUS AHORROS ESTAS DISPUESTO A INVERTIR EN EL MERCADO DE CAPITALES?</td>
                        </tr>

                        <tr class="celda">

                            <td class="campo" width="60%">Menos del 25%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta4==1)
                                                X
                                            @endif</td>
                            <td width="20%">1 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Entre el 26% y el 40%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta4==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Entre el 41 % y el 65%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta4==3)
                                                X
                                            @endif</td>
                            <td width="20%">3 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Más del 65%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta4==4)
                                                X
                                                @endif</td>
                            <td width="20%">4 pts.</td>
                        </tr>

                        <tr>
                            <td colspan="3" class="enca_izq">5 - ¿EN CUALES DE LOS SIGUIENTES TIPOS DE PRODUCTOS INVERTIRIAS?</td>
                        </tr>

                        <tr class="celda">

                            <td class="campo" width="60%">100% activos de renta fija a corto plazo: menor rentabilidad y bajo riesgo.</td>
                            <td width="20%">@if ($testInversor[0]->pregunta5==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">60% activos de renta fija a corto plazo y 40% activos de renta variable a mediano plazo: mayor rentabilidad con mayor riesgo</td>
                            <td width="20%">@if ($testInversor[0]->pregunta5==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">40% activos de renta fija a corto plazo y 60% activos de renta variable a mediano plazo</td>
                            <td width="20%">@if ($testInversor[0]->pregunta5==4)
                                                X
                                            @endif</td>
                            <td width="20%">4 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">100% activos de renta variable a mediano o largo plazo</td>
                            <td width="20%">@if ($testInversor[0]->pregunta5==6)
                                                X
                                            @endif</td>
                            <td width="20%">6 pts.</td>
                        </tr>

                        <tr>
                            <td colspan="3" class="enca_izq">6 - ¿CUAL ES EL PLAZO MAXIMO QUE PENSAS MANTENER TUS INVERSIONES EN EL MERCADO DE CAPITALES?</td>
                        </tr>

                        <tr class="celda">

                            <td class="campo" width="60%">Menos de 4 meses</td>
                            <td width="20%">@if ($testInversor[0]->pregunta6==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Entre 4 y 12 meses</td>
                            <td width="20%">@if ($testInversor[0]->pregunta6==1)
                                                X
                                            @endif</td>
                            <td width="20%">1 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Mas de 12 meses</td>
                            <td width="20%">@if ($testInversor[0]->pregunta6==3)
                                                X
                                            @endif</td>
                            <td width="20%">3 pts.</td>
                        </tr>

                        <tr>
                            <td colspan="3" class="enca_izq">7 - EN EL MOMENTO DE REALIZAR UNA INVERSION, ¿CUAL DE LAS SIGUIENTES OPCIONES PREFERIS?</td>
                        </tr>

                        <tr class="celda">

                            <td class="campo" width="60%">Preservar el dinero que se invirtió obteniendo una rentabilidad mínima sin arriesgar mi capital</td>
                            <td width="20%">@if ($testInversor[0]->pregunta7==0)
                                                X
                                            @endif</td>
                            <td width="20%">0 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Tener una ganancia apenas superior a la de un plazo fijo, aunque esté sujeta a una variación mínima del mercado</td>
                            <td width="20%">@if ($testInversor[0]->pregunta7==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Puedo asumir una pérdida del 10% si espero tener a mediano / largo plazo una mayor rentabilidad</td>
                            <td width="20%">@if ($testInversor[0]->pregunta7==4)
                                                X
                                            @endif</td>
                            <td width="20%">4 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Obtener una ganancia significativa, corriendo el riesgo de perder más de la mitad de la inversión inicial</td>
                            <td width="20%">@if ($testInversor[0]->pregunta7==6)
                                                X
                                            @endif</td>
                            <td width="20%">6 pts.</td>
                        </tr>

                        <tr>
                            <td colspan="3" class="enca_izq"> 8 - EN EL SUPUESTO DE UNA BAJA IMPORTANTE EN TU PORTAFOLIO DE INVERSIONES, VOS:</td>
                        </tr>

                        <tr class="celda">
                            <td class="campo" width="60%">Rescatarías el total de tus activos</td>
                            <td width="20%">@if ($testInversor[0]->pregunta8==2)
                                                X
                                            @endif</td>
                            <td width="20%">2 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Rescatarías parte del total de tus activos</td>
                            <td width="20%">@if ($testInversor[0]->pregunta8==4)
                                                X
                                            @endif</td>
                            <td width="20%">4 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Mantendrías la totalidad de tus activos esperando que suba</td>
                            <td width="20%">@if ($testInversor[0]->pregunta8==6)
                                                X
                                            @endif</td>
                            <td width="20%">6 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Adicionarías más capital esperando comprar barato</td>
                            <td width="20%">@if ($testInversor[0]->pregunta8==8)
                                                X
                                            @endif</td>
                            <td width="20%">8 pts.</td>
                        </tr>

                    <tr >
                        <td colspan="3" class="enca_izq">9 - ¿ESTARIAS DISPUESTO A ASUMIR UNA BAJA EN EL VALOR DE SUS ACTIVOS?</td>

                    </tr>


                        <tr class="celda">

                            <td class="campo" width="80%">De hasta el 15%</td>
                            <td width="10%">@if ($testInversor[0]->pregunta9==2)
                                                X
                                            @endif</td>
                            <td width="10%">2 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Entre el 15 y 30%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta9==4)
                                                X
                                            @endif</td>
                            <td width="20%">4 pts.</td>
                        </tr>
                        <tr class="celda">

                            <td class="campo" width="60%">Más del 30%</td>
                            <td width="20%">@if ($testInversor[0]->pregunta9==6)
                                                X
                                            @endif</td>
                            <td width="20%">6 pts.</td>
                        </tr>
                        <tr class="enca">
                            <td class="enca_der" colspan="2">
                                SUMA DE PUNTOS:
                            </td>
                            <td><b> {{ $sumaTestInversor[0]->total }}</b></td>
                        </tr>


                    </table>



                    <div class="titulostexto">DECLARO BAJO JURAMENTO QUE LAS RESPUESTAS COINCIDEN CON LA SELECCIÓN QUE YO REALICÉ Y QUE EL PERFIL
                    QUE MEJOR SE ADAPTA A MIS OBJETIVOS DE INVERSIÓN Y TOLERANCIA AL RIESGO ES: </div>

                    <div class="fuente_test_inversor">
                        <table width="100%"  cellspacing="4px" style="bordercolor: #ffffff ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                            <tr>
                                <td class="celda">
                                    @if($sumaTestInversor[0]->total<=16)
                                        <img src="images/PDF/check.png" width="10px" height="10px">
                                    @else
                                        <img src="images/PDF/uncheck.png" width="10px" height="10px">
                                    @endif
                                    CONSERVADOR
                                </td>
                                <td class="celda">
                                    @if($sumaTestInversor[0]->total>=17 and $sumaTestInversor[0]->total<=25)
                                        <img src="images/PDF/check.png" width="10px" height="10px" class="mr-2">
                                    @else
                                        <img src="images/PDF/uncheck.png" width="10px" height="10px">
                                    @endif
                                    MODERADO
                                </td>
                                <td class="celda">
                                    @if($sumaTestInversor[0]->total>25)
                                        <img src="images/PDF/check.png" width="10px" height="10px" class="mr-2">
                                    @else
                                        <img src="images/PDF/uncheck.png" width="10px" height="10px">
                                    @endif
                                    AGRESIVO
                                </td>
                            </tr>
                        </table>
                    </div>
                @endif
            </section>
        </main>
        <script type="text/php">
            if ( isset($pdf) ) {
                    $pdf->page_script('
                    $x = 530;
                    $y = 810;
                    $text = "{PAGE_NUM}/{PAGE_COUNT}";
                    $font = $fontMetrics->get_font("Montserrat, sans-serif", "bold");
                    $size = 10;
                    $color = array(100, 100, 100);
                    $word_space = 0.0;  //  default
                    $char_space = 0.0;  //  default
                    $angle = 0.0;   //  default
                    $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
                    {{-- $font = $fontMetrics->get_font("Montserrat, sans-serif", "normal");
                    $pdf->text(, 810, "$PAGE_NUM/$PAGE_COUNT", $font, 12, '#ffffff'); --}}
                ');
            }
        </script>
    </body>
</html>
