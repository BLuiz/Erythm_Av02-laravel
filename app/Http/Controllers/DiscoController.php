<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disco;

class DiscoController extends Controller
{
    function index(){
        $discos = Disco::All();

        return view('DiscoList')->with(['discos' => $discos]);
    }

    function create(){
        return view('DiscoForm');
    }

    function store(Request $request){
        $request->validate(
            Disco::rules(),
            Disco::messages()
        );

        Disco::create([
            'nome'      => $request->nome,
            'valor'     => $request->valor,
            'artista'   => $request->artista,
            'ano'       => $request->ano
        ]);

        return \redirect()->action('App\Http\Controllers\DiscoController@index');
    }

    function edit($id){
        $disco = Disco::findOrFail($id);

        return view('DiscoForm')->with([
            'disco' => $disco
        ]);
    }

    function show($id){
        $disco = Disco::findOrFail($id);

        return view('DiscoForm')->with([
            'disco' => $disco
        ]);
    }

    function update(Request $request){
        $request->validate(
            Disco::rules(),
            Disco::messages()
        );

        $data = [
            'nome'      => $request->nome,
            'valor'     => $request->valor,
            'artista'   => $request->artista,
            'ano'       => $request->ano
        ];

        Disco::updateOrCreate(['id' => $request->id], $data);

        return \redirect()->action('App\Http\Controllers\DiscoController@index');
    }

    function destroy($id){
        $disco = Disco::findOrFail($id);
        $disco->delete();

        return \redirect()->action('App\Http\Controllers\DiscoController@index');
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $discos = Disco::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $discos = Disco::all();
        }

        return view('DiscoList')->with(['discos' => $discos]);
    }
}
?>
