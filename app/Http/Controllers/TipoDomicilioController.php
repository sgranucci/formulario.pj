<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoDomicilioStoreRequest;
use App\Http\Requests\TipoDomicilioUpdateRequest;
use App\TipoDomicilio;
use Illuminate\Http\Request;

class TipoDomicilioController extends Controller
{
    
    public function index(Request $request)
    {
        $tipoDomicilios = TipoDomicilio::all();

        return view('admin.tipoDomicilios.index', compact('tipoDomicilios'));
    }

    
    public function create(Request $request)
    {
        return view('admin.tipoDomicilios.create');
    }

    public function store(TipoDomicilioStoreRequest $request)
    {
        $name = TipoDomicilio::create($request->all());

        return redirect()->route('tipoDomicilios.index');
    }

    public function show(Request $request, TipoDomicilio $tipoDomicilio)
    {
        return view('admin.tipoDomicilios.show', compact('tipoDomicilio'));
    }

    public function edit(Request $request, TipoDomicilio $tipoDomicilio)
    {
        return view('admin.tipoDomicilios.edit', compact('tipoDomicilio'));
    }

    public function update(TipoDomicilioUpdateRequest $request, TipoDomicilio $tipoDomicilio)
    {
        $tipoDomicilio->update([]);

        return redirect()->route('tipoDomicilios.index');
    }

    
    public function destroy(Request $request, TipoDomicilio $tipoDomicilio)
    {
        $tipoDomicilio->delete();

        return redirect()->route('tipoDomicilios.index');
    }
}
