<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\str;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_categories')->insert([
            [
                'name'=>"AC",
                "slug"=>'ac',
                "image"=>"1521969345.png"
            ],
            [
                'name'=>"Beauty",
                "slug"=>'beauty',
                "image"=>"1521969358.png"
            ],
            [
                'name'=>"AC",
                "slug"=>'ac',
                "image"=>"1521969409.png"
            ],
            [
                'name'=>"Plumbing",
                "slug"=>'plumbing',
                "image"=>"1521969409.png"
            ],
            [
                'name'=>"Electrical",
                "slug"=>'electrical',
                "image"=>"1521969419.png"
            ],
            [
                'name'=>"Shower Filter",
                "slug"=>'shower-filter',
                "image"=>"1521969430.png"
            ],
            [
                'name'=>"Home Cleaning",
                "slug"=>'home-cleaning',
                "image"=>"1521969446.png"
            ],
            [
                'name'=>"Carpentry",
                "slug"=>'carpentry',
                "image"=>"1521969454.png"
            ],   [
                'name'=>"Pest Control",
                "slug"=>'pest-control',
                "image"=>"1521969464.png"
            ],
            [
                'name'=>"Water Purifier",
                "slug"=>'water-purifier',
                "image"=>"1521969490.png"
            ],
            [
                'name'=>"Computer Repair",
                "slug"=>'computer-repair',
                "image"=>"1521969512.png"
            ],
            [
                'name'=>"TV",
                "slug"=>'tv',
                "image"=>"1521969522.png"
            ],
            [
                'name'=>"Refrigerator",
                "slug"=>'refrigerator',
                "image"=>"1521969536.png"
            ],
            [
                'name'=>"Geyser",
                "slug"=>'geyser',
                "image"=>"1521969558.png"
            ],
            [
                'name'=>"Car",
                "slug"=>'car',
                "image"=>"1521969576.png"
            ],
            [
                'name'=>"Document",
                "slug"=>'document',
                "image"=>"1521969599.png"
            ],
            [
                'name'=>"Movers & Packers",
                "slug"=>'movers-packers',
                "image"=>"1521969622.png"
            ],
            [
                'name'=>"Home Automation",
                "slug"=>'home-automation',
                "image"=>"1521972593.png"
            ],
            [
                'name'=>"Laundry",
                "slug"=>'laundry',
                "image"=>"1521972624.png"
            ],
            [
                'name'=>"Painting",
                "slug"=>'painting',
                "image"=>"1521972643.png"
            ],
        ]);

    }
}
