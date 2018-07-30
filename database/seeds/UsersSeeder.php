<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'Nattawut Kruaytong';
        $user->email = 'nattawut_kru@nacc.go.th';
        $user->password = Hash::make('123456');
        $user->save();
    }
}
