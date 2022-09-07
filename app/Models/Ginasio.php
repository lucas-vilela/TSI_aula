<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ginasio extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ginasio';

    protected $fillable =[
        'nome',
        'img_capa',
        'telefone',
        'cep',
        'data_registro',
        'bebidas',
        'area_kids',
        'wifi',
        'qtd_vestiarios',
        'estacionamento',
        'churrasqueira',
        'qtd_banheiros',
        'tv_assinatura',
        'arquibancada',
        'lanches'
    ];
}
