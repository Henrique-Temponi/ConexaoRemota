<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'ip', 'dispoinvel'
    ];    
    protected $guarded = [
        'id_lab'
    ];

    /**
     * Usuários para teste.
     */
    public static $maquinas =
    [
        [
            'nome' => 'PMG34INFLB20101',
            'ip' => 'google.com',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20102',
            'ip' => 'asasd',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20103',
            'ip' => 'google.com',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20104',
            'ip' => '127.0.0.4',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20105',
            'ip' => '127.0.0.5',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20105',
            'ip' => '127.0.0.5',
            'ip_lab' => '01',
            'disponivel' => false
        ],
        [
            'nome' => 'PMG34INFLB20106',
            'ip' => '127.0.0.6',
            'ip_lab' => '01',
            'disponivel' => false
        ],
    ];
    
}
