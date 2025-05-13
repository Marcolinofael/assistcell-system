<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estagio extends Model
{
    protected $table = 'estagios';
    protected $guarded = ['id'];

    public function serviceOrder()
    {
        return $this->hasMany(ServiceOrder::class, 'estagio_id');
    }
}
