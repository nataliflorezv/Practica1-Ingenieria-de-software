<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Control;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controls = Control::all(); 
        return view('controls.consulta')->with('controls',$controls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controls.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $controls = new Control();

        $controls->Fecha = $request->get('Fecha');
        $controls->Minimo1 = $request->get('Minimo1');
        $controls->Maximo1 = $request->get('Maximo1');
        $controls->Resultado1 = $request->get('Resultado1');
        $controls->Minimo2 = $request->get('Minimo2');
        $controls->Maximo2 = $request->get('Maximo2');
        $controls->Resultado2 = $request->get('Resultado2');

        $controls->save();

        return redirect('/controls');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
