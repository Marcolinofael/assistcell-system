<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('celular_id')->constrained('celulars');
            $table->string('imei');
            $table->string('defeito');
            $table->string('reparo');
            $table->string('valor');
            $table->foreignId('pagamento_id')->constrained('pagamentos');
            $table->foreignId('estagio_id')->constrained('estagios');
            $table->string('origin_user')->nullable();
            $table->string('last_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_orders');
    }
};
