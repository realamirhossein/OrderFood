<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->delete();
        // Pizza
        for ($i=1; $i <= 10; $i++) {
            Food::create([
                'name' => 'Pizza '.$i,
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img' => 'foods/pizza.png',
                'menu_id' => '3',
                'qty' => rand(5, 10),
            ]);
        }
        // Fastfood
        for ($i=1; $i <= 10; $i++) {
            Food::create([
                'name' => 'fastfood'.$i,
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img' => 'foods/fastfood.png',
                'menu_id' => '2',
                'qty' => rand(5, 10),
            ]);
        }
        // Pizza
        for ($i=1; $i <= 10; $i++) {
            Food::create([
                'name' => 'Persian '.$i,
                'price' => rand(149999, 249999),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'img' => 'foods/persian.png',
                'menu_id' => '1',
                'qty' => rand(5, 10),
            ]);
        }

    }
}
