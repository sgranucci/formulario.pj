<div class="card">
    <div class="card-header bg-primary text-white header-elements-inline">
        <h6 class="card-title">Datos personales</h6>
        <div class="header-elements">
            <div class="list-icons">
                <button type="button" wire:click="update()" class="btn bg-blue-400 text-white-400 border-white-400">
                    <i class="icon-floppy-disk mr-2"></i>Actualizar
                </button>
            </div>
        </div>
    </div>
    <div class="car-body ">
        <div class="container">
            <div class="row mt-2">               
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input type="text" name="name" wire:model="name" class="form-control" placeholder="Nombre">
                        @if ($errors->has('name'))
                            <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group" wire:ignore>
                    <label>Email:</label> 
                        <input type="text" name="email" wire:model="email" class="form-control" placeholder="">
                        @if ($errors->has('email'))
                            <small class="text-danger"><b>{{ $errors->first('name') }}</b></small>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <label>Fecha de cumpleaños:</label>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group" wire:ignore>
                                <select name="birth-day" wire:model="birth-day" data-placeholder="Día" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group"wire:ignore>
                                <select name="birth-month" wire:model="birth-month" data-placeholder="Mes" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group" wire:ignore>
                                <select name="birth-year" wire:model="birth-year" data-placeholder="Año" class="form-control form-control-select2" data-fouc>
                                    <option></option>
                                    @for ($i = (\Carbon\Carbon::now()->year - 18); $i > (\Carbon\Carbon::now()->year - 118); $i--)
                                        {{$i}}
                                        <option value="{{$i}}">{{$i}}</option>                                        
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>             
                </div>         
            </div>
        
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group" wire:ignore>
                        <label>Tipo Documento (DNI | CI | Pasaporte): </label>
                        <select name="tipo_docuemnto_id" wire:model='tipo_documento_id' data-placeholder="Tipo Documento" class="form-control form-control-select2" data-fouc>
                        <option>{{"a"}}</option> 
                            @foreach ($tipo_documentos as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>        
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-md-3" >
                    <div class="form-group" wire:ignore>
                        <label>Estado Civil: </label>
                        <select name="estado_civil_id" wire:model='estado_civil_id' data-placeholder="Estado civil" class="form-control form-control-select2" data-fouc>
                            <option></option> 
                            @foreach ($estado_civiles as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>        
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group" wire:ignore>
                        <label>Genero: </label>
                        <select name="genero_id"  class="form-control form-control-select2" data-fouc>
                        <option value="{{ $genero_id }}" selected>{{ $genero_id }}</option> 
                            <@foreach ($generos as $item => $value)
                                <option value="{{$item}}">{{$value}}</option>        
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Celular:</label>
                        <input type="text" name="celular" wire:model='celular' class="form-control" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999">
                    </div>
                </div>
            </div>
        </div>
    </div>   


</div>