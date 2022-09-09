<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quadra extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_quadra';

    protected $fillable =[
        'nome_quadra',
        'dimensoes',
        'piso',

    ];
}
