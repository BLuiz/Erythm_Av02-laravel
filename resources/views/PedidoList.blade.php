@extends("base.app")
@section('conteudo')

@section('tituloPagina', 'Listagem de Pedidos')
<h1>Listagem de Pedidos</h1>

<form action="{{ route('pedido.search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <select name="campo" class="form-select">
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
            </select>
        </div>

        <div class="col-4">
            <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>

        <div class="col-6">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a class="btn btn-success" href='{{ action("App\Http\Controllers\PedidoController@create") }}'>
                <i class="fa-solid fa-plus"></i> Cadastrar
            </a>
        </div>
    </div>
</form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cliente</th>
            <th scope="col">Endereço</th>
            <th scope="col">Telefone</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $item)
            <tr>
                <td scope='row'>{{ $item->id }}</td>
                <td>{{ $item->cliente }}</td>
                <td>{{ $item->endereco }}</td>
                <td>{{ $item->telefone }}</td>
                <td> <!--Editar-->
                    <a href="{{ action('App\Http\Controllers\PedidoController@edit', $item->id) }}">
                        <i class='fa-solid fa-pen-to-square' style='color:darkgray;'></i>
                    </a>
                </td>
                <td> <!--Excluir-->
                    <form method="POST" action="{{ action('App\Http\Controllers\PedidoController@destroy', $item->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset;'>
                            <i class='fa-solid fa-trash' style='color:red;'></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
