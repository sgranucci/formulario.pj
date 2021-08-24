<?php

namespace App\Http\Livewire;
use App\User;
use App\TipoDocumento;
use App\EstadoCivil;
use App\Genero;
use Auth;
use Livewire\Component;

class Datospersonales extends Component
{
    public $data, $user, $name, $last_name, $email, $celular, $birth_day, $birth_month, $birth_year, $pais_id, $estado_civil_id, $genero_id, $selected_id, $tipo_documento_id;

    public function render()
    {
        $this->data     = User::find(Auth()->user()->id);
        $this->name      = $this->data->name;
        $this->email     = $this->data->email;
        $this->celular   = $this->data->celular;
        $this->genero_id = $this->data->genero_id;
        
        return view('livewire.datospersonales',[
            'tipo_documentos'       => TipoDocumento::all()->pluck('name','id'),
            'estado_civiles'        => EstadoCivil::all()->pluck('name','id'),
            'generos'               => Genero::all()->pluck('name','id')
        ]);
    }

    public function update()
    {
        $this->validate([
            'name'                  => 'required|min:5',
            'email'                 => 'required|email:rfc,dns',
            'celular'               => 'min:10',
            'estado_civil_id'       => 'required'
        ]);
        $user = User::findorfail(Auth()->user()->id);
        
        $user->update([
            'name'              => $this->name,
            'email'             => $this->email,
            'celular'           => $this->celular
        ]);
    }
}


// class Contact extends Component
// {
//     public $data, $name, $email, $selected_id;
//     public $updateMode = false;
//     public function render()
//     {
//         $this->data = Contactos::all();
//         return view('livewire.contact');
//     }
//     private function resetInput()
//     {
//         $this->name = null;
//         $this->email = null;
//     }
//     public function store()
//     {
//         $this->validate([
//             'name' => 'required|min:5',
//             'email' => 'required|email:rfc,dns'
//         ]);
//         Contactos::create([
//             'name' => $this->name,
//             'email' => $this->email
//         ]);
//         $this->resetInput();
//     }
//     public function edit($id)
//     {
//         $record = Contactos::findOrFail($id);
//         $this->selected_id = $id;
//         $this->name = $record->name;
//         $this->email = $record->email;
//         $this->updateMode = true;
//     }
//     public function update()
//     {
//         $this->validate([
//             'selected_id' => 'required|numeric',
//             'name' => 'required|min:5',
//             'email' => 'required|email:rfc,dns'
//         ]);
//         if ($this->selected_id) {
//             $record = Contactos::find($this->selected_id);
//             $record->update([
//                 'name' => $this->name,
//                 'email' => $this->email
//             ]);
//             $this->resetInput();
//             $this->updateMode = false;
//         }
//     }
//     public function destroy($id)
//     {
//         if ($id) {
//             $record = Contactos::where('id', $id);
//             $record->delete();
//         }
//     }
// }