<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Index;
use App\Laboratorio;
use App\QuemSomos;
use App\Reclamacoes;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        // Quantidade de rec por lab
        $reclamacaoPorLab = DB::table('tbReclamacao')
        ->join('tbLab', 'tbReclamacao.idLab', '=', 'tbLab.idLab')
        ->select('tbLab.Lab', DB::raw('count(tbReclamacao.idRec) as total'))
        ->groupBy('tbLab.Lab')
        ->get();

            // dd($reclamacoesPorLab);

        return view('grafico', compact('reclamacaoPorLab'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }
}
