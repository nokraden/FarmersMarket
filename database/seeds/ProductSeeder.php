<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$products = [
			[
				'id' => '1',
				'market_id' => '1',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 2.50
			],
			[
				'id' => '2',
				'market_id' => '1',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .50
			],
			[
				'id' => '3',
				'market_id' => '1',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .75
			],
			[
				'id' => '4',
				'market_id' => '1',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 99.00
			],
			[
				'id' => '5',
				'market_id' => '1',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .25
            ],
			[
				'id' => '6',
				'market_id' => '2',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '7',
				'market_id' => '2',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '8',
				'market_id' => '2',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '9',
				'market_id' => '2',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '10',
				'market_id' => '2',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '11',
				'market_id' => '3',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '12',
				'market_id' => '3',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '13',
				'market_id' => '3',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '14',
				'market_id' => '3',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '15',
				'market_id' => '3',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '16',
				'market_id' => '4',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '17',
				'market_id' => '4',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '18',
				'market_id' => '4',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '19',
				'market_id' => '4',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '20',
				'market_id' => '4',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '21',
				'market_id' => '5',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '22',
				'market_id' => '5',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '23',
				'market_id' => '5',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '24',
				'market_id' => '5',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '25',
				'market_id' => '5',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '26',
				'market_id' => '6',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 2.50
			],
			[
				'id' => '27',
				'market_id' => '6',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .50
			],
			[
				'id' => '28',
				'market_id' => '6',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .75
			],
			[
				'id' => '29',
				'market_id' => '6',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 99.00
			],
			[
				'id' => '30',
				'market_id' => '6',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => .25
            ],
			[
				'id' => '31',
				'market_id' => '7',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '32',
				'market_id' => '7',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '33',
				'market_id' => '7',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '34',
				'market_id' => '7',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '35',
				'market_id' => '7',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '36',
				'market_id' => '8',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '37',
				'market_id' => '8',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '38',
				'market_id' => '8',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '39',
				'market_id' => '8',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '40',
				'market_id' => '8',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '41',
				'market_id' => '9',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '42',
				'market_id' => '9',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '43',
				'market_id' => '9',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '44',
				'market_id' => '9',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '45',
				'market_id' => '9',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '46',
				'market_id' => '10',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '47',
				'market_id' => '10',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '48',
				'market_id' => '10',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '49',
				'market_id' => '10',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '50',
				'market_id' => '10',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ],
			[
				'id' => '51',
				'market_id' => '11',
				'vendor_id' => '1',
				'name' => 'Broccoli',
				'image' => 'https://images.unsplash.com/photo-1459411621453-7b03977f4bfc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '52',
				'market_id' => '11',
				'vendor_id' => '1',
				'name' => 'Corn',
				'image' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.50
			],
			[
				'id' => '53',
				'market_id' => '11',
				'vendor_id' => '1',
				'name' => 'Celery',
				'image' => 'https://images.unsplash.com/photo-1594313255220-fbc889eeb7dc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 1.75
			],
			[
				'id' => '54',
				'market_id' => '11',
				'vendor_id' => '1',
				'name' => 'Kale',
				'image' => 'https://images.unsplash.com/photo-1586288415925-d7affaf2d1f0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '100',
				'price' => 9.00
			],
			[
				'id' => '55',
				'market_id' => '11',
				'vendor_id' => '1',
				'name' => 'Beets',
				'image' => 'https://images.unsplash.com/photo-1587486912758-4367d2015d6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60',
				'quantity' => '50',
				'price' => .75
            ]
		];
		
		foreach ($products as $product) {
		 		Product::create(array(
				'id'  => $product['id'],
				'market_id'  => $product['market_id'],
				'vendor_id'  => $product['vendor_id'],
				'name' => $product['name'],
				'image' => $product['image'],
				'quantity' => $product['quantity'],
				'price' => $product['price']
			));
		}
    }
}
