<?php

// database/migrations/xxxx_xx_xx_create_ues_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('ues', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('libelle');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ues');
    }
};
