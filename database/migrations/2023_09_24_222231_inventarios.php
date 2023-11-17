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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('codigo');
            $table->string('producto');
            $table->string('existencias');
            $table->string('entradas');
            $table->string('salidas');
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
