@extends('base.app')
@section('conteudo')

@php
    if (!empty($pedido->id)) {
        $route = route('pedido.update', $pedido->id);
    } else {
        $route = route('pedido.store');
    }
@endphp

@section('tituloPagina', 'Formulário Pedido')

<h1>Formulário Pedido</h1>

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
            @if (!empty($pedido->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id" value="
            @if (!empty(old('id'))) {{ old('id') }} 
            @elseif(!empty($pedido->id)) {{ $pedido->id }} 
            @else {{ '' }} @endif" /><br>

            <div class="col-3">
                <label class="form-label">Cliente</label><br>
                <input type="text" class="form-control" name="cliente" value="
                @if (!empty(old('cliente'))) {{ old('cliente') }}
                @elseif(!empty($pedido->cliente)) {{ $pedido->cliente }}
                @else {{ '' }} @endif" /><br>
            </div>
            
            <div class="col-3">
                <label class="form-label">Endereço</label><br>
                <input type="text" class="form-control" name="endereco" value="
                @if (!empty(old('endereco'))) {{ old('endereco') }}
                @elseif(!empty($pedido->endereco)) {{ $pedido->endereco }} 
                @else {{ '' }} @endif" /><br>
            </div>
            
            <div class="col-3">
                <label class="form-label">Telefone</label><br>
                <input type="text" class="form-control" name="telefone" value="
                @if (!empty(old('telefone'))) {{ old('telefone') }}
                @elseif(!empty($pedido->telefone)) {{ $pedido->telefone }} 
                @else {{ '' }} @endif" /><br>
            </div>

            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('pedido.index') }}" class="btn btn-primary">
                <i class="fa-solid fa-arrow-left"></i> Voltar
            </a>
            
            <br><br>
        </form>
    </div>

</div>
@endsection
