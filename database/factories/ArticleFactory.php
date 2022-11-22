<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Article::class;
    
    public function definition()
    {

        $title = $this->faker->sentence();
 
        return [
            'title' => $title,
            'description' => $this->faker->paragraph(),
            'image' => '20221119141718.jpeg',

        ];
    }
}
