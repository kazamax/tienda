	<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidLorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quaerat nulla qui officiis voluptas ullam, earum provident voluptatibus deserunt nihil adipisci cumque, nostrum sint rem?
     */
    public function run()
    {
		Product::insert();
    }
}
