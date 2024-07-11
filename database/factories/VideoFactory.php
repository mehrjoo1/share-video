<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // php facer : استفاده از این کتابخانه
        // php facer : برای فارسی شدن داده ها باید توی فایل "config/app.pph" و فایل دات انو فیکر را فارسی کنید .
        return [
            'name' => $this->faker->name(),
            'url' =>$this->faker->imageUrl(446, 240, 'animals', true), 
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText()
        ];
    }
}
