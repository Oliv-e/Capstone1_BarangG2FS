<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('promo', function (Blueprint $table) {
            $table->dropColumn('id_barang');
        });
    }

    public function down()
    {
        Schema::table('promo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_barang');
        });
    }
};
