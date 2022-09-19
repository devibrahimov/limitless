<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VidoSeeder extends Seeder
{
    public function run()
    {


        \DB::table('videos')->delete();

        \DB::table('videos')->insert(array (
            0 =>
                array(
                    "id" => 1,
                    "link1" => "https://www.youtube.com/embed/LZ0v9A5iEG4",
                    "link2" => "https://www.youtube.com/embed/LZ0v9A5iEG4",
                    "status" => "1",
                    "created_at" => "2022-09-20 00:08:58",
                    "updated_at" => "2022-09-20 00:08:58",
                ),
        ));


    }
}
