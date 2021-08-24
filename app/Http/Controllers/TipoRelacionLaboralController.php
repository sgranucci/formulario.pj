<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoRelacionLaboralStoreRequest;
use App\Http\Requests\TipoRelacionLaboralUpdateRequest;
use App\TipoRelacionLaboral;
use Illuminate\Http\Request;

class TipoRelacionLaboralController extends Controller
{
    
    public function index(Request $request)
    {
        $tipoRelacionLaborales = TipoRelacionLaboral::all();

        return view('admin.tipoRelacionLaborales.index', compact('tipoRelacionLaborales'));
    }

    public function create(Request $request)
    {
        return view('admin.tipoRelacionLaborales.create');
    }

    public function store(TipoRelacionLaboralStoreRequest $request)
    {
        $name = TipoRelacionLaborales::create($request->all());

        return redirect()->route('tipoRelacionLaborales.index');
    }

    public function show(Request $request, TipoRelacionLaboral $tipoRelacionLaboral)
    {
        return view('admin.tipoRelacionLaborales.show', compact('tipoRelacionLaboral'));
    }

    public function edit(Request $request, TipoRelacionLaboral $tipoRelacionLaboral)
    {
        return view('admin.tipoRelacionLaborales.edit', compact('tipoRelacionLaboral'));
    }

    
    public function update(TipoRelacionLaboralUpdateRequest $request, TipoRelacionLaboral $tipoRelacionLaboral)
    {
        $tipoRelacionLaboral->update([]);

        return redirect()->route('tipoRelacionLaborales.index');
    }

    public function destroy(Request $request, TipoRelacionLaboral $tipoRelacionLaboral)
    {
        $tipoRelacionLaboral->delete();

        return redirect()->route('tipoRelacionLaborales.index');
    }
}
