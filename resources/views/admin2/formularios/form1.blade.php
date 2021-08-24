@extends('lay.main')
@section('content')
<section class="nosotros-mod1">
    <div class="container">
      <img data-aos="fade-right" data-aos-easing="ease" data-aos-delay="300" src="https://www.sailinginversiones.com/images/bloque-azul-mod1-acciones.png" alt="" class="aos-init">

      <article>
        <h1 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Apertura de Cuenta</span>
        </h1>
        @if(session('estado') == 'nuevoCotitular' or session('estado') == 'editarCotitular')
        {{-- @if(session('estadMarcaUser') != null) --}}
            <h3 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Co-Titular</span>
            </h3>
        @else
            <h3 data-aos="fade-right" data-aos-easing="ease" data-aos-delay="450" class="aos-init"><span>Titular</span>
            </h3>
        @endif
      </article>

      <img data-aos="fade-left" data-aos-easing="ease" data-aos-delay="1000" src="https://www.sailinginversiones.com/images/foto-mod1-nosotros.png" alt="" class="aos-init">
    </div>
</section>
<form id="form" class="wizard-form steps-validation wizard clearfix "  action="{{route('formularioSave')}}"  method="post" enctype="multipart/form-data" data-fouc>
    @csrf

    <div class="steps clearfix">
        <ul role="tablist">
            <li role="tab" class="first" aria-disabled="false" aria-selected="true" style="    height: 70px;">
                <div class="number" style=" margin-top: 20px; color:black;" id="paso1_nro">1</div>
                <div class="text" style="margin-top: 65px;color:black;" id="paso1_texto">Datos personales</div>
            </li>
            <li role="tab" class="disabled" aria-disabled="false" aria-selected="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso2_nro">2</div>
                <div class="text" style="margin-top: 65px;color:black;" id="paso2_texto">Documentación</div>
            </li>
            <li role="tab" class="disabled" aria-disabled="false" aria-selected="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso3_nro">3</div>
                <div class="text" style="margin-top: 65px;color:black;" id="paso3_texto">Test Inversor</div>
            </li>
            <li role="tab" class="disabled last" aria-disabled="true">
                <div class="number" style=" margin-top: 20px;color:black;" id="paso4_nro">4</div>
                <div class="text" style="margin-top: 65px;color:black;" id="paso4_texto">Términos y condiciones</div>
            </li>
        </ul>
    </div>
    <section class="contacto-mod2">
        @include('admin2.formularios.form.step1')
        @include('admin2.formularios.form.step2')
        @include('admin2.formularios.form.step3')
        @include('admin2.formularios.form.step4')
    </section>


    <input type="hidden" name="status" id="status" value="{{$data['status']}}">
</form>
@endsection

<style type="text/css">

