<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_xx_xx_create_etudiants_table.php
public function up()
{
    Schema::create('etudiants', function (Blueprint $table) {
        $table->id();
        $table->string('nom')->nullable()->change();
        $table->string('prenom');
        $table->string('email')->unique();
        $table->text('adresse')->nullable();
        $table->date('date_naissance')->nullable();
        $table->string('telephone')->nullable();
        $table->string('mot_de_passe');
        $table->string('photo')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
