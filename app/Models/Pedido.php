<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';
    
    protected $fillable = [
        'cliente',
        'endereco',
        'telefone',
    ];

    public static function rules(){
        return [
            'cliente'   => 'required | max: 120',
            'endereco'  => 'required | max: 120',
            'telefone'  => 'nullable | max: 20'
        ];
    }
    
    public static function messeges(){
        return [
            'cliente.required'  => 'O cliente do pedido é obrigatório',
            'cliente.max'       => 'Só é permitido 120 caracteres',
            'edereco.required'  => 'O endereço do pedido é obrigatório',
            'endereco.max'  => 'Só é permitido 120 caracteres',
            'telefone.max'  => 'Só é permitido 20 caracteres',
        ];
    }

}
