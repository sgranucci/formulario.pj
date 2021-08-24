<?php

namespace App\Http\Controllers;

use App\EstadoCivil;
use App\Http\Requests\EstadoCivilStoreRequest;
use App\Http\Requests\EstadoCivilUpdateRequest;
use Illuminate\Http\Request;

class EstadoCivilController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estadoCiviles = EstadoCivil::all();

        return view('admin.estadociviles.index', compact('estadoCiviles'));
    }

    public function create(Request $request)
    {
        return view('admin.estadociviles.create');
    }

    public function store(EstadoCivilStoreRequest $request)
    {
        $name = EstadoCivil::create($request->all());

        return redirect()->route('estadociviles.index');
    }

    public function show(Request $request, EstadoCivil $estadoCivil)
    {
        return view('admin.estadociviles.show', compact('estadocivil'));
    }

    
    public function edit(Request $request, EstadoCivil $estadoCivil)
    {
        return view('admin.estadociviles.edit', compact('estadocivil'));
    }

    public function update(EstadoCivilUpdateRequest $request, EstadoCivil $estadoCivil)
    {
        $estadocivil->update([]);

        return redirect()->route('estadociviles.index');
    }

    public function destroy(Request $request, EstadoCivil $estadoCivil)
    {
        $estadocivil->delete();

        return redirect()->route('estadociviles.index');
    }
}
