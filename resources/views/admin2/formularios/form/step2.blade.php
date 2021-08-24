<div class="container step2" style="display: none">
    <fieldset>
        <input type="hidden" id="valordnifrente"    value={{$data['dni_frente']}} >
        <input type="hidden" id="valordnidorso"     value={{$data['dni_dorso']}} >
        <input type="hidden" id="valordniselfi"     value={{$data['selfi']}} >
        <input type="hidden" id="archivo_1"         value={{$data['archivo_1']}} >
        <input type="hidden" id="archivo_2"         value={{$data['archivo_2']}} >
        <input type="hidden" id="archivo_3"         value={{$data['archivo_3']}} >
        <input type="hidden" id="servicio"          value={{$data['servicio']}} >

        @foreach($tipos_fotos as $key=>$value)
            <input type="hidden" id="foto_{{$value->id}}" value="{{isset($data['foto__']) ? $data['foto__'] : ""}}" >
        @endforeach

        <div class="card" style="border:0px solid black !important;">
            <h2>Documentación que acredita identidad <FONT SIZE=2>(2mb max.)</font></h2>
            <div class="car-body ">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div class="form-group">
                                <img id="dni_frente" class="img-fluid img-preview rounded" style=" width: 135px;" src="{{asset('images/dni.jpeg')}}" alt="your image" />
                                <div class="dropzone dz-clickable" id="myDrop1" style=" height: 181px;">
                                    <div class="dz-default dz-message" data-dz-message="">
                                    <span>DNI Frente</span>
                                    </div>
                                </div>
                                <div id="editdnifrente">                                    
                                    @if (substr($data['dni_frente'], -3) == "pdf")
                                        <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Dni frente" style=" width: 135px;" />
                                    @else
                                        <img class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['dni_frente'])}}" alt="Dni frente" style="width: 200px"/>
                                    @endif
                                    <br>
                                    <div onclick="editarfoto(1);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar DNI frente</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <img id="dni_dorso" class="img-fluid img-preview rounded" style=" width: 135px;" src="{{asset('images/Foto-DNI-Dorso-Icono.png')}}" alt="your image" />
                                <div class="dropzone dz-clickable" id="myDrop2" style=" height: 181px;">
                                    <div class="dz-default dz-message" data-dz-message="">
                                    <span>DNI Dorso</span>
                                    </div>
                                </div>
                                <div id="editdnidorso">
                                    @if (substr($data['dni_dorso'], -3) == "pdf")
                                        <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Dni dorso" style=" width: 135px;" />
                                    @else
                                        <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['dni_dorso'])}}" alt="Dni dorso" style="width: 200px"/>
                                    @endif
                                    <br>
                                    <div onclick="editarfoto(2);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar DNI dorso</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <img id="dni_selfie" class="img-fluid img-preview rounded mb-1 " style=" width: 135px;" src="{{asset('images/selfie.jpeg')}}" alt="your image" />
                                <div class="dropzone dz-clickable" id="myDrop3" style=" height: 181px;" required>
                                    <div class="dz-default dz-message" data-dz-message="">
                                    <span>Selfie con DNI</span>
                                    </div>
                                </div>
                                <div id="editdniselfi">
                                    @if (substr($data['selfi'], -3) == "pdf")
                                        <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Selfie con DNI" style=" width: 135px;" />
                                    @else
                                        <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['selfi'])}}" alt="Selfie con DNI" style="width: 200px"/>
                                    @endif
                                    <br>
                                    <div onclick="editarfoto(3);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar Selfie</div>
                                </div>
                            </div>
                        </div>

                        @foreach($tipos_fotos as $key=>$value)
                        <div class="col-md-3">
                            <div class="form-group">
                                <img id="dni_selfie" class="img-fluid img-preview rounded mb-1 " style=" height: 135px;" src="{{asset('images/selfie.png')}}" alt="your image" />
                                <div class="dropzone dz-clickable" id="myDrop-photo-{{$value->id}}" style=" height: 181px;" required>
                                    <div class="dz-default dz-message" data-dz-message="">
                                        <span>{{$value->name}}</span>
                                    </div>
                                </div>
                                <div id="editCustom">
                                @if (isset($data['foto__']))
                                @if (substr($data['foto__'], -3) == "pdf")
                                            <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Foto aleatoria" style=" width: 135px;" />
                                        @else
                                            <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['foto__'])}}" alt="Foto aleatoria" style="width: 200px"/>
                                        @endif
                                @else
                                @if (substr($data['selfi'], -3) == "pdf")
                                            <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Foto aleatoria" style=" width: 135px;" />
                                        @else
                                            <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['selfi'])}}" alt="Foto aleatoria" style="width: 200px"/>
                                        @endif
                                @endif
                                    <br>
                                    <div onclick="editarfoto(8);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar {{$value->name}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="border:0px solid black !important;margin-top:15px;">

            <h2>Documentaci&oacute;n Origen de Fondos &nbsp;<FONT SIZE=2>(2mb max.)</font><i class="fas fa-info-circle" style="color: #0083a7; font-size: 25px;" data-toggle="modal" data-target="#backgroundDoc"></i></h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dropzone dz-clickable" id="myDrop4" style=" height: 181px;">
                            <div class="dz-default dz-message" data-dz-message="">
                            <span>Archivo 1</span>
                            </div>
                        </div>
                        <div id="editarchivo_1">
                            @if (substr($data['archivo_1'], -3) == "pdf")
                                <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Archivo 1" style=" width: 135px;" />
                            @else
                                <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['archivo_1'])}}" alt="Archivo 1" style="width: 200px"/>
                            @endif
                            <br>
                            <div onclick="editarfoto(4);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar Archivos</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dropzone dz-clickable" id="myDrop5" style=" height: 181px;">
                            <div class="dz-default dz-message" data-dz-message="">
                                <span>Archivo 2</span>
                            </div>
                        </div>
                        <div id="editarchivo_2">
                            @if (substr($data['archivo_2'], -3) == "pdf")
                                <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Archivo 2" style=" width: 135px;" />
                            @else
                                <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['archivo_2'])}}" alt="Archivo 2" style="width: 200px"/>
                            @endif
                            <br>
                            <div onclick="editarfoto(5);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar Archivos</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dropzone dz-clickable" id="myDrop6" style=" height: 181px;">
                            <div class="dz-default dz-message" data-dz-message="">
                                <span>Archivo 3</span>
                            </div>
                        </div>
                        <div id="editarchivo_3">
                            @if (substr($data['archivo_3'], -3) == "pdf")
                                <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Archivo 3" style=" width: 135px;" />
                            @else
                                <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['archivo_3'])}}" alt="Archivo 3" style="width: 200px"/>
                            @endif
                            <br>
                            <div onclick="editarfoto(6);" style="   display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar Archivos</div>
                        </div>
                    </div>
                </div>
                <div class="row">

            </div>
        </div>

        <div class="card col-md-3" style="border:0px solid black !important;margin-top:15px;">

            <h2>Servicios (opcional) <FONT SIZE=2>(2mb max.)</font><FONT SIZE=1> (solo en caso que la dirección completada en la página anterior no coincida con su DNI)</font></h2>
            <div class="car-body ">
                <div class="container">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="dropzone dz-clickable" id="myDrop7" style=" height: 181px;">
                                    <div class="dz-default dz-message" data-dz-message="">
                                    <span>Servicios</span>
                                    </div>
                                </div>
                                <div id="editservicio">
                                    @if (substr($data['servicio'], -3) == "pdf")
                                        <img class="img-fluid rounded" src="{{asset('images/pdf.png')}}"                        alt="Servicio" style=" width: 135px;" />
                                    @else
                                        <img  class="img-fluid rounded" src="{{asset($data['user_id'].'/'.$data['servicio'])}}" alt="Servicio" style="width: 200px"/>
                                    @endif
                                    <br>
                                    <div onclick="editarfoto(7);" style="display: block;    margin-right: 5px;    margin-top: 15px;    padding: 8px;    border: 2px solid #0083a7;    border-radius: 10px;    color: #0083a7;    font-size: 14px;    text-align: center;font-weight: bold; cursor:pointer">Editar Servicio</div>
                                </div>
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




