<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Beginner',
                    'status' => '1',
                    'created_at' => '2022-05-18 11:48:59',
                    'updated_at' => '2022-05-18 11:48:59',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Intermade',
                    'status' => '1',
                    'created_at' => '2022-05-18 12:03:40',
                    'updated_at' => '2022-05-18 12:03:40',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 3,
                    'name' => 'Upper Intermade',
                    'status' => '1',
                    'created_at' => '2022-05-18 12:03:40',
                    'updated_at' => '2022-05-18 12:03:40',
                    'deleted_at' => NULL,
                )
        ));


    }
}