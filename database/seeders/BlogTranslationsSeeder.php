<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogTranslationsSeeder extends Seeder
{
    public function run()
    {


        \DB::table('blog_translations')->delete();

        \DB::table('blog_translations')->insert(array (
            array(
                "id" => 1,
                "blog_id" => 1,
                "name" => "Ila Mcfarland",
                "slug" => "itaque-sed-assumenda",
                "locale" => "az",
                "title" => "Cupiditate sed Nam a",
                "keywords" => "a",
                "description" => "Elit itaque proiden",
                "text" => "<p>asas</p>",
                "image_alt" => 'https://solverwp.com/demo/react/edumint/assets/img/banner/1.png',
                "deleted_at" => NULL,
            ),
            array(
                "id" => 2,
                "blog_id" => 1,
                "name" => "Bevis Barnes",
                "slug" => "enim-id-ut-id-conseq",
                "locale" => "en",
                "title" => "Provident in suscip",
                "keywords" => "aa",
                "description" => "Fugiat mollitia et e",
                "text" => "<p>aaaa</p>",
                "image_alt" => 'https://solverwp.com/demo/react/edumint/assets/img/banner/1.png',
                "deleted_at" => NULL,
            ),
            array(
                "id" => 3,
                "blog_id" => 1,
                "name" => "Aaron Langley",
                "slug" => "consequatur-exceptu",
                "locale" => "ru",
                "title" => "Error in quod accusa",
                "keywords" => "a",
                "description" => "Aute non aut eligend",
                "text" => "<p>asasa</p>",
                "image_alt" => 'https://solverwp.com/demo/react/edumint/assets/img/banner/1.png',
                "deleted_at" => NULL,
            ),
        ));


    }
}