<?php



use App\Models\Call;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class CallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 3; $i++) {
            $seconds = random_int(10, 59);
            $minutes = random_int(10, 59);
            $time = "$minutes m : $seconds s";
            $call = new Call();
            $call->phone_number = $faker->unique()->numerify('3#########');
            $call->date_time = $faker->dateTime();
            $call->call_duration = $time;


            $call->save();
        }
    }
}
