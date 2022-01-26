<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        $limits = [100000000,50000000,500000000,1000000000,250000000,5000000000,0];
        $index = array_rand($limits);
        return [
            'name' => $this->faker->words(5, true),
            'deductible_amount' => random_int(100000,2500000),
            'limit'=>  $limits[$index],
            'notes' => $this->faker->sentences(3, true),
            'deductible' => $index != 6
        ];
    }
}
