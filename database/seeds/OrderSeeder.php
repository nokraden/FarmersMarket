<?php

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$orders = [
			[
				'id' => '1',
				'user_id' => '1',
				'product_id' => '1',
				'event_id' => '2',
				'quantity' => '10',
				'price' => '2.50',
				'invoiced' => 'N'
			],
			[
				'id' => '2',
				'user_id' => '1',
				'product_id' => '3',
				'event_id' => '1',
				'quantity' => '5',
				'price' => '.75',
				'invoiced' => 'N'
			],
			[
				'id' => '3',
				'user_id' => '1',
				'product_id' => '5',
				'event_id' => '4',
				'quantity' => '25',
				'price' => '.25',
				'invoiced' => 'N'
			]
		];
		
		
		foreach ($orders as $order) {
			Order::create(array(
				'id'  => $order['id'],
				'user_id'  => $order['user_id'],
				'product_id' => $order['product_id'],
				'event_id' => $order['event_id'],
				'quantity' => $order['quantity'],
				'price' => $order['price'],
				'invoiced' => $order['invoiced']
			));
		}
    }
}
