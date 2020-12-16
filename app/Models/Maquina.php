<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'ip',
    ];    
    protected $guarded = [
        'id_lab'
    ];

    /**
     * Usuários para teste.
     */
    public const maquinas =
    [
        [
            'nome' => 'PMG34INFLB20101',
            'ip' => '127.0.0.1',
            'ip_lab' => '01',
        ],
        [
            'nome' => 'PMG34INFLB20102',
            'ip' => '127.0.0.2',
            'ip_lab' => '01',
        ],
        [
            'nome' => 'PMG34INFLB20103',
            'ip' => '127.0.0.3',
            'ip_lab' => '01',
        ],
        [
            'nome' => 'PMG34INFLB20104',
            'ip' => '127.0.0.4',
            'ip_lab' => '01',
        ],
    ];
    
}
