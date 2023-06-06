@extends('base.app')
@section('conteudo')

@php
    if (!empty($disco->id)) {
        $route = route('disco.update', $disco->id);
    } else {
        $route = route('disco.store');
    }
@endphp

@section('tituloPagina', 'Formulário Disco')

<h1>Formulário Disco</h1>

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
            @if (!empty($disco->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="
            @if (!empty(old('id'))) {{ old('id') }} 
            @elseif(!empty($disco->id)) {{ $disco->id }} 
            @else {{ '' }} @endif" /><br>

            <div class="col-3">
                <label class="form-label">Nome</label><br>
                <input type="text" class="form-control" name="nome" value="
                @if (!empty(old('nome'))) {{ old('nome') }}
                @elseif(!empty($disco->nome)) {{ $disco->nome }}
                @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-3">
                <label class="form-label">Valor</label><br>
                <input type="text" class="form-control" name="valor" value="
                @if (!empty(old('valor'))) {{ old('valor') }}
                @elseif(!empty($disco->valor)) {{ $disco->valor }} 
                @else {{ '' }} @endif" /><br>
            </div>

            <div class="col-3">
                <label class="form-label">Artista</label><br>
                <input type="text" class="form-control" name="artista" value="
                @if (!empty(old('artista'))) {{ old('artista') }}
                @elseif(!empty($disco->artista)) {{ $disco->artista }} 
                @else {{ '' }} @endif" /><br>
            </div>
            
            <div class="col-3">
                <label class="form-label">Ano</label><br>
                <input type="text" class="form-control" name="ano" value="
                @if (!empty(old('ano'))) {{ old('ano') }}
                @elseif(!empty($disco->ano)) {{ $disco->ano }} 
                @else {{ '' }} @endif" /><br>
            </div>

            <!-- Colocar imagem no disco?
            @php
                $nome_imagem = !empty($disco->imagem) ? $disco->imagem : 'disco_sem_img.png';
            @endphp

            <div class="col-6">
                <br>
                <img class="img-thumbnail" src="/storage/{{ $nome_imagem }}" width="300px" />
                <br><br>
                <input type="file" class="form-control" name="imagem" /><br>
            </div>
            -->

            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('disco.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-arrow-left"></i> Voltar
            </a>
            
            <br><br>
        </form>
    </div>

</div>
@endsection
