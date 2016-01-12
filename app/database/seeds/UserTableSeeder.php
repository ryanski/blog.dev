<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
		$user->first_name = 'Ryan';
		$user->last_name = 'Bentkowski';
		$user->username = 'RyanSki';
		$user->email = 'ryanbentkowski@gmail.com';
		$user->password = Hash::make($_ENV['USER_PASS']);
		$user->birthday = '01012015';
		$user->phone_number = '00000000';
		$user->zipcode = '78163';
		$user->save();
	}
}