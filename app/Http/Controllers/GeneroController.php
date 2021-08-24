<?php

namespace App\Http\Controllers;

use App\Genero;
use App\Http\Requests\GeneroStoreRequest;
use App\Http\Requests\GeneroUpdateRequest;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    
    public function index(Request $request)
    {
        $generos = Genero::all();

        return view('admin.generos.index', compact('generos'));
    }

    
    public function create(Request $request)
    {
        return view('admin.generos.create');
    }

    public function store(GeneroStoreRequest $request)
    {
        $name = Genero::create($request->all());

        return redirect()->route('generos.index');
    }

    public function show(Request $request, Genero $genero)
    {
        return view('admin.generos.show', compact('genero'));
    }

    public function edit(Request $request, Genero $genero)
    {
        return view('admin.generos.edit', compact('genero'));
    }

    public function update(GeneroUpdateRequest $request, Genero $genero)
    {
        $genero->update([]);

        return redirect()->route('generos.index');
    }

    public function destroy(Request $request, Genero $genero)
    {
        $genero->delete();

        return redirect()->route('generos.index');
    }
}
