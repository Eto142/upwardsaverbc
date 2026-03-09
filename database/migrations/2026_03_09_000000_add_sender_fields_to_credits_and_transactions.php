<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('transactions', function (Blueprint $table) {
            if (!Schema::hasColumn('transactions', 'sender_name')) {
                $table->string('sender_name')->nullable()->after('transaction_description');
            }
            if (!Schema::hasColumn('transactions', 'sender_account')) {
                $table->string('sender_account')->nullable()->after('sender_name');
            }
        });
    }

    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn(['sender_name', 'sender_account']);
        });
    }
};
