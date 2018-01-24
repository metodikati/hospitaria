<?php

use Illuminate\Database\Seeder;
use MetodikaTI\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{

		$matriz = [
			[
				'name'  => 'READ',
				'bit'   => 1
			],
			[
				'name'  => 'CREATE',
				'bit'   => 2
			],
			[
				'name'  => 'UPDATE',
				'bit'   => 4
			],
			[
				'name'  => 'DELETE',
				'bit'   => 8
			],
		];

		foreach ($matriz as $item) {
			Permission::create($item);
		}
	}

}
