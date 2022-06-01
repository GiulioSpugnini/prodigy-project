<?php



use App\Models\Quote;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $quotes = [1029, 649, 369];
        foreach ($quotes as $amount) {
            $quote = new Quote();

            $quote->amount = $amount;
            $quote->discount = $faker->randomFloat();


            $quote->save();
        }
    }
}
