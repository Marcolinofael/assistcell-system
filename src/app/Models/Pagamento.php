<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $table = 'pagamentos';
    protected $guarded = ['id'];

    public function serviceOrder()
    {
        return $this->hasMany(ServiceOrder::class, 'pagamento_id');
    }
}
