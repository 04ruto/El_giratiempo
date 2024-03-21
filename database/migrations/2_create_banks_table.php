<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuari_id');
            $table->foreign('usuari_id')->references('id')->on('users')->onDelete("cascade");
            $table->string("titular");
            $table->string("numero", 19);
            $table->date("fCaduca");
            $table->string("cvv", 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
