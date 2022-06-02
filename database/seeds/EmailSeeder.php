<?php



use App\Models\Email;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $customer_ids = Customer::pluck('id')->toArray();

        $emails = [
            ['name' => 'Carlo Carlotti', 'title' => 'Messaggio importante'],
            ['name' => 'Pino Pinguino', 'title' => 'Invio files'],
            ['name' => 'Giorgio Rossi', 'title' => 'Richiesta assistenza'],
        ];
        foreach ($emails as $email) {

            $newEmail = new Email();

            $newEmail->customer_id = Arr::random($customer_ids);
            $newEmail->name = $email['name'];
            $newEmail->title = $email['title'];
            $newEmail->text = $faker->text(20);




            $newEmail->save();
        }
    }
}
