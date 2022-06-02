<?php

use App\Models\Customer;
use App\Models\Offer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_ids = Customer::pluck('id')->toArray();
        $offers = [5, 10, 15];
        foreach ($offers as $amount) {
            $offer = new Offer();

            $offer->customer_id = Arr::random($customer_ids);
            $offer->amount = $amount;
            $offer->offer_duration = $faker->dateTimeThisMonth();


            $offer->save();
        }
    }
}
