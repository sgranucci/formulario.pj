<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoDocumentoStoreRequest;
use App\Http\Requests\TipoDocumentoUpdateRequest;
use App\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    
    public function index(Request $request)
    {
        $tipoDocumentos = TipoDocumento::all();

        return view('admin.tipoDocumentos.index', compact('tipoDocumentos'));
    }

    public function create(Request $request)
    {
        return view('admin.tipoDocumentos.create');
    }

    public function store(TipoDocumentoStoreRequest $request)
    {
        $name = TipoDocumento::create($request->all());

        return redirect()->route('tipodocumentos.index');
    }

    public function show(Request $request, TipoDocumento $tipoDocumento)
    {
        return view('admin.tipoDocumentos.show', compact('tipoDocumento'));
    }

    public function edit(Request $request, TipoDocumento $tipoDocumento)
    {
        return view('admin.tipoDocumentos.edit', compact('tipoDocumento'));
    }

    
    public function update(TipoDocumentoUpdateRequest $request, TipoDocumento $tipoDocumento)
    {
        $tipoDocumento->update([]);

        return redirect()->route('tipoDocumentos.index');
    }

    public function destroy(Request $request, TipoDocumento $TipoDocumento)
    {
        $TipoDocumento->delete();

        return redirect()->route('tipoDocumentos.index');
    }
}
