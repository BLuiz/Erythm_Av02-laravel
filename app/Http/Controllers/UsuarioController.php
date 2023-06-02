<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Categoria;

class UsuarioController extends Controller
{
    function index()
    {
        $usuarios = Usuario::All();
        //dd($usuarios);

        return view('UsuarioList')->with(['usuarios' => $usuarios]);
    }

    function create()
    {
        $categorias = Categoria::orderBy('nome')->get();
        return view('UsuarioForm')->with(['categorias' => $categorias]);
    }

    function store(Request $request)
    {
        $request->validate(
            Usuario::rules(),
            Usuario::messages()
        );

        $imagem = $request->file('imagem');
        $nome_arquivo = '';
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = 'imagem/';
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $nome_arquivo = $diretorio . $nome_arquivo;
        }

        Usuario::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'categoria_id' => $request->categoria_id,
            'imagem' => $nome_arquivo,
        ]);

        return \redirect()->action(
            'App\Http\Controllers\UsuarioController@index'
        );
    }

    function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $categorias = Categoria::orderBy('nome')->get();
        //dd($usuario);

        return view('UsuarioForm')->with([
            'usuario' => $usuario,
            'categorias' => $categorias,
        ]);
    }

    function show($id)
    {
        $usuario = Usuario::findOrFail($id);
        $categorias = Categoria::orderBy('nome')->get();
        //dd($usuario);

        return view('UsuarioForm')->with([
            'usuario' => $usuario,
            'categorias' => $categorias,
        ]);
    }

    function update(Request $request)
    {
        $request->validate(
            Usuario::rules(),
            Usuario::messages()
        );

        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'categoria_id' => $request->categoria_id,
        ];

        $imagem = $request->file('imagem');
        if ($imagem) {
            $nome_arquivo = date('YmdHis') . '.' . $imagem->getClientOriginalExtension();
            $diretorio = 'imagem/';
            $imagem->storeAs($diretorio, $nome_arquivo, 'public');
            $data['imagem'] = $diretorio . $nome_arquivo;
        }

        Usuario::updateOrCreate(
            ['id' => $request->id],
            $data
        );

        return \redirect()->action(
            'App\Http\Controllers\UsuarioController@index'
        );
    }

    function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->delete();
        return \redirect()->action(
            'App\Http\Controllers\UsuarioController@index'
        );
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $usuarios = Usuario::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $usuarios = Usuario::all();
        }

        return view('UsuarioList')->with(['usuarios' => $usuarios]);
    }
}
?>
