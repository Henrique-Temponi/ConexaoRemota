<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];

    protected $primaryKey = [
        'id'
    ];

    /**
     * Usuários para teste.
     */
    public const users =
    [
        [
            'id' => '01',
            'nome' => 'Coração Eucarístico',                       
        ],
        [
            'id' => '02',
            'nome' => 'São Gabriel',                       
        ],
    ];
}
