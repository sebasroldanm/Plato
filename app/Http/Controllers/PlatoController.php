<?php

namespace App\Http\Controllers;

use App\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $platos = Plato::all();
        return view('plato.index', compact('platos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->all();

        Plato::create([
            'nombre_plato' => $data['nombre_plato'],
            'descripcion' => $data['descripcion'],
            'precio' => $data['precio']
        ]);

        return redirect()->route('plato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function show(Plato $plato)
    {
        return view('comentario.create' , ['plato' => $plato]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function edit(Plato $plato)
    {
         return view('plato.edit' , ['plato' => $plato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function update( Plato $plato)
    {
        $data = request()->all();
        $plato->update($data);
        return redirect()->route('plato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plato  $plato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plato $plato)
    {
        $plato->delete();
        return redirect()->route('plato.index');
    }
}
