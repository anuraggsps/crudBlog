<?php

class UserTableSeeder extends Seeder
{

public function run()
{
       DB::table('users')->delete();
		User::create(array(
			'name'     => 'sales',
			'username' => 'sales',
			'email'    => 'admin@admin.com',
			'password' => Hash::make('password'),
		));
}

}
