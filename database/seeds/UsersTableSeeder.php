<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@admin.com',
        	'userType' => 'admin',
        	'password' => bcrypt('admin')
        ]);
    }
}
