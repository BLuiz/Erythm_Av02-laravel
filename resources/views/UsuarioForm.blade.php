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

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

@php
    if (!empty($usuario->id)) {
        $route = route('usuario.update', $usuario->id);
    } else {
        $route = route('usuario.store');
    }
@endphp

<body>

    <div class="container">
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>
