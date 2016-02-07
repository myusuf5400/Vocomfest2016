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
            'nama'     => 'coba',
            'email'    => 'coba@coba.io',
            'password' => bcrypt('coba'),
            'level'    => 1,
            'code'     => 1,
        ]);
    }
}
