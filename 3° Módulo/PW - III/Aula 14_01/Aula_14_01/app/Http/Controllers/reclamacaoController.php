<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reclamacao;
use App\Laboratorio;
use Illuminate\Support\Facades\DB;

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
        
        // // Filtros
        // $filtroLab = $request->input('filtroLab');
        // if ($filtroLab) {
        //     $reclamacao = $reclamacao->where('idLab', $filtroLab);
        // }

        // $reclamacaoPorLab = DB::table('tbReclamacao')
        // ->join('tbLab', 'tbReclamacao.idLab', '=', 'tbLab.idLab')
        // ->select('tbLab.Lab', DB::raw('count(tbReclamacao.idRec) as total'))
        // ->groupBy('tbLab.Lab')
        // ->get();

        

        $laboratorio = laboratorio::all();
        
        return view('reclamacao', compact('reclamacao', 'laboratorio'));

        
    }

    public function recAll() {
        $reclamacao = reclamacao::all();
        return $reclamacao;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reclamacao = reclamacao::all();
        $laboratorio = laboratorio::all();

        return view('reclamacao', compact('reclamacao', 'laboratorio'));
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
        $reclamacao->idLab = $request->lab;        
        $reclamacao ->Titulo = $request->txTitulo;
        $reclamacao ->Descricao = $request->txDescricao;
        $reclamacao ->dtCriacao  = $request->txdtCriacao ;

        $reclamacao->save();

        return redirect('/reclamacao');
    }

    /**
     * Display the specified resource.
     */
    public function show(reclamacao $reclamacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(reclamacao $reclamacao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, reclamacao $reclamacao)
    {
        //
    }
    public function destroy($idRec)
    {
        $reclamacao = new reclamacao();
        $reclamacao->where('idRec','=',$idRec)->delete();
        return redirect('/reclamacao');
    }

    public function allreclamacao()
    {
        $reclamacao = reclamacao::all();
        return $reclamacao;
    }
}
