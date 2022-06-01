<?php



use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_names = ['Carlo Carlotti', 'Pino Pinguino', 'Giorgio Rossi'];
        foreach ($customer_names as $name) {
            $customer = new Customer();
            $customer->name = $name;
            $customer->email = $faker->unique()->safeEmail;
            $customer->phone_number = $faker->unique()->numerify('3#########');
            $customer->photos = $faker->imageUrl(250, 250);
            $customer->annotations = $faker->text(20);

            $customer->save();
        }
    }
}
