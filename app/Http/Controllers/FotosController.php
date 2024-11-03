<?php

namespace App\Http\Controllers;

use App\Models\fotos;
use Illuminate\Http\Request;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Foto::all();
        return view('fotos.index', compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fotos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Foto::create($request->all());
        return redirect()->route('fotos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fotos $fotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fotos $fotos)
    {
        return view('fotos.edit', compact('foto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, fotos $fotos)
    {
        $foto ->update($request->all());
        return redirect()->route('fotos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fotos $fotos)
    {
        $foto->delete();
        return redirect()->route('fotos.index');
    }
}
