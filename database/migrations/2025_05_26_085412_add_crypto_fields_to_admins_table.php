<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCryptoFieldsToAdminsTable extends Migration
{
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('btc_address')->nullable();
            $table->string('btcImage')->nullable();
            $table->string('eth_address')->nullable();
            $table->string('ethImage')->nullable();
            $table->string('usdt_address')->nullable();
            $table->string('usdtImage')->nullable();
        });
    }

    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn([
                'btc_address', 'btcImage',
                'eth_address', 'ethImage',
                'usdt_address', 'usdtImage',
            ]);
        });
    }
}
