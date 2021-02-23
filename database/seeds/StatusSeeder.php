<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->delete();

        $items = [
            ['id' => '1', 'name' => 'Order Placed', 'percent' => '5'],
            ['id' => '2', 'name' => 'Order Confirmed', 'percent' => '25'],
            ['id' => '3', 'name' => 'Shipped', 'percent' => '50'],
            ['id' => '4', 'name' => 'Out for Delivery', 'percent' => '100'],
        ];

        foreach ($items as $item){
            Status::create($item);
        }
    }
}
