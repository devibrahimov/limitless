<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        activity()->withoutLogs(function () {

            $faker = \Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Menu::create([
                'name' => $faker->name,
                'slug' => Str::slug($faker->name),
                'title' => $faker->title,
                'keywords' => $faker->text(10),
                'description' => $faker->text(10),
                'text' => $faker->text(10),
                'parent_id' => rand(0, 9),
                'status' => '1',
                'order' => $i
            ]);
        }
        });
    }
}
