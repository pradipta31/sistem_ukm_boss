<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
          [
            'name' => 'Pradipta Adi Nugraha',
            'email' => 'pradiptadipta31@gmail.com',
            'password' => Hash::make('999294662adi'),
            'role' => 'ketua',
          ],
          [
            'name' => 'Pradipta Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
          ],
        ]);
    }
}
