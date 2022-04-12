<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Problem>
 */
class ProblemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence( rand(5,10));
        $slug =  Str::slug($name, '-');
        $visibility = ['public', 'private'];

        return [
            'title' => $name,
            'slug' => $slug,
            'description' => $this->faker->paragraph,
            'visibility' =>  $visibility[rand(0,1)],
            'user_id' => User::all()->random(),
            'category_id' => Category::all()->random(),
        ];
    }
}
