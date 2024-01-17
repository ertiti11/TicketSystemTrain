<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tickets')->insert(
            [[
                'date' => '2021-01-01',
                'train_id' => 1,
                'ticket_type_id' => 1,
                'price' => 100000,


            ], [
                'date' => '2021-01-01',
                'train_id' => 2,
                'ticket_type_id' => 1,
                'price' => 200000,

            ], [
                'date' => '2021-01-01',
                'train_id' => 3,
                'ticket_type_id' => 1,
                'price' => 300000,

            ], [
                'date' => '2021-01-01',
                'train_id' => 1,
                'ticket_type_id' => 2,
                'price' => 100000,

            ], [
                'date' => '2021-01-01',
                'train_id' => 2,
                'ticket_type_id' => 2,
                'price' => 200000,

            ], [
                'date' => '2021-01-01',
                'train_id' => 3,
                'ticket_type_id' => 2,
                'price' => 300000
            ],]



        );
    }
}
