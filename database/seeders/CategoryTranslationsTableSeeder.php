<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_translations')->delete();
        
        \DB::table('category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'locale' => 'az',
                'name' => 'English',
                'slug' => 'english',
//                'title' => 'Səhər yeməyi',
//                'keywords' => 'Səhər yeməyi',
//                'description' => 'Səhər yeməyi',
                'deleted_at' => NULL,
//                'image_alt' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'locale' => 'en',
                'name' => 'Russian',
                'slug' => 'russian',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}