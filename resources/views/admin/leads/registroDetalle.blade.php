@extends('lay.mainregistro')
@section('content')
<section class="atc-mod2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            @foreach($registro as $imagen)                
                @if ($loop->first)
                    @php
                        $titulo = 'Titutar';    
                    @endphp
                @else
                    @php
                        $titulo = 'Cotitutar';
                    @endphp
                @endif
                <table  width="100%"  cellspacing="10px" style="bordercolor: #0e0d0d ;color: #2f56a3; margin: 0px; border: 55px; padding: 5px;">
                    <tr>
                        <th colspan="4">
                            {{ $titulo .": ". $imagen->name}}
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Tipo
                        </th>
                        <th>
                            Imágen
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Acción
                        </th>
                    </tr>
                    
                    @if ($imagen->dni_frente!="")
                        <tr>
                            <td>
                                Dni Frente
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->dni_frente);

		                    if ($div[0] == $imagen->dni_frente)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="dni_frente" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->dni_frente)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                DNI frente - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                
                                <a href="{{asset($imagen->user_id.'/'.$imagen->dni_frente)}}" download="DNI frente-{{$imagen->name}}-{{$imagen->nro}}"> 
                                        Descargar
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->dni_dorso!="")
                        <tr>
                            <td>
                                Dni dorso
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->dni_dorso);

		                    if ($div[0] == $imagen->dni_dorso)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="dni_dorso" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->dni_dorso)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                DNI dorso - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->dni_dorso)}}" download="DNI Dorso-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr> 
                    @endif 
                    @if ($imagen->selfi!="")
                        <tr>
                            <td>
                                Selfie
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->selfi);

		                    if ($div[0] == $imagen->selfi)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="selfi" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->selfi)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                DNI selfie - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->selfi)}}" download="DNI selfie-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->archivo_1!="")
                        <tr>
                            <td>
                                Archivo 1
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->archivo_1);

		                    if ($div[0] == $imagen->archivo_1)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="archivo_1" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->archivo_1)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif                            
                            </td>
                            <td>
                                Archivo 1 - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->archivo_1)}}" download="Archivo 1-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->archivo_2!="")
                        <tr>
                            <td>
                                Archivo 2
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->archivo_2);

		                    if ($div[0] == $imagen->archivo_2)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="archivo_2" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->archivo_2)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                Archivo 2 - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->archivo_2)}}" download="Archivo 2-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->archivo_3 !="")
                        <tr>
                            <td>
                                Archivo 3
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->archivo_3);

		                    if ($div[0] == $imagen->archivo_3)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="archivo_3" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->archivo_3)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                Archivo 3 - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->archivo_3)}}" download="Archivo 3-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->servicio!="")
                        <tr>
                            <td>
                                Servicio
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->servicio);

		                    if ($div[0] == $imagen->servicio)
					$div[1] = '';
                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp')
                                    <img id="servicio" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->servicio)}}" alt="your image" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                Servicio - {{  $imagen->name .'-'. $imagen->nro }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->servicio)}}" download="Servicio-{{$imagen->name}}-{{$imagen->nro}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                    @if ($imagen->aleatoria!="")
                        <tr>
                            <td>
                                Foto aleatoria - {{  $imagen->aleatoria_nombre }} 
                            </td>
                            <td>
                                @php 
                                    $div = explode(".", $imagen->aleatoria);

		                    if ($div[0] == $imagen->aleatoria)
					$div[1] = '';

                                @endphp
                                @if($div[1] == 'png' || $div[1] == 'jpeg' || $div[1] == 'jpg' || $div[1] == 'bmp' || $div[1] == 'pdf')
                                    <img id="aleatoria" class="img-fluid rounded" src="{{asset($imagen->user_id.'/'.$imagen->aleatoria)}}" alt="Imagen Aleatoria" style="width: 100px"/>
                                @else
                                    Archivo {{ $div[1] }}
                                @endif
                            </td>
                            <td>
                                {{  $imagen->aleatoria }} 
                            </td>
                            <td>
                                <a href="{{asset($imagen->user_id.'/'.$imagen->aleatoria)}}" download="Aleatoria-{{$imagen->name.'-DNI.'.$div[1]}}"> 
                                    Descargar 
                                </a>
                            </td>
                        </tr>    
                    @endif
                </table> 
            @endforeach
            </div>                         
        </div>   
    </div> 
</section>
@endsection
@push('scripts')
<script>
   
    
</script>
@endpush
