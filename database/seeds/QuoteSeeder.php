<?php

use App\Models\Customer;
use App\Models\Quote;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_ids = Customer::pluck('id')->toArray();
        $quotes = [1029, 649, 369];
        foreach ($quotes as $amount) {
            $quote = new Quote();

            $quote->customer_id = Arr::random($customer_ids);
            $quote->amount = $amount;
            $quote->discount = $faker->randomFloat();


            $quote->save();
        }
    }
}
