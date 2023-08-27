<?php

	namespace Database\Factories;

	use Illuminate\Database\Eloquent\Factories\Factory;

	/**
	 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collection>
	 */
	class CollectionFactory extends Factory
	{
		/**
		 * Define the model's default state.
		 *
		 * @return array<string, mixed>
		 */
		public function definition()
		{
			return [
				'title'         => fake()->unique()->company,
				'description'   => fake()->realText(),
				'target_amount' => fake()->randomNumber(5),
				'link'          => fake()->url(),
			];
		}
	}

