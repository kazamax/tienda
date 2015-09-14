<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' => 'Quik Silver', 
				'slug' => 'quik-silver', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Rip Curl', 
				'slug' => 'rip-curl', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Under Armor', 
				'slug' => 'under-armor', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Hurley', 
				'slug' => 'hurley', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#445500'
			]
		);

		Category::insert($data);
    }
}
