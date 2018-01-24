<?php

use Illuminate\Database\Seeder;
use MetodikaTI\UserProfile;

class UserProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('user_profiles')->delete();

		$matriz = [
			[
				'name'              => 'Daemon',
				'permits'           => json_encode([1 => 15, 2 => 15, 3 => 15, 4 => 15, 5 => 15, 6 => 15, 7 => 15, 8 => 15, 9 => 15])
			],
			[
				'name'              => 'Administrador',
				'permits'           => json_encode([1 => 15, 2 => 15, 3 => 15, 4 => 15, 5 => 15, 6 => 15, 7 => 15, 8 => 15, 9 => 15])
			]			
		];

		foreach ($matriz as $item) {
			UserProfile::create($item);
		}    }
}
