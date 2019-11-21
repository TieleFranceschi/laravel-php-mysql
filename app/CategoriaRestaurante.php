<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaRestaurante extends Model
{
    protected $fillable = ['desc_categoria'];

    public function restaurantes()
    {
        return $this->hasMany('App\Restaurante');
    }
}
