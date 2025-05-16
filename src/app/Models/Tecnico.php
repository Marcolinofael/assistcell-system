<?php

namespace App\Models;

use App\Models\Loja;
use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = 'tecnicos';
    protected $guarded = ['id'];

    public function loja()

    {
        return $this->belongsTo(Loja::class, 'loja_id');
    }
    
}
