<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {


        \DB::table('blogs')->delete();

        \DB::table('blogs')->insert(array (
            0 =>
                array(
                    "id" => 1,
                    "order" => 1,
                    "status" => "1",
                    "created_at" => "2022-09-20 00:00:00",
                    "updated_at" => "2022-09-20 00:00:00",
                    "deleted_at" => NULL,
                ),
        ));


    }
}