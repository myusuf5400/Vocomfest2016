<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama'     => 'admin',
            'email'    => 'admin',
            'password' => bcrypt('admin'),
            'level'    => 6,
            'code'     => 1,
        ]);
        DB::table('users')->insert([
            'nama'     => 'user',
            'email'    => 'user',
            'password' => bcrypt('user'),
            'level'    => 1,
            'code'     => 1,
        ]);
    }
}
