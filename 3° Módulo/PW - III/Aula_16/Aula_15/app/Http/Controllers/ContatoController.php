<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::all();
        //$contatos = Contato::where('email','=','maria@gmail.com')->get();
        
        return view('contato',compact('contatos'));

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
        $contato = new Contato();

        $contato ->Nome = $request->txNome;        
        $contato ->Tel = $request->txTelefone;
        $contato ->Email = $request->txEmail;

        $contato->save();

        return redirect('/contato');
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
    public function edit($idContato)
    {
        $contato = Contato::where('idContato','=',$idContato)->first();        
        return view('edit.contato-editar',compact('contato')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idContato)
    {
    $contato = Contato::where('idContato', $idContato)->first();
    $contato ->Nome = $request->txNome;        
    $contato ->Tel = $request->txTelefone;
    $contato ->Email = $request->txEmail;
   

    $contato->save();

    return redirect('/contato');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idContato)
    {
        $contato = new Contato();
        $contato->where('idContato','=',$idContato)->delete();
        return redirect('/contato');
    }
}
