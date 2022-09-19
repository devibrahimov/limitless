<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(
        [
            RoleSeeder::class,
            PermissionsTableSeeder::class,
            RoleHasPermissionsTableSeeder::class,
            AdminSeeder::class,
            SettingSeeder::class,
        ]);
//
        $this->call(LanguageTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);



        $this->call(CategoriesTableSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(SliderTranslationsSeeder::class);
        $this->call(VidoSeeder::class);
        $this->call(VideoTranslationsSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogTranslationsSeeder::class);
        $this->call(LevelSeeder::class);
//        $this->call(CategoryTranslationsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuTranslationsTableSeeder::class);
    }
}
