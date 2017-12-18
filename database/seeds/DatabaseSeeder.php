<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	$user = new User;

	$user->name = '';  // example admin
	$user->email = ''; // example yasuken1990@gmail.com
	$user->password = Hash::make(''); // example password

	$user->save();
    }
}
