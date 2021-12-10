<?php

namespace Database\Factories;

use App\Models\file_1;
use Illuminate\Database\Eloquent\Factories\Factory;

class File1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = file_1::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$faker->name
        ];
    }
}