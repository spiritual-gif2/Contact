<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts>
 */
class ContactsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name(),
            'num' => $this->faker->bothify('###-#########'),
            'mail' => $this->faker->safeEmail(),
            'favorite' => $this->faker->randomElement(['yes', 'no']),
            'user_id' => rand(2,5)
        ];
    }
}
