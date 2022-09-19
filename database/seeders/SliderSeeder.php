<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'link' => 'https://solverwp.com/demo/react/edumint/assets/img/banner/1.png',
                    'status' => '1',
                    'created_at' => '2022-05-18 11:48:59',
                    'updated_at' => '2022-05-18 11:48:59',
                ),
        ));


    }
}