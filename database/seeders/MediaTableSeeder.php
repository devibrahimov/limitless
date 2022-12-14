<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 8,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 1,
                'uuid' => '5848f1b3-2537-4d96-8ea4-489d2e9ced42',
                'collection_name' => 'category_image',
                'name' => 'breakfast',
                'file_name' => 'breakfast.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 91783,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 8,
                'created_at' => '2022-05-18 17:23:15',
                'updated_at' => '2022-05-18 17:23:15',
            ),
            1 => 
            array (
                'id' => 9,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 1,
                'uuid' => '3e79101d-580b-4811-a214-f9aa0372eb6c',
                'collection_name' => 'category_images',
                'name' => 'br4',
                'file_name' => 'br4.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 115262,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 9,
                'created_at' => '2022-05-18 17:23:15',
                'updated_at' => '2022-05-18 17:23:15',
            ),
            2 => 
            array (
                'id' => 10,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 1,
                'uuid' => 'a37f4a95-599e-4aac-a9b7-93d323409a98',
                'collection_name' => 'category_images',
                'name' => 'br3',
                'file_name' => 'br3.jpg',
                'mime_type' => 'image/webp',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 44380,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 10,
                'created_at' => '2022-05-18 17:23:15',
                'updated_at' => '2022-05-18 17:23:15',
            ),
            3 => 
            array (
                'id' => 11,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 1,
                'uuid' => '133e1a81-653e-44f0-8885-b6cb853b7eda',
                'collection_name' => 'category_images',
                'name' => 'br2',
                'file_name' => 'br2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 66664,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 11,
                'created_at' => '2022-05-18 17:23:15',
                'updated_at' => '2022-05-18 17:23:15',
            ),
            4 => 
            array (
                'id' => 12,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 1,
                'uuid' => '0c5d84ca-cc9a-4523-b6f1-970416d91264',
                'collection_name' => 'category_images',
                'name' => 'br',
                'file_name' => 'br.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 50551,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 12,
                'created_at' => '2022-05-18 17:23:15',
                'updated_at' => '2022-05-18 17:23:15',
            ),
            5 => 
            array (
                'id' => 13,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 2,
                'uuid' => 'd3f36a95-df41-4917-9b50-73c6a60dca5d',
                'collection_name' => 'category_image',
                'name' => 'lounge',
                'file_name' => 'lounge.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 98347,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 13,
                'created_at' => '2022-05-19 10:22:42',
                'updated_at' => '2022-05-19 10:22:42',
            ),
            6 => 
            array (
                'id' => 14,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 2,
                'uuid' => '4910ca44-3875-464b-8404-016fc6c0ef3d',
                'collection_name' => 'category_images',
                'name' => 'high-protein-dinners-slow-cooker-meatballs-image-5a04d02',
                'file_name' => 'high-protein-dinners-slow-cooker-meatballs-image-5a04d02.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 86094,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 14,
                'created_at' => '2022-05-19 10:22:42',
                'updated_at' => '2022-05-19 10:22:42',
            ),
            7 => 
            array (
                'id' => 15,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 2,
                'uuid' => 'a3bbbb99-44cb-4cbf-9b36-a0fc9a04bdcc',
                'collection_name' => 'category_images',
                'name' => 'OLI-0320_Healthy-CuminCrustedChickenBreastWithKaleSaladHumous_02786_preview-eba91c9',
                'file_name' => 'OLI-0320_Healthy-CuminCrustedChickenBreastWithKaleSaladHumous_02786_preview-eba91c9.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 121769,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 15,
                'created_at' => '2022-05-19 10:22:42',
                'updated_at' => '2022-05-19 10:22:42',
            ),
            8 => 
            array (
                'id' => 16,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 2,
                'uuid' => '67a5e256-603f-4bc0-aa2d-43c983c0da24',
                'collection_name' => 'category_images',
                'name' => 'easy-one-pan-french-onion-chicken-160462-1',
                'file_name' => 'easy-one-pan-french-onion-chicken-160462-1.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 763948,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 16,
                'created_at' => '2022-05-19 10:22:42',
                'updated_at' => '2022-05-19 10:22:42',
            ),
            9 => 
            array (
                'id' => 17,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 3,
                'uuid' => '8810bcc7-690c-4020-a9af-6110aa45e347',
                'collection_name' => 'category_image',
                'name' => 'dinner',
                'file_name' => 'dinner.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 132088,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 17,
                'created_at' => '2022-05-19 10:23:13',
                'updated_at' => '2022-05-19 10:23:13',
            ),
            10 => 
            array (
                'id' => 18,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 3,
                'uuid' => 'c8066739-c419-4314-bd0a-4f9989bf099a',
                'collection_name' => 'category_images',
                'name' => 'surd8r8ca2rka63zdt9in_1080_1225',
                'file_name' => 'surd8r8ca2rka63zdt9in_1080_1225.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 126926,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 18,
                'created_at' => '2022-05-19 10:23:13',
                'updated_at' => '2022-05-19 10:23:13',
            ),
            11 => 
            array (
                'id' => 19,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 3,
                'uuid' => '4e6bca8e-1ca0-4f47-9933-70eba49914b4',
                'collection_name' => 'category_images',
                'name' => 'No-bake-chocolate-hazelnut-dessert-in-a-glass-1-2',
                'file_name' => 'No-bake-chocolate-hazelnut-dessert-in-a-glass-1-2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 216793,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 19,
                'created_at' => '2022-05-19 10:23:13',
                'updated_at' => '2022-05-19 10:23:13',
            ),
            12 => 
            array (
                'id' => 20,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 3,
                'uuid' => 'cb2fa48d-730e-4aff-9f18-9ce09d138a80',
                'collection_name' => 'category_images',
                'name' => 'dessert-main-image-molten-cake-0fbd4f2',
                'file_name' => 'dessert-main-image-molten-cake-0fbd4f2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 31818,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 20,
                'created_at' => '2022-05-19 10:23:13',
                'updated_at' => '2022-05-19 10:23:13',
            ),
            13 => 
            array (
                'id' => 21,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 4,
                'uuid' => '2eab88a4-af69-4ae8-a917-f6300f54913d',
                'collection_name' => 'category_image',
                'name' => 'desert',
                'file_name' => 'desert.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 85385,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 21,
                'created_at' => '2022-05-19 10:23:45',
                'updated_at' => '2022-05-19 10:23:45',
            ),
            14 => 
            array (
                'id' => 22,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 4,
                'uuid' => '7f9263ac-aab0-4bbb-af0b-61653065d196',
                'collection_name' => 'category_images',
                'name' => 'No-bake-chocolate-hazelnut-dessert-in-a-glass-1-2',
                'file_name' => 'No-bake-chocolate-hazelnut-dessert-in-a-glass-1-2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 216793,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 22,
                'created_at' => '2022-05-19 10:23:45',
                'updated_at' => '2022-05-19 10:23:45',
            ),
            15 => 
            array (
                'id' => 23,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 4,
                'uuid' => '9f7f621d-3786-449b-8579-a992886f15d0',
                'collection_name' => 'category_images',
                'name' => 'dessert-main-image-molten-cake-0fbd4f2',
                'file_name' => 'dessert-main-image-molten-cake-0fbd4f2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 31818,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 23,
                'created_at' => '2022-05-19 10:23:45',
                'updated_at' => '2022-05-19 10:23:45',
            ),
            16 => 
            array (
                'id' => 24,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 4,
                'uuid' => '8a610610-9918-4698-9fee-cdf73c60e6e8',
                'collection_name' => 'category_images',
                'name' => 'dinner-ideas-2',
                'file_name' => 'dinner-ideas-2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 62254,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 24,
                'created_at' => '2022-05-19 10:23:45',
                'updated_at' => '2022-05-19 10:23:45',
            ),
            17 => 
            array (
                'id' => 25,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 5,
                'uuid' => 'f1d6d415-8b7d-469c-80eb-a868b015d28a',
                'collection_name' => 'category_image',
                'name' => 'drinks',
                'file_name' => 'drinks.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 61343,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 25,
                'created_at' => '2022-05-19 10:24:20',
                'updated_at' => '2022-05-19 10:24:20',
            ),
            18 => 
            array (
                'id' => 26,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 5,
                'uuid' => 'e50f6b26-7316-4048-a046-ffac50aa9e9c',
                'collection_name' => 'category_images',
                'name' => 'dinner-ideas-2',
                'file_name' => 'dinner-ideas-2.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 62254,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 26,
                'created_at' => '2022-05-19 10:24:20',
                'updated_at' => '2022-05-19 10:24:20',
            ),
            19 => 
            array (
                'id' => 27,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 5,
                'uuid' => 'aa1463fe-c040-4c41-ae9e-3120d392cb23',
                'collection_name' => 'category_images',
                'name' => 'high-protein-dinners-slow-cooker-meatballs-image-5a04d02',
                'file_name' => 'high-protein-dinners-slow-cooker-meatballs-image-5a04d02.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 86094,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 27,
                'created_at' => '2022-05-19 10:24:20',
                'updated_at' => '2022-05-19 10:24:20',
            ),
            20 => 
            array (
                'id' => 28,
                'model_type' => 'App\\Models\\Category',
                'model_id' => 5,
                'uuid' => '983a93fe-6eb7-4544-afe6-59dc98e98185',
                'collection_name' => 'category_images',
                'name' => 'OLI-0320_Healthy-CuminCrustedChickenBreastWithKaleSaladHumous_02786_preview-eba91c9',
                'file_name' => 'OLI-0320_Healthy-CuminCrustedChickenBreastWithKaleSaladHumous_02786_preview-eba91c9.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 121769,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '[]',
                'responsive_images' => '[]',
                'order_column' => 28,
                'created_at' => '2022-05-19 10:24:20',
                'updated_at' => '2022-05-19 10:24:20',
            ),
        ));
        
        
    }
}