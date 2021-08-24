
    <div class="col-md-3">
        <div class="form-group" wire:ignore>
            <label>País donde radica actualmente: </label>
            <select name="direccion_pais_id" wire:model:"direccion_pais_id" data-placeholder="País" class="form-control form-control-select2" data-fouc> 
                @foreach ($paises as $item)
                    @if($direccion_pais_id == $item or $direccion_pais_id == "")
                        <option value="{{$item['id']}}" selected>{{$item['name']}}</option>
                    @endif
                    <option value="{{$item['id']}}">{{$item['name']}}</option>        
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Provincia</label>
            <select name="provincia_id" wire:model:"provincia_id" data-placeholder="Provincia" class="form-control form-control-select2" data-fouc>
                <option></option> 
                @foreach ($provincias as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>        
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Localidad: </label>
            <select name="localidad_id" wire:model:"localidad_id" data-placeholder="Localidad" class="form-control form-control-select2" data-fouc>
                <option></option> 
                <@foreach ($localidades as $item => $value)
                    <option value="{{$item}}">{{$value}}</option>        
                @endforeach
            </select>
        </div>
    </div>  

