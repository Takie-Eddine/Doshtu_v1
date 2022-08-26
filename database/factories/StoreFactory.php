<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_name'=> $this->faker->company() ,
            'address'=> $this->faker->address(),
            'country'=> $this->faker->country(),
            'city'=> $this->faker->city(),
            'state'=> $this->faker->city(),
            'pincode'=> rand(000000,999999),
            'store_email'=>$this->faker->unique()->safeEmail(),
            'store_mobile' => rand(00000000000,99999999999),

        ];
    }
}
