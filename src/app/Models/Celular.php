<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Celular extends Model
{
    protected $table = 'celulars';
    protected $guarded = ['id'];

    public function serviceOrder()
    {
        return $this->hasMany(ServiceOrder::class, 'celular_id');
    }
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }
}
