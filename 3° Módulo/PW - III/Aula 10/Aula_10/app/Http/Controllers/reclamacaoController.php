<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reclamacao;

class reclamacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamacao = reclamacao::all();
        //$contatos = Contato::where('email','=','maria@gmail.com')->get();
        
        return view('reclamacao',compact('reclamacao'));

        /*
        foreach($contatos as $c){
            echo $c->nome;
        }
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamacao = new reclamacao();

        $reclamacao ->Pc = $request->txPc;        
        $reclamacao ->Titulo = $request->txTitulo;
        $reclamacao ->Descricao = $request->txDescricao;

        $reclamacao->save();

        return redirect('/reclamacao');
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
    public function destroy($idRec)
    {
        $reclamacao = new reclamacao();
        $reclamacao->where('idRec','=',$idRec)->delete();
        return redirect('/reclamacao');
    }
}
