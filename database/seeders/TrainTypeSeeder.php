<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TrainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('train_types')->insert([[
            'type' => 'Cercanias',
        ], [
            'type' => 'media distancia',
        ], [
            'type' => 'Alta Velocidad',
        ]]);
    }
}
