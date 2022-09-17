<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        activity()->withoutLogs(function () {
            $this->faker = Faker::create();

            \DB::table('categories')->delete();
            \DB::table('category_translations')->delete();

            $active_langs = Cache::rememberForever('active_langs', function () {
                return Language::active()->get();
            });

            $count=80;
            for ($i = 0; $i < $count; $i++) {
                $category =  Category::create([
//                    'parent_id' => rand(0,10),
                    'status' => 1
                ]);
                foreach ($active_langs as $lang) {
                    CategoryTranslation::create([
                        'category_id' => $category->id,
                        'locale' => $lang->code,
                        'name' => $this->faker->name,
                        'slug' => Str::slug($this->faker->name),
                    ]);
                }
            }
        });

    }
}
