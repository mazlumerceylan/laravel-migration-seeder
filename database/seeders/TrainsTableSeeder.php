<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Company 1',
                'departure_station' => 'Station A',
                'arrival_station' => 'Station B',
                'departure_time' => Carbon::createFromTime(10, 30),
                'arrival_time' => Carbon::createFromTime(12, 0),
                'train_code' => 'C1AB1030',
                'num_carriages' => 8,
                'on_time' => true,
                'cancelled' => false
            ],
            // Aggiungi qui altri treno...
        ];

        foreach ($trains as $train) {
            DB::table('trains')->insert($train);
        }
    }
