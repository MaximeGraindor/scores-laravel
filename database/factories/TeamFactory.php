<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Juventus',
                'Manchester',
                'Paris Saint Germain',
                'Olympique Lyonnais',
                'Chelsea'
            ]),
            'slug' => $this->faker->sentence(1),
            'file_name' => './',
            'created_at' => '2020-09-24 12:25:20',
            'updated_at' => '2020-09-24 12:25:20',
        ];
    }
}
