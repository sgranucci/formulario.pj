<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Http\Requests\ActividadStoreRequest;
use App\Http\Requests\ActividadUpdateRequest;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    
    public function index(Request $request)
    {
        $actividades = Actividad::all();
        return view('admin.actividades.index', compact('actividades'));
    }

    public function create(Request $request)
    {
        return view('admin.actividades.create');
    }

    public function store(ActividadStoreRequest $request)
    {
        $name = Actividad::create($request->all());

        return redirect()->route('actividades.index');
    }

    public function show(Request $request, Actividad $actividad)
    {
        return view('admin.actividades.show', compact('actividad'));
    }

    public function edit(Request $request, Actividad $actividad)
    {
        return view('admin.actividades.edit', compact('actividad'));
    }

    
    public function update(ActividadUpdateRequest $request, Actividad $actividad)
    {
        $actividad->update([]);

        
        return redirect()->route('actividades.index');
    }

    
    public function destroy(Request $request, Actividad $actividad)
    {
        $actividad->delete();

        return redirect()->route('actividades.index');
    }
}
