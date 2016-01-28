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
        $users = factory(App\User::class, 3)->make();
        foreach ($users as $user) {
            DB::table('users')->insert([
                'name'           => $user->name,
                'email'          => $user->email,
                'password'       => $user->password,
                'remember_token' => $user->remember_token,
                'code'           => str_random(60),
            ]);
        }
    }
}
