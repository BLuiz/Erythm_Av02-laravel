<!--
include "../controller/UsuarioController.php";
include '../Util.class.php';

Util::verificar();


$usuario = new UsuarioController();

if(!empty($_POST['id'])){
    $usuario->update($_POST);
    header("location: UsuarioList.php");
}
elseif(!empty($_POST)){
    $usuario->salvar($_POST);
    header("location: UsuarioList.php");
}

if(!empty($_GET['id'])){
    $data = $usuario->buscar($_GET['id']);
}
-->

@extends('base.app');

@section('conteudo')

@php
    if (!empty($usuario->id)) {
        $route = route('usuario.update', $usuario->id);
    } else {
        $route = route('usuario.store');
    }
@endphp

@section('fUsuario', 'Formulário Usuário')
<h1>Formulário Usuário</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($usuario->id))
                @method('PUT')
            @endif



            <input type="hidden" name="id" value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($usuario->id)) {{ $usuario->id }} @else {{ '' }} @endif" /><br>

            <div class="col-3">
                <label class="form-label">Nome</label><br>
                <input type="text" class="form-control" name="nome"value="@if (!empty(old('nome'))) {{ old('nome') }}
                @elseif(!empty($usuario->nome)) {{ $usuario->nome }}@else {{ '' }} @endif" /><br>
            </div>

            <div class="col-3">
                <label class="form-label">Telefone</label><br>
                <input type="text" class="form-control" name="telefone"value="@if (!empty(old('telefone'))) {{ old('telefone') }}
                @elseif(!empty($usuario->telefone)) {{ $usuario->telefone }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-3">
                <label class="form-label">E-mail</label><br>
                <input type="email" class="form-control" name="email"value="@if (!empty(old('email'))) {{ old('email') }}
                @elseif(!empty($usuario->email)) {{ $usuario->email }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-3">
                <label class="form-label">Categoria</label><br>
                <select name="categoria_id" class="form-select">
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                </select>
            </div>

            @php
                $nome_imagem = !empty($usuario->imagem) ? $usuario->imagem : 'sem_imagem.jpg';
            @endphp

            <div class="col-6">
                <br>
                <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="300px" />
                <br><br>
                <input type="file" class="form-control" name="imagem" /><br>
            </div>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href='{{ route('usuario.index') }}' class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>Voltar</a> <br><br>
        </form>
    </div>

</div>
</div>
@endsection









        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($usuario->id))
                @method('PUT')
            @endif
            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($usuario->id)) {{ $usuario->id }} @else {{ '' }} @endif">

            <div class="col-3">
                <label class="form-label">Nome: </label><br>
                <input class="form-control" type="text" name="nome"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($usuario->nome)) {{ $usuario->nome }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-6">
                <label class="form-label">Telefone: </label><br>
                <input class="form-control" type="text" name="telefone"
                    value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($usuario->telefone)) {{ $usuario->telefone }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-6">
                <label class="form-label">E-mail: </label><br>
                <input class="form-control" type="email" name="email"
                    value="@if (!empty(old('email'))) {{ old('email') }} @elseif(!empty($usuario->email)) {{ $usuario->email }} @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-6">
                <label class="form-label">Categoria: </label><br>
                <select name="categoria_id" class="form-select">
                    @foreach ($categorias as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                </select><br>
            </div>

            @php
                $nome_imagem = !empty($usuario->imagem) ? $usuario->imagem : 'sem_foto.jpg';
            @endphp

            <div class="col-6">
                <label class="form-label">Imagem: </label><br>
                <input class="form-control" type="file" name="imagem" /><br>
                <img src="/storage/{{ $nome_imagem }}" width="300px">
            </div>

            <br>

            <button class="btn btn-success" type="submit">Salvar</button>
            <a class="btn btn-primary" href="{{ action('App\Http\Controllers\UsuarioController@store') }}">Voltar</a>

        </form>



@endsection