.modal-dialog {


    max-width: 100% !important;
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


.dropzone {
    border: 2px dashed #0087F7 !important;
    border-radius: 5px;
    background: white;
    font-family: Monserrat, "Open Sans", sans-serif;
    font-size: 20px;
    font-weight: 300;
    line-height: 1.4rem;
    color: #044df5 !important;
}

.continuar{
    flex: 1;
    align-items: flex-end;
    margin-right: 5px;
    margin-top: 15px;
    padding: 8px;
    border: 2px solid #0083a7;
    border-radius: 10px;
    color: #0083a7;
    font-size: 14px;
    text-align: center;
    font-weight: bold;
    cursor:pointer;
    width:20%;
    float:right;
}

.select2-selection__rendered{
    display: none;
}

.wizard>.steps .text {
    display: inline-block;
    text-align: center;
}
</style>

@push('scripts')
<script>
    var cur_num = 1;

    $('.borrarAdd2').click(function(){
        $(this).parent().parent().parent().remove();
    });

    function completarprovincias(direccion_pais_id){
        $.get('/provinciasPais/'+direccion_pais_id, function(data){
            var prov = $.map(data, function(value, index){
                        return [value];
            });
            //$("#provincia_id").empty();
          //  $("#provincia_id").append('<option value=""></option>');
            $.each(prov, function(index,value){
                $("#provincia_id").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
        });
    }

    function completarLocalidades(provincia_id){
        var loc_id;
        $.get('/localidadesProvincia/'+provincia_id, function(data){
            var loc = $.map(data, function(value, index){
                return [value];
            });
            $("#localidad_id").empty();
            $("#localidad_id").append('<option value=""></option>');
            $.each(loc, function(index,value){
                $("#localidad_id").append('<option value="'+value.id+'">'+value.name+'</option>');
            });
            //$("#localidad_id").find("option").eq(0).attr('selected', 'selected');
        });
        setTimeout(() => {
                var loc_id = $("#localidad_id").val();
                if (loc_id != undefined) {
                    completarCP(loc_id);    
                }
                
        }, 3000);
    }

    function completarCP(localidad_id){
        $.get('/localidadesCP/'+localidad_id, function(data){
            if(data!=0){
                $("#cp").val(data);
            }
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
        $(".inner").append("<div class='row mt-2' class='cRL' id='caja_"+countCaja+"'><div class='col-md-3'><div class='form-group'><label>Relación Laboral </label><select style='opacity:1 !important' name='tiporelacionlaboral' class='form-control tiporelacionlaboral'  data-placeholder='Relación Laboral' data-fouc>@foreach ($tiporelacionlaborales as $item => $value)<option value='{{$item}}'>{{$value}}</option>@endforeach</select></div></div><div class='col-md-9'><div class='form-group'><label>Actividad o Profesión </label><input type='text' name='actividad' id='actividad' data-placeholder='Actividad' class='form-control actividad required'></div></div><div style='margin-top: -30px;margin-left: 100%;'><i class='fas fa-trash-alt borrarAdd'></i></div></div>");

        // $(".tiporelacionlaboral").change(function(){
        //      var tiporelacionlaboral_id = $(this).val();
        //      var caja_id = $(this).parent().parent().parent().attr('id');
        //     //  completarActividad(tiporelacionlaboral_id,caja_id);
        // });

        $('.borrarAdd').click(function(){
          $(this).parent().parent().remove();
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

    function saveDataTestInversor() {
        uno = $("input[name='uno']:checked").val();
        dos = $("input[name='dos']:checked").val();
        tres = $("input[name='tres']:checked").val();
        cuatro = $("input[name='cuatro']:checked").val();
        cinco = $("input[name='cinco']:checked").val();
        seis = $("input[name='seis']:checked").val();
        siete = $("input[name='siete']:checked").val();
        ocho = $("input[name='ocho']:checked").val();
        nueve = $("input[name='nueve']:checked").val();

        $.ajax({
            url: "{{ url('saveDataTestInversor') }}",
            type:"POST",
            dataType:"html",
            data:{
                "_token": $("meta[name='csrf-token']").attr("content"),
                uno:uno,
                dos:dos,
                tres:tres,
                cuatro:cuatro,
                cinco:cinco,
                seis:seis,
                siete:siete,
                ocho:ocho,
                nueve:nueve
            },
            success:function(data){

            }
        });
    }

    function saveData(){

        a = []
        $(".tiporelacionlaboral").each(function(){
            a.push($(this).val());
        });

        b = []
        $(".actividad").each(function(){
            texto = $(this).val().replace(',', '@');
            b.push(texto);
        });

        arreglo = [];
        a.forEach(myfunction);
        function myfunction(item, index){
            actividad[index] = b[index];
        }
        relLab_id=JSON.stringify(a);
        relLab_act=JSON.stringify(b);
        console.log(relLab_id,relLab_act);
        name=$("#name").val();
        surname=$("#surname").val();
        email=$("#email").val();
        fechanac=$("#birthYear").val()+"-"+$("#birthMonth").val()+"-"+$("#birthDay").val();
        tipo_docuemnto_id=$("#tipo_documento_id").val();
        nro=$("#nro").val();
        name_pareja=$("#name_pareja").val();
        tipo_docuemnto_pareja_id=$("#tipo_docuemnto_pareja_id").val();
        nro_dni_pareja=$("#nro_dni_pareja").val();

        estado_civil_id=$("#estado_civil_id").val();
        genero_id=$("#genero_id").val();
        celular=$("#celular").val();
        cod_area=$("#cod_area").val();
        cuit=$("#cuit").val();
        preCuit=$("#preCuit").val();
        postCuit=$("#postCuit").val();

        pais_id=$("#pais_id").val();
        direccion_pais_id=$("#direccion_pais_id").val();
        provincia_id=$("#provincia_id").val();
        localidad_id=$("#localidad_id").val();
        calle=$("#calle").val();
        pisodto=$("#pisodto").val();
        cp=$("#cp").val();
        calle_nro=$("#calle_nro").val();


        personaexpuesta=$("#personaexpuesta").val();
        inversor_calificado=$("#inversor_calificado").val();
        motivo=$("#motivo").val();
        sujetoobligado=$("#sujetoobligado").val();
        residenciaexterior=$("#residenciaexterior").val();
        pais_id_otra_residencia=$("#pais_id_otra_residencia").val();
        status=$("#status").val();

        ide_tribu=$("#ide_tribu").val();
        tieneagente     =$("#tieneagente").val();
        agente          =$("#agente").val();

        var data = {
                name:name,
                surname:surname,
                email:email,
                fechanac:fechanac,
                tipo_docuemnto_id:tipo_docuemnto_id,
                nro:nro,
                estado_civil_id:estado_civil_id,
                genero_id:genero_id,
                celular:celular,
                cod_area:cod_area,

                name_pareja:name_pareja,
                tipo_docuemnto_pareja_id:tipo_docuemnto_pareja_id,
                nro_dni_pareja:nro_dni_pareja,

                cuit:cuit,
                preCuit:preCuit,
                postCuit:postCuit,

                pais_id:pais_id,
                direccion_pais_id:direccion_pais_id,
                provincia_id:provincia_id,
                localidad_id:localidad_id,
                cp:cp,
                calle:calle,
                pisodto:pisodto,
                calle_nro:calle_nro,

                personaexpuesta:personaexpuesta,
                inversor_calificado:inversor_calificado,
                motivo:motivo,
                sujetoobligado:sujetoobligado,
                residenciaexterior:residenciaexterior,
                pais_id_otra_residencia:pais_id_otra_residencia,
                status:status,

                ide_tribu:ide_tribu,

                relLab_id:relLab_id,
                relLab_act:relLab_act,

                tieneagente:tieneagente,
                agente:agente,

                aagi:$("[name=aagi]:checked").val()

            }


        $.ajax({
            url: "{{ url('saveData') }}",
            type:"POST",
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:data,
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

                $("#form").submit();
            }

        }

        if (nro==4){
            $(".step1").hide();
            $(".step2").hide();
            $(".step3").hide();
            $(".step4").show();

            $("#paso3_nro").css("color", "#0083a7");
            $('#paso3_nro').css('border', 'solid 2px #4681a4');
            $("#paso3_nro").css("font-weight", "bold");

            $("#paso3_texto").css("color", "#0083a7");
            $("#paso3_texto").css("font-weight", "bold");
            $("#paso3_texto").css("text-decoration", "underline #0083a7");


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

        if (nro==6){

            if (!$("#tyc").is(":checked")) {
                alert("El campo terminos y condiciones es obligatorio");
            }else{

                $("#form").submit();

                window.location.href = '{{ url("/inicioCamino/nuevoCotitular/") }}';

            }



        }

        if (nro==3){
            if ( $("#valordnifrente").val() == "" ){
                alert('por favor complete dni frontal')
            }else if ( $("#valordnidorso").val() == "" ){
                alert('por favor complete dni dorso')
            } else if ( $("#valordniselfi").val() == "" ){
                alert('por favor complete dni selfie')
            }

            @foreach($tipos_fotos as $value)
                //console.log('por favor complete {{$value->name}}');
                else if (  $("#foto_{{$value->id}}").val() == "" ){
                    alert('por favor complete {{$value->name}}');
                }
            @endforeach

            else if ( $("#archivo_1").val() == "" && $("#archivo_2").val() == "" && $("#archivo_3").val() == ""  ){
                 alert('por favor complete la Documentación Origen de Fondos')
             }

            else{
                $(".step2").hide();
                $(".step1").hide();
                $(".step3").show();
                $(".step4").hide();

                $("#paso2_nro").css("color", "#0083a7");
                $('#paso2_nro').css('border', 'solid 2px #4681a4');
                $("#paso2_nro").css("font-weight", "bold");

                $("#paso2_texto").css("color", "#0083a7");
                $("#paso2_texto").css("font-weight", "bold");
                $("#paso2_texto").css("text-decoration", "underline #0083a7");


            }


            $("#paso3_nro").css("color", "black");
            $("#paso3_texto").css("color", "black");
            $('#paso3_nro').css('border', 'solid 1px #eee');

        }

        if (nro==2){
            $('input').css("border-color", "");

            if($("#email_login").val()!="")
            {
            	if ($("#email").val() == $("#email_login").val())
    	    	{
                	alert("No se puede repetir e-mail entre los titulares/co-titulares");
			return false;
            	}
	    }

            if ( $("#name").val() == "" ){
                $("#name").css("border-color", "red");
                $("#name").focus();
            }if ( $("#surname").val() == "" ){
                $("#surname").css("border-color", "red");
                $("#surname").focus();
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
            }else if ( $("#estado_civil_id").val() == "2" &&
                    ( $("#name_pareja").val()=="" || $("#tipo_docuemnto_pareja_id").val()=="" || $("#nro_dni_pareja").val()=="" )
            )
            {
                $("#name_pareja, #tipo_docuemnto_pareja_id, #nro_dni_pareja").css("border-color", "red");
                $("#name_pareja").focus();
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
            }else if ( $("#cod_area").val() == "" ){
                $("#cod_area").css("border-color", "red");
                $("#cod_area").focus();
            }else if ( $("#calle_nro").val() == "" ){
                $("#calle_nro").css("border-color", "red");
                $("#calle_nro").focus();
            }else if ( $("#actividad").val() == "" ){
                $("#actividad").css("border-color", "red");
                $("#actividad").focus();
            }else if($("#tieneagente").val() == 2 && $("#agente").val() == ""){
                $("#cajaAgente").css("border-color", "red");
                $("#agente").focus();
            }
            else{
                saveData();
                $(".step1").hide();
                $(".step3").hide();
                $(".step4").hide();

                $(".step2").show();

                $("#paso1_nro").css("color", "#0083a7");
                $('#paso1_nro').css('border', 'solid 2px #4681a4');
                $("#paso1_nro").css("font-weight", "bold");

                $("#paso1_texto").css("color", "#0083a7");
                $("#paso1_texto").css("font-weight", "bold");
                $("#paso1_texto").css("text-decoration", "underline #0083a7");

                $("#paso2_nro").css("color", "black");
                $("#paso2_texto").css("color", "black");
                $('#paso2_nro').css('border', 'solid 1px #eee');

                $("input").css("border-color", "#ced4da");



            }
        }

    }

    $('header .container .open_menu').click(function() {
        $('header .container nav').css('left', '0');
    });

    $('header .container .close_menu').click(function() {
        $('header .container nav').css('left', '-100%');
    });

    $('#form_contact').submit(function(e) {
        e.preventDefault();
    });

    function editarfoto(id){
        if(id == 1){
            $('#editdnifrente').hide();
            $('#myDrop1').show();
        }
        if(id == 2){
            $('#editdnidorso').hide();
            $('#myDrop2').show();
        }
        if(id == 3){
            $('#editdniselfi').hide();
            $('#myDrop3').show();
        }
        if(id == 4){
            $('#archivo_1').val('');
            $('#editarchivo_1').hide();
            $('#myDrop4').show();
        }
        if(id == 5){
            $('#archivo_2').val('');
            $('#editarchivo_2').hide();
            $('#myDrop5').show();
        }
        if(id == 6){
            $('#archivo_3').val('');
            $('#editarchivo_3').hide();
            $('#myDrop6').show();
        }
        if(id == 7){
            $('#editservicio').hide();
            $('#myDrop7').show();
        }

        @foreach($tipos_fotos as $key=>$value)
        if(id == 8){
            $('#editCustom').hide();
            $('#foto_{{$value->id}}').val('');
            $('#myDrop-photo-{{$value->id}}').show();
        }
        @endforeach
    }

    $(document).ready(function(){
        if($("#valordnifrente").val()!=""){
            $("#myDrop1").hide();
            $("#editdnifrente").show();
        }else{
            $("#myDrop1").show();
            $("#editdnifrente").hide();
        }

        if($("#valordnidorso").val()!=""){
            $("#myDrop2").hide();
            $("#editdnidorso").show();
        }else{
            $("#myDrop2").show();
            $("#editdnidorso").hide();
        }

        if($("#valordniselfi").val()!=""){
            $("#myDrop3").hide();
            $("#editdniselfi").show();
        }else{
            $("#myDrop3").show();
            $("#editdniselfi").hide();
        }

        if($("#archivo_1").val()!=""){
            $("#myDrop4").hide();
            $("#editarchivo_1").show();
        }else{
            $("#myDrop4").show();
            $("#editarchivo_1").hide();
        }

        if($("#archivo_2").val()!=""){
            $("#myDrop5").hide();
            $("#editarchivo_2").show();
        }else{
            $("#myDrop5").show();
            $("#editarchivo_2").hide();
        }

        if($("#archivo_3").val()!=""){
            $("#myDrop6").hide();
            $("#editarchivo_3").show();
        }else{
            $("#myDrop6").show();
            $("#editarchivo_3").hide();
        }

        if($("#servicio").val()!=""){
            $("#myDrop7").hide();
            $("#editservicio").show();
        }else{
            $("#myDrop7").show();
            $("#editservicio").hide();
        }

        @foreach($tipos_fotos as $key=>$value)
            if($("#foto_{{$value->id}}").val()!=""){
                $("#myDrop-photo-{{$value->id}}").hide();
                $("#editCustom").show();
            }else{
                $("#myDrop-photo-{{$value->id}}").show();
                $("#editCustom").hide();
            }
        @endforeach

        if($("#name_pareja").val()!=""){
            $("#pareja").show();
        }else{
            $("#pareja").hide();
        }

        $("#pais_id_otra_residencia").change(function(){
             id = $("#pais_id_otra_residencia").val();
             if (id==60){
                $(".mensaje_rojo").show();
             }else{
                $(".mensaje_rojo").hide();
             }

             if (id!=1){
                $(".ide_tribu").show();
             }else{
                $(".ide_tribu").hide();
             }
        });

        $("#estado_civil_id").change(function(){
            id = $("#estado_civil_id").val();
            if (id==2){
                $("#pareja").show();
            }else{
                $("#pareja").hide();
            }
        });

        $("#cuit").val($("#nro").val());

        $( "#nro" ).keyup(function() {
            $("#cuit").val($("#nro").val())
        });

        // $( "#nro" ).blur(function() {
        //     nro =  $( "#nro" ).val();
        //     $.ajax({
        //         url: "https://sisma.apn.gob.ar/api/dni/"+nro,
        //         dataType: "jsonp",
        //         success:function(data){
        //             alert(data[0]['idPersona']);
        //         }
        //     });
        // });


        $('a').click(function(){
            if ($(this)[0].hash=="#finish"){
                $("#form").submit();
            }
        });

        $("#provinciaext").hide();
        $("#localidadext").hide();


        @if($data['personaexpuesta'] == 2)
            $("#cajaMotivo").show();
        @else
            $("#cajaMotivo").hide();
        @endif

        if($("#tieneagente").val()== 2){
            $("#cajaAgente").show();
        }else{
            $("#cajaAgente").hide();
        }

        if($("#pais_residencia").val() == 2){
            $("#pais_residencia").show();
            $(".ide_tribu").show();
        }else{
            $("#pais_residencia").hide();
        }

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
                // completarActividad(tiporelacionlaboral_id,caja_id);
        });

        $("#tieneagente").change(function(){
            var  tagente = $(this).val();

            if (tagente  == 1){
                $("#cajaAgente").hide();
            }
            if (tagente  == 2){
                $("#cajaAgente").show();
            }
        });

        $("#personaexpuesta").change(function(){
            var  personaexpuesta = $(this).val();
            if (personaexpuesta  == 2){
                $("#cajaMotivo").show();
            }
            if (personaexpuesta  == 1){
                $("#cajaMotivo").hide();
            }
        });

        $("#residenciaexterior").change(function(){
            var  residenciaexterior = $(this).val();
            $(".mensaje_rojo").hide();
            if (residenciaexterior  == 2){
                $("#pais_residencia").show();
            }
            if (residenciaexterior  == 1){
                $("#pais_residencia").hide();
                $(".ide_tribu").hide();
            }
        });

        $(function () { $('[data-toggle="tooltip"]').tooltip() })
        $(function () { $('[data-toggle="popover"]').popover({})})

        completarprovincias($("#direccion_pais_id").val());
        completarLocalidades($("#provincia_id").val());
        if ($("#localidad_id_previa").val() != "") {
            setTimeout(() => {
                    $("#localidad_id").val($("#localidad_id_previa").val());
            }, 1000);
        }

        if ($("#residenciaexterior").val() == "2") {
            $("#pais_residencia").show();
            id = $("#pais_id_otra_residencia").val();
             if (id==60){
                $(".mensaje_rojo").show();
             }else{
                $(".mensaje_rojo").hide();
             }

             if (id!=1){
                $(".ide_tribu").show();
             }else{
                $(".ide_tribu").hide();
             }
        }else{
            $("#pais_residencia").hide();
        }
    });

    let siguiente = $(
        ".tdi-mod2 .container #tdi-form fieldset .btns button.active.next"
    );
    let enviar = $(".tdi-mod2 .container #tdi-form fieldset .btns button.active.send");
    let volver = $(
        ".tdi-mod2 .container #tdi-form fieldset .btns button:not(.active.send)"
    );
    let fieldset = ".tdi-mod2 .container #tdi-form fieldset";
    let tipo = "";
    let texto = "";
    let suma = 0;

    $(volver).click(function () {
        let id_fieldset = $(this).parent().parent().attr("id");
        let id_fieldset_number = id_fieldset.slice(-1);
        $(this).parent().parent().css("display", "none");
        let fieldset_anterior =
        fieldset + "#preg" + (Number(id_fieldset_number) - 1);
        $(fieldset_anterior).css("display", "block");
    });


    $(siguiente).click(function () {
    let id_fieldset = $(this).parent().parent().attr("id");
    let id_fieldset_number = id_fieldset.slice(-1);
    if (Number(id_fieldset_number) < 9) {
      $(fieldset).css("display", "none");
      let fieldset_siguiente =
        fieldset + "#preg" + (Number(id_fieldset_number) + 1);
      $(fieldset_siguiente).css("display", "block");
    } else if (Number(id_fieldset_number) == 9) {
      let uno = parseInt($("input[name=uno]:checked", "#tdi-form").val());
      let dos = parseInt($("input[name=dos]:checked", "#tdi-form").val());
      let tres = parseInt($("input[name=tres]:checked", "#tdi-form").val());
      let cuatro = parseInt($("input[name=cuatro]:checked", "#tdi-form").val());
      let cinco = parseInt($("input[name=cinco]:checked", "#tdi-form").val());
      let seis = parseInt($("input[name=seis]:checked", "#tdi-form").val());
      let siete = parseInt($("input[name=siete]:checked", "#tdi-form").val());
      let ocho = parseInt($("input[name=ocho]:checked", "#tdi-form").val());
      let nueve = parseInt($("input[name=nueve]:checked", "#tdi-form").val());

      suma = uno + dos + tres + cuatro + cinco + seis + siete + ocho + nueve;

      $(fieldset).css("display", "none");
      let fieldset_siguiente = fieldset + "#datos";
      $(".tdi-mod2 .container #tdi-form h3").css("display", "none");
      if (suma <= 16) {
        tipo = "Conservador";
        texto =
          "Su prioridad es la seguridad en la recuperación de la inversión, aunque sea baja la rentabilidad. Preﬁere las inversiones con elevada liquidez, aunque esto pueda suponer una penalización o merma de rentabilidad.Preﬁere el corto plazo, si bien dependerá del objetivo o ﬁnalidad personal de la inversión.";
      } else if (suma >= 17 && suma <= 25) {
        tipo = "Moderado";
        texto =
          "Se conforma con alcanzar una rentabilidad efectiva que cubra la mayor parte de toda la inﬂación. También suele tener interés en obtener algún tipo de renta periódica, como por ejemplo dividendos, cupones, etc. No suele asumir riesgos innecesarios, pero está dispuesto a arriesgar parte de su capital cuando entiende que las condiciones son favorables. Diversiﬁca la cartera para moderar el riesgo.";
      } else if (suma > 25) {
        tipo = "Agresivo";
        texto =
          "En la combinación rentabilidad/riesgo, el inversor arriesgado da prioridad a la rentabilidad, aunque esto no signiﬁque que ignore el riesgo. Es muy importante que diversiﬁque sus inversiones para evitar que buena parte de las mismas dependan de unos pocos valores. Su principal motivación es la de obtener rentabilidades superiores a las del perﬁl moderado y conservador, a cambio de aceptar más cuota de riesgo.";
      } else {
        alert("no entré a ninguna");
      }

      $(".tdi-mod2 .container #tdi-form fieldset h4 span").text(tipo);
      $(".tdi-mod2 .container #tdi-form fieldset > p").text(texto);

      $(fieldset_siguiente).css("display", "block");

      saveDataTestInversor();

      $(".btn_ctn").show();
    }
  });


   Dropzone.autoDiscover = false;
   @foreach($tipos_fotos as $key=>$value)
    $("div#myDrop-photo-{{$value->id}}").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#foto_{{$value->id}}').val('');
        },
        url: "/dropzone-extended/{{$value->id}}",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            $('#foto_{{$value->id}}').val('true');
        },
    });
    @endforeach

    $("div#myDrop1").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#valordnifrente').val('');
        },
        url: "/dropzone1",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(1);
        },
    });
    $("div#myDrop2").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#valordnidorso').val('');
        },
        url: "/dropzone2",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(2);
        },
    });

    $("div#myDrop3").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#valordniselfi').val('');
        },
        url: "/dropzone3",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(3);
        },
    });
    $("div#myDrop4").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#archivo_1').val('');
        },
        url: "/dropzone4",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(4);
        },

    });
    $("div#myDrop5").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#archivo_2').val('');
        },
        url: "/dropzone5",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(5);
        },

    });
    $("div#myDrop6").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        removedfile: function (file) {
            file.previewElement.remove();
            $('#archivo_6').val('');
        },
        url: "/dropzone6",
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(6);
        },
    });

    $("div#myDrop7").dropzone({
        maxFiles: 1,
        addRemoveLinks: true,
        url: "/dropzone7",
        removedfile: function (file) {
            file.previewElement.remove();
            $('#servicio').val('');
        },
        method: "post",           //sets the form method to PUT,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (file, response) {
            actualizarvalor(7);
        },

        });

     function actualizarvalor(id){
           if(id == 1){
            $('#valordnifrente').val(1) ;
           }
           if(id == 2){
            $('#valordnidorso').val(2) ;
           }
           if(id == 3){
            $('#valordniselfi').val(3);
           }
           if(id == 4){
            $('#archivo_1').val(4) ;
           }
           if(id == 5){
            $('#archivo_2').val(5) ;
           }
           if(id == 6){
            $('#archivo_3').val(6) ;
           }
    }

</script>
@endpush

