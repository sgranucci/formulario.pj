@extends('layouts.lay_topmenu.laytop')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
              
                
                <form id="form" class="wizard-form steps-validation wizard clearfix" action="{{route('formularioSave')}}"  method="post" enctype="multipart/form-data" data-fouc>
                    @csrf
                <!--<form id="form" class="wizard-form steps-validation wizard" action="{{route('formulario.create')}}" data-fouc method="post" enctype="multipart/form-data">-->
                    @if ($status=="")
                        @include('admin.leads.forms.bienvenida')
                    @endif
                    
                    @include('admin.leads.forms.form1')
                
                    @include('admin.leads.forms.form2')

                    @include('admin.leads.forms.form3') 
                    <input type="hidden" name="status" id="status" value="{{$status}}">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
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


        $.get('actividadId/'+relacionLaboral_id, function(data){
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

        });
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
        $(".inner").append("<div class='row mt-2' class='cRL' id='caja_"+countCaja+"'><div class='col-md-3'><div class='form-group'><label>Relación Laboral </label><select style='opacity:1 !important' name='tiporelacionlaboral' class='form-control  tiporelacionlaboral'  data-placeholder='Relación Laboral' data-fouc><option></option>@foreach ($tiporelacionlaborales as $item => $value)<option value='{{$item}}'>{{$value}}</option>@endforeach</select></div></div><div class='col-md-6'><div class='form-group'><label>Actividad o Profesión </label><select name='actividad' data-placeholder='Actividad' style='opacity:1 !important' class='form-control  actividad' data-fouc><option></option>@foreach ($actividades as $item => $value)<option value='{{$item}}'>{{$value}}</option>@endforeach</select></div></div></div>");

        $(".tiporelacionlaboral").change(function(){
             var tiporelacionlaboral_id = $(this).val();
             var caja_id = $(this).parent().parent().parent().attr('id');
             completarActividad(tiporelacionlaboral_id,caja_id);
        });

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
            b.push($(this).val());
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
                calle_nro:calle_nro
            },
            success:function(data){
                $("#status").val(data);

            }
        });

    }



</script>
@endpush
