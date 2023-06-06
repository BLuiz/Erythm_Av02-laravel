@extends("base.app")
@section('conteudo')

@section('tituloPagina', 'Listagem de Discos')
<h1>Listagem de Discos</h1>

<form action="{{ route('disco.search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <select name="campo" class="form-select">
                <option value="nome">Nome</option>
                <option value="ano">Ano</option>
            </select>
        </div>

        <div class="col-4">
            <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>

        <div class="col-6">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a class="btn btn-success" href='{{ action("App\Http\Controllers\DiscoController@create") }}'>
                <i class="fa-solid fa-plus"></i> Cadastrar
            </a>
        </div>
    </div>
</form>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Artista</th>
            <th scope="col">Ano</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($discos as $item)
            <tr>
                <td scope='row'>{{ $item->id }}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->valor }}</td>
                <td>{{ $item->artista }}</td>
                <td>{{ $item->ano }}</td>

                <!--
                @php
                    $nome_imagem = !empty($item->imagem) ? $item->imagem : 'sem_imagem.jpg';
                @endphp
                <td>
                    <img src="/storage/{{ $nome_imagem }}" width="100px" class="img-thumbnail" />
                </td>
                -->

                <td> <!--Editar-->
                    <a href="{{ action('App\Http\Controllers\DiscoController@edit', $item->id) }}">
                        <i class='fa-solid fa-pen-to-square' style='color:darkgray;'></i>
                    </a>
                </td>
                <td>  <!--Excluir-->
                    <form method="POST" action="{{ action('App\Http\Controllers\DiscoController@destroy', $item->id) }}">
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
