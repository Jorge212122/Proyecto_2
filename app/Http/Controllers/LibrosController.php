<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use App\Http\Requests\LibroRequest;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registro = Libro::orderByDesc('id')->get();
        return view('libro.index', compact('registro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibroRequest $request)
    {
        $datos = $request->validated();
        $libro = Libro::create($datos);
        return redirect()->route('libro.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libro.show', ['libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libro.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LibroRequest $request, Libro $libro)
    {
        $datos = $request->validated();
        $libro->update($datos);
        return redirect()->route('libro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
