<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'ayub',
            'email' => 'ayub@tishk.com',
            'password' => Hash::make('ayubayub'),
            'userType' => 'admin',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@tishk.com',
            'password' => Hash::make('useruser'),
            'userType' => '',
        ]);


        \App\Models\Ticket::factory()->create([
            'from' => 'Erbil',
            'takeoffAirport' => 'Erbil Airport',
            'to' => "Londn",
            'landingAirport' => 'London Airport',
            'price' => '1200',
            'stop' => 2,
            'status' => false,
            'takeoffDate' => fake()->date(), 'landingDate' => fake()->date(),
            'class' => "Economy"
        ]);


        \App\Models\Ticket::factory()->create([
            'from' => 'Slemani',
            'takeoffAirport' => 'Slemani Airport',
            'to' => "Londn",
            'landingAirport' => 'Istanbul Airport',
            'price' => '340',
            'stop' => 1,
            'status' => false,
            'takeoffDate' => fake()->date(), 'landingDate' => fake()->date(),
            'class' => "Economy"
        ]);
    }
}
