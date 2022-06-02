<?php



use App\Models\Call;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class CallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_ids = Customer::pluck('id')->toArray();
        for ($i = 0; $i < 3; $i++) {
            $seconds = random_int(10, 59);
            $minutes = random_int(10, 59);
            $time = "$minutes m : $seconds s";
            $call = new Call();
            $call->customer_id = Arr::random($customer_ids);
            $call->phone_number = $faker->unique()->numerify('3#########');
            $call->date_time = $faker->dateTime();
            $call->call_duration = $time;


            $call->save();
        }
    }
}
