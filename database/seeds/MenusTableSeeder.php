<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();

        $items = [
            ['id' => '1', 'name' => 'Persian', 'subname' => 'ایرانی'],
            ['id' => '2', 'name' => 'Fast-Food', 'subname' => 'فست فود'],
            ['id' => '3', 'name' => 'Pizza', 'subname' => 'پیتزا'],
        ];

        foreach ($items as $item){
            Menu::create($item);
        }
    }
}
