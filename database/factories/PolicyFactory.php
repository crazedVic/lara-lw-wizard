<?php

namespace Database\Factories;

use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class PolicyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {

        $limits = ["annual","monthly","biweekly"];
        $months = ["January", "March", "November"];
        $index = array_rand($limits);

        return [
            'brokerage' => $this->faker->company() . ' Brokers Ltd.',
            'day' => random_int(1,28),
            'month' => $months[$index],
            'annual_premium' => random_int(80000, 6000000),
            'payment_schedule' => $limits[$index]
        ];
    }
}
