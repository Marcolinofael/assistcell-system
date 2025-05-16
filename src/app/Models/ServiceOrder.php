<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    protected $table = 'service_orders';
    protected $guarded = ['id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    public function celular()
    {
        return $this->belongsTo(Celular::class, 'celular_id');
    }
    public function pagamento()
    {
        return $this->belongsTo(Pagamento::class, 'pagamento_id');
    }
    public function estagio()
    {
        return $this->belongsTo(Estagio::class, 'estagio_id');
    }
}
