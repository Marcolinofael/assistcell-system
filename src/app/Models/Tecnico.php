<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = 'tecnicos';
    protected $guarded = ['id'];

    public function loja();
    {
        return $this->belongsToMany(Loja::class, 'loja_id');
    }
    
}
