<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Food extends Model
{
    protected $fillable = ['nome','user_id', 'porcao', 'valor_energetico', 'carboidratos', 'proteinas', 'gorduras_totais', 'gorduras_trans', 'fibras_alimentares', 'sodio'];
}
