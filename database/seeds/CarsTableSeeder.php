<?php

use App\Cars;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = [
            [
                'make' => 'Land Rover',
                'model' => 'Range Rover Sport',
                'year' => 2017
            ],
            [
                'make' => 'Ford',
                'model' => 'F150',
                'year' => 2014
            ],
            [
                'make' => 'Chevy',
                'model' => 'Tahoe',
                'year' => 2015
            ],
            [
                'make' => 'Aston Martin',
                'model' => 'Vanquish',
                'year' => 2018
            ]
        ];

        foreach ($cars as $car) {
            Cars::create($car);
        }
    }
}
