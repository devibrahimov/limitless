<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VideoTranslationsSeeder extends Seeder
{
    public function run()
    {


        \DB::table('video_translations')->delete();

        \DB::table('video_translations')->insert(array (
            array(
                "id" => 1,
                "video_id" => 1,
                "locale" => "az",
                "title1" => "Facilis deserunt con",
                "title2" => "Quo aut quis reicien",
                "content" => NULL,
                "created_at" => NULL,
                "updated_at" => NULL,
            ),
            array(
                "id" => 2,
                "video_id" => 1,
                "locale" => "en",
                "title1" => "Quo expedita et null",
                "title2" => "Ad in expedita facil",
                "content" => NULL,
                "created_at" => NULL,
                "updated_at" => NULL,
            ),
            array(
                "id" => 3,
                "video_id" => 1,
                "locale" => "ru",
                "title1" => "Adipisci voluptas nu",
                "title2" => "Consectetur reprehe",
                "content" => NULL,
                "created_at" => NULL,
                "updated_at" => NULL,
            ),
        ));


    }
}
