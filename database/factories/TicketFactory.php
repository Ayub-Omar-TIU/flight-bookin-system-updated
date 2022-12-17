<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from' => 'Erbil',
            'takeoffAirport' => 'Erbil Airport',
            'to' => "Londn",
            'landingAirport' => 'London Airport',
            'price' => '1200',
            'stop' => 2,
            'status' => false,
            'takeoffDate' => fake()->date(), 'landingDate' => fake()->date(),
            'class' => "Economy"
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
