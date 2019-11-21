<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    protected $fillable = ['categoria_id', 'desc_restaurante'];

    public function categoria()
    {
        return $this->belongsTo(CategoriaRestaurante::class);
    }
}
