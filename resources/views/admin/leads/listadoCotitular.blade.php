@extends('lay.main')
@section('content')
<section class="nosotros-mod1">
    <div class="container">
      <img data-aos="fade-right" data-aos-easing="ease" data-aos-delay="300" src="https://www.sailinginversiones.com/images/bloque-azul-mod1-acciones.png" alt="" class="aos-init">
  
      <article>
        <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Editar</span>
        </h1>
            <h3 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Co-Titular</span>
            </h3>
      </article>
  
      <img data-aos="fade-left" data-aos-easing="ease" data-aos-delay="1000" src="https://www.sailinginversiones.com/images/foto-mod1-nosotros.png" alt="" class="aos-init">
    </div>
</section>
  <section class="atc-mod2">
    <div class="container">
     
        <div class="card">
            
            <table class='table'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>DNI</th> 
                        <th></th>                    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($q_tieneCoTitular as $key => $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->nro }}</td>
                            <td>
                                {{-- <a class='btn btn-primary' href="{{ route('modificaCotitular' , $value->user_id) }}">Editar</a> --}}
                                <a class='btn btn-primary' href="{{ route('modificaCotitular' , $value->user_id) }}">Editar</a>
                                <a class='btn btn-danger' href="{{ route('eliminaCotitular' , $value->user_id) }}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection 