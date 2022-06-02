<?php



use App\Models\Email;
use App\Models\Customer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {


        $emails = [
            ['recipient' => 'Carlo Carlotti', 'title' => 'Messaggio importante'],
            ['recipient' => 'Pino Pinguino', 'title' => 'Invio files'],
            ['recipient' => 'Giorgio Rossi', 'title' => 'Richiesta assistenza'],
        ];
        foreach ($emails as $email) {

            $newEmail = new Email();

            $newEmail->recipient = $email['recipient'];
            $newEmail->title = $email['title'];
            $newEmail->text = $faker->text(20);




            $newEmail->save();
        }
    }
}
