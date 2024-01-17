<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('trains')->insert([
            [
                'name' => 'la ovni',
                'passengers' => '100',
                'year' => '1990',
                'train_type_id' => '1',
            ], [
                'name' => 'la nave',
                'passengers' => '200',
                'year' => '1991',
                'train_type_id' => '2',
            ], [
                'name' => 'la nave espacial',
                'passengers' => '300',
                'year' => '1992',
                'train_type_id' => '3',
            ]
        ]);
    }
}
