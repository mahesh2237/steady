<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Customer::class;
    public function definition()
    {
        
            return [
                'name' => $this->faker->name(),
                'description' => $this->faker->text(),
                'mobile'=>$this->faker->phoneNumber(),
                'email' => $this->faker->email()
            ];
        
    }
}
