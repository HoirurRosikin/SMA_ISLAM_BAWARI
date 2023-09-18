<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = \App\Models\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul'=> $this->faker->text(12),
            'isi'=> $this->faker->text(100),
            'image_url' => 'http://localhost/avatars/150-'.rand(1,10).'.jpg',
            'creator_id'=> '1'
        ];
    }
}
