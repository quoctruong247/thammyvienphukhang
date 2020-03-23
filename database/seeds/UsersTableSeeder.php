<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
            'name' 			=> 'quoc truong',
            'email' 		=> 'quoctruong247@gmail.com',
            'password' 		=> bcrypt('secret'),
            'active'		=>'1',
            'levels_id'         =>'1',
            'created_at'	=>now(),
        	'updated_at'	=>now(),
        ]);
    	factory(App\User::class, 50)->create();
    }
}
