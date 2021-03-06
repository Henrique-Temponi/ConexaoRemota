<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
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
        'id_instituto'
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
            'nome' => 'Lab01',
            'id_instituto' => '01',            
        ],
        [
            'id' => '02',
            'nome' => 'Lab02',
            'id_instituto' => '01',
        ],
        [
            'id' => '03',
            'nome' => 'Lab03',
            'id_instituto' => '01',
        ],
        [
            'id' => '04',
            'nome' => 'Lab04',
            'id_instituto' => '01',
        ],
    ];
}
