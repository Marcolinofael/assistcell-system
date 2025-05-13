<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $guarded = ['id'];

    public function celular()
    {
        return $this->hasMany(Celular::class, 'marca_id');
    }
}
