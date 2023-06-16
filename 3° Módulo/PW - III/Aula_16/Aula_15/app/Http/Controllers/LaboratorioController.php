<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;
use App\Contato;

class laboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::all();
        
        return view('laboratorio',compact('laboratorios'));
       
    }

    public function laboratorioAll() {
        $laboratorio = Laboratorio::all();
        return $laboratorio;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $laboratorio = new Laboratorio();

        $laboratorio ->Lab = $request->txLab;        

        $laboratorio->save();

        return redirect('/laboratorio');
    }

     /**
     * Display the specified resource.
     */
    public function show(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laboratorio $laboratorio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idLab)
    {
        $laboratorio = new Laboratorio();
        $laboratorio->where('idLab','=',$idLab)->delete();
        return redirect('/laboratorio');
    }
}
