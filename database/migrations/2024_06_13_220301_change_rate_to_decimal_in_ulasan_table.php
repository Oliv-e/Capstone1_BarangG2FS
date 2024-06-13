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
        Schema::table('ulasan', function (Blueprint $table) {
            $table->decimal('rate', 3, 1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ulasan', function (Blueprint $table) {
            $table->integer('rate')->change();
        });
    }
    
};
