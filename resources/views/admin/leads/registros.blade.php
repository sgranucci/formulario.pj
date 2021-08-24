@extends('lay.main')
@section('content')
  <style>
    .btn {
        font-size: 11px;
    }
    .filterByState {
        width: 100%;
    }
  </style>
  <form action="/listadoRegistros/list" method="post" id="ffilter">
  <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
  <section class="atc-mod2">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 text-right">
                Filtrar por:
            </div>
            <div class="col-lg-3 text-right">
                <select name="filterByState" id="filterByState" class="form-control" onchange="$('#ffilter').submit();">
                    <option value="all" {{$filterByState=="all" ? 'selected' : ''}}>Ver todos</option>
                    <option value="En Proceso" {{$filterByState == 'En Proceso' || empty($filterByState) ? 'selected' : ''}}>En Proceso</option>
                    <option value="Registro Finalizado" {{$filterByState == 'Registro Finalizado' ? 'selected' : ''}}>Registro Finalizado</option>
                    <option value="Cliente descartado" {{$filterByState == 'Cliente descartado' ? 'selected' : ''}}>Cliente descartado</option>
                    <option value="Es cliente" {{$filterByState == 'Es cliente' ? 'selected' : ''}}>Es cliente</option>
                </select>
            </div>
        </div>

        <div class="card">


                <table class="table datatable-html">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>DNI</th>
                            <th>Estado Registro</th>
                            <th>Fecha</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registro as $key => $value)
                        <tr>
                            <td>{{ $value->name }} {{ $value->surname }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->dni }}</td>
                            <td>{{ $value->estado_registro }}</td>
                            <td>{{ Carbon\Carbon::parse($value->created_at)->format('d/M/Y h:i') }}</td>
                            <td>
                                <a class='btn btn-primary' href="{{ route('detalleRegistro' , $value->user_id) }}">Archivos</a>
                                <a class='btn btn-danger' href="{{ route('pdf' , $value->user_id) }}" target="_blank">PDF</a>
                                <a class='btn btn-danger' href="{{ route('nuevo_pdf' , $value->user_id) }}" target="_blank">Nuevo PDF</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info" data-toggle="modal" data-id="{{$value->id}}" data-target="#exampleModal" onclick="load({{$value->id}})">
                                    Cambiar Estado
                                </button>

                            </td>
                        </tr>


                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
  </section>
  </form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <input type="hidden" id="ids">
         <select name="new_state" id="new_state" class="form-control">
            <option value="En Proceso">En Proceso</option>
            <option value="Registro Finalizado">Registro Finalizado</option>
            <option value="Cliente descartado">Cliente descartado</option>
            <option value="Es cliente">Es cliente</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"  onclick="save()">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
@push('scripts')
<script>

    $(document).ready(function() {
        $('.datatable-html').dataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            columnDefs: [{
                orderable: false,
                width: 100,
                targets: [ 5 ]
            }]
        });
    });

    function load(id) {
        $.get('/listadoRegistros/get/'+id)
         .done((r) => $('#new_state option[value="'+r+'"]').prop('selected', true) );
        $('#ids').val(id);
    }

    function save() {
        $.post('/listadoRegistros/save', {id: $('#ids').val(), val: $('#new_state').val(), "_token": "{{ csrf_token() }}"})
         .done(() => window.location.reload() )
    }

</script>
@endpush
