<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    use HasFactory;    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome',
    ];

    protected $guarded = [
        'id_unidade'
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
            'nome' => 'ICEI',
            'id_unidade' => '01',            
        ],
        [
            'id' => '02',
            'nome' => 'FCA',
            'id_unidade' => '01',
        ],
        [
            'id' => '03',
            'nome' => 'ICEG',
            'id_unidade' => '01',
        ],
    ];
}
