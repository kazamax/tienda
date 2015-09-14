<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
				'name' 		=> 'Roberto', 
				'last_name' => 'Jose', 
				'email' 	=> 'robertsilkro@hotmail.com', 
				'user' 		=> 'kazMax',
				'password' 	=> \Hash::make('jorlib'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'Barcelona, calle san carlos, casa nro:8-125 Estado Anzoategui',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Adela', 
				'last_name' => 'Torres', 
				'email' 	=> 'adela@correo.com', 
				'user' 		=> 'adela',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Tonala 321, Jalisco',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
