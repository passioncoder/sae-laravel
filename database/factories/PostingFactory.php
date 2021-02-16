<?php

namespace Database\Factories;

use App\Models\Posting;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title' => $this->faker->catchPhrase,
            'content' => $this->faker->optional(.6)->sentences(5, true),
            'is_featured' => $this->faker->boolean(20),
            'published_at' => $this->faker->optional(.9)->dateTimeBetween('-3 months', 'yesterday'),
        ];
    }

    /**
     * Define the model's unverified state.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unpublished()
    {
        return $this->state(function (array $attributes) {
            return [
                'published_at' => null,
            ];
        });
    }
}
