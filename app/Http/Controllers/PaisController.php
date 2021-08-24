<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaisStoreRequest;
use App\Http\Requests\PaisUpdateRequest;
use App\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    
    public function index(Request $request)
    {
        $paises = Pais::all();

        return view('admin.paises.index', compact('paises'));
    }

   
    public function create(Request $request)
    {
        return view('admin.paises.create');
    }

    public function store(PaisStoreRequest $request)
    {
        $name = Pais::create($request->all());

        return redirect()->route('paises.index');
    }

    public function show(Request $request, Pai $pai)
    {
        return view('admin.paises.show', compact('pais'));
    }

    public function edit(Request $request, Pai $pai)
    {
        return view('admin.paises.edit', compact('pais'));
    }

    public function update(PaisUpdateRequest $request, Pai $pai)
    {
        $pais->update([]);

        return redirect()->route('paises.index');
    }

    public function destroy(Request $request, Pai $pai)
    {
        $pais->delete();

        return redirect()->route('paises.index');
    }
}
