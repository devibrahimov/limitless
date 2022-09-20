<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SliderTranslationsSeeder extends Seeder
{
    public function run()
    {


        \DB::table('slider_translations')->delete();

        \DB::table('slider_translations')->insert(array (
            0 =>
                array(
                    "id" => 1,
                    "slider_id" => 1,
                    "locale" => "az",
                    "name" => "Bizim Mohtesem Kurslar",
                    "text" => "Bizimle inkisaf edin!",
                    "button1" => "Bize Qatıl",
                    "button2" => "Daha Çox",
                    "image_alt" => NULL,
                ),
            array(
                "id" => 2,
                "slider_id" => 1,
                "locale" => "en",
                "name" => "Tamara Peck",
                "text" => "Qus aut est consequ",
                "button1" => "Officiis pariatur U",
                "button2" => "aIllo nemo temporibus",
                "image_alt" => NULL,
            ),
            array(
                "id" => 3,
                "slider_id" => 1,
                "locale" => "ru",
                "name" => "Summer Mcguire",
                "text" => "Dolor qui modi ex vo",
                "button1" => "Aliquam excepturi om",
                "button2" => "Quo ea quo blanditii",
                "image_alt" => NULL,
            ),
        ));


    }
}

