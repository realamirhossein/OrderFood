<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->delete();


        $items = [
            ['first_name' => 'admin', 'last_name' => 'admin', 'email' => 'admin@test.com' ,'username' => 'admin', 'password' => Hash::make('Aa123456'), 'isadmin' => 1],
            ['first_name' => 'regular', 'last_name' => 'user', 'email' => 'user@test.com' ,'username' => 'user', 'password' => Hash::make('123456aA')],
        ];

        foreach ($items as $item){
            User::create($item);
        }
    }
}
