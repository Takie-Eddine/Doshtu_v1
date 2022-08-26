<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name'=>$this->faker->lastName(),
            'username'=>$this->faker->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'password'=> '$2y$10$3jSWABip3hY2G0agjTFPQOV/PWZ6KbOqy/lWDPt5/kR.KUOhCqiLy',
            'mobile' => rand(00000000000,99999999999),
            'status'=>rand(0,3),
        ];
    }
}
