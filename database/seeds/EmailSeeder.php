<?php



use App\Models\Email;
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
        $emails = ['Messaggio importante', 'Invio files', 'Richiesta assistenza'];
        foreach ($emails as $title) {
            $email = new Email();
            $email->title = $title;
            $email->text = $faker->text(20);
            $email->date_time = $faker->dateTime();


            $email->save();
        }
    }
}
