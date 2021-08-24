<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigenFondoStoreRequest;
use App\Http\Requests\OrigenFondoUpdateRequest;
use App\OrigenFondo;
use Illuminate\Http\Request;

class OrigenFondoController extends Controller
{
    public function index(Request $request)
    {
        $origenFondos = OrigenFondo::all();

        return view('admin.origenFondos.index', compact('origenFondos'));
    }

    public function create(Request $request)
    {
        return view('admin.origenFondos.create');
    }

    
    public function store(OrigenFondoStoreRequest $request)
    {
        $name = OrigenFondo::create($request->all());

        return redirect()->route('origenfondos.index');
    }

    public function show(Request $request, OrigenFondo $origenFondo)
    {
        return view('admin.origenFondos.show', compact('origenFondo'));
    }

    public function edit(Request $request, OrigenFondo $origenFondo)
    {
        return view('admin.origenFondos.edit', compact('origenFondo'));
    }

    public function update(OrigenFondoUpdateRequest $request, OrigenFondo $origenFondo)
    {
        $origenFondo->update([]);

        return redirect()->route('origenfondos.index');
    }

    public function destroy(Request $request, OrigenFondo $origenFondo)
    {
        $origenFondo->delete();

        return redirect()->route('origenfondos.index');
    }
}
