<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Coverage;
use App\Models\Policy;
use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        for($x=0;$x<7;$x++) {

            Policy::factory()
                ->has(Contact::factory()->count(random_int(2, 5)))
                ->has(Coverage::factory()->count(random_int(1, 3)))
                ->create();
        }
    }

}
