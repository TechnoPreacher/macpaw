<?php

	namespace Database\Factories;

	use Illuminate\Database\Eloquent\Factories\Factory;

	/**
	 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributor>
	 */
	class ContributorFactory extends Factory
	{
		/**
		 * Define the model's default state.
		 *
		 * @return array<string, mixed>
		 */
		public function definition()
		{
			return [
				'username'      => fake()->userName(),
				'amount'        => fake()->randomNumber(3),
				'collection_id' => random_int(1, 5),
			];
		}
	}


