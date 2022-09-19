<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    public function run()
    {


        \DB::table('levels')->delete();

        \DB::table('levels')->insert(array (
            array(
                "id" => 1,
                "name" => "Beginner",
                "status" => "1",
                "created_at" => "2022-09-20 00:40:38",
                "updated_at" => "2022-09-20 00:40:38",
            ),
            array(
                "id" => 2,
                "name" => "Intermediate",
                "status" => "1",
                "created_at" => "2022-09-20 00:40:59",
                "updated_at" => "2022-09-20 00:40:59",
            ),
            array(
                "id" => 3,
                "name" => "Advanced",
                "status" => "1",
                "created_at" => "2022-09-20 00:41:00",
                "updated_at" => "2022-09-20 00:41:00",
            ),
        ));


    }
}