<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ues')->insert([
            ['libelle' => 'Mathematics', 'date_debut' => '2024-01-01', 'date_fin' => '2024-06-30'],
            ['libelle' => 'Physics', 'date_debut' => '2024-02-01', 'date_fin' => '2024-07-15'],
            ['libelle' => 'Computer Science', 'date_debut' => '2024-03-01', 'date_fin' => '2024-08-30'],
        ]);
    }
}
