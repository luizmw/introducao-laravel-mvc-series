<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        //busca todas as séries
        // $series = Serie::all();
        //ordenando por nome em ordem crescente
        $series = Serie::query()->orderBy('nome')->get();

        //dados default
        // $series = [
        //     'Dark',
        //     'Black Mirror',
        //     'Altered Carbon',
        //     'Travelers',
        // ];

        /*o que está como string é o nome acessado pela view, e a variavel, o valor associado. Permite passar qualquer tipo de dado, é mais flexível, permitindo controlar o nome da variável para acesso na view*/
        // return view('listar_series', ['series' => $series]);
        /*compacta e retorna em chave/valo, onde chave e valor tem o mesmo nome, nesse caso, "serie"*/

        return view('series.index', compact('series'));

        //Outra forma de passar dados para a view é através do with (chave/valor)
        // return view('listar_series')->with('series', $series);

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
