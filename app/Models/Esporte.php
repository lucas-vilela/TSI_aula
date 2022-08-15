<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esporte extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_esporte';

    protected $fillable =[
        'modalidade',
        'desc_modalidade',
        'nr_jogadores'
    ];
}
