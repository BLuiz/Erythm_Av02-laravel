<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    function index(){
        $pedidos = Pedido::All();

        return view('PedidoList')->with(['pedidos' => $pedidos]);
    }

    function create(){
        return view('PedidoForm');
    }

    function store(Request $request){
        $request->validate(
            Pedido::rules(),
            Pedido::messages()
        );

        Pedido::create([
            'cliente'   => $request->cliente,
            'endereco'  => $request->endereco,
            'telefone'  => $request->telefone
        ]);

        return \redirect()->action('App\Http\Controllers\PedidoController@index');
    }

    function edit($id){
        $pedido = Pedido::findOrFail($id);

        return view('PedidoForm')->with([
            'pedido' => $pedido
        ]);
    }

    function show($id){
        $pedido = Pedido::findOrFail($id);

        return view('PedidoForm')->with([
            'pedido' => $pedido
        ]);
    }

    function update(Request $request){
        $request->validate(
            Pedido::rules(),
            Pedido::messages()
        );

        $data = [
            'cliente'   => $request->cliente,
            'endereco'  => $request->endereco,
            'telefone'  => $request->telefone
        ];

        Pedido::updateOrCreate(['id' => $request->id], $data);

        return \redirect()->action('App\Http\Controllers\PedidoController@index');
    }

    function destroy($id){
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return \redirect()->action('App\Http\Controllers\PedidoController@index');
    }

    function search(Request $request)
    {
        if ($request->campo == 'nome') {
            $pedidos = Pedido::where(
                'nome',
                'like',
                '%' . $request->valor . '%'
            )->get();
        } else {
            $pedidos = Pedido::all();
        }

        return view('PedidoList')->with(['pedidos' => $pedidos]);
    }
}
?>
