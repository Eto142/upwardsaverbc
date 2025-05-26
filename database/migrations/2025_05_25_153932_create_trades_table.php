<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
     Schema::create('trades', function (Blueprint $table) {
        $table->id();
        
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // links to users.id
        
        $table->uuid('transaction_id')->unique(); // unique transaction identifier

        $table->string('asset_symbol');
        $table->string('asset_name');
        $table->enum('type', ['buy', 'sell']);
        $table->enum('order_type', ['market', 'limit', 'stop']);
        $table->decimal('amount_usd', 15, 2);
        $table->decimal('quantity', 15, 6);
        $table->decimal('limit_price', 15, 6)->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
};
