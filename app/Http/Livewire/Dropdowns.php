<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Pais;
use App\Provincia;
use App\Localidad;

class Dropdowns extends Component
{
    public $paises;
    public $direccion_pais_id=1;
    public $provincias;
   

    public function mount($direccion_pais_id)
    {
        $this->direccion_pais=$direccion_pais_id;
    }
    
    public function render()
    {
        $this->paises         = Pais::select('id','name')->get()->toArray();
        if(!empty($this->direccion_pais_id)) {
            $this->provincias = Provincia::where('pais_id', $this->direccion_pais_id)->get()->toArray();
        }
        //dd($this->paises);
        // $this->provincias    = Provincia::all()->pluck('name','id');
        // $this->provincias    = Provincia::all()->pluck('name','id');
        
        // if(!empty($this->pais)) {
        //     $this->provincias = Provincia::where('pais_id', $this->pais)->get();
        // }
        // if(!empty($this->provincias)) {
        //     $this->localidades = Localidad::where('provincia_id', $this->provincia)->get();
        // }
        return view('livewire.dropdowns');    
        
    }
}
