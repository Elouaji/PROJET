<?php

namespace Database\Seeders;

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
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
  DB::table('users')->insert([
    'name' => 'the admin user',
    'email' => 'iamadmin@gmail.com',
    'role' => 'admin',
    'password' => Hash::make('password'),
  ]);
  DB::table('users')->insert([
    'name' => 'the client user',
    'email' => 'iamaclient@gmail.com',
    'role' => 'client',
    'password' => Hash::make('password'),
  ]);
    }
}
