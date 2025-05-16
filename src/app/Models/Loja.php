<?php

namespace App\Models;

use App\Models\Tecnico;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $table = 'lojas';
    protected $guarded = ['id'];
    
    public function tecnico()
    {
        return $this->hasMany(Tecnico::class, 'loja_id');
    }
    
}
