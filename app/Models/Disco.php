<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    use HasFactory;
    protected $table = 'disco';

    protected $fillable = [
        'nome',
        'valor',
        'artista',
        'ano'
    ];

    public static function rules(){
        return  [
            'nome'      => 'required | max: 50',
            'valor'     => 'required',
            'artista'   => 'nullable | max: 120',
            'ano'       => 'nullable | max: 4'
        ];
    }
    public static function messages(){
        return [
            'nome.required'     => 'O nome é obrigatório',
            'nome.max'          => 'Só é permitido 50 caracteres',
            'valor.required'    => 'O valor é obrigatório',
            'artista.max'       => 'Só é permitido 120 caracteres',
            'ano.max'           => 'Só é permitido 4 caracteres'
        ];
    }
}
