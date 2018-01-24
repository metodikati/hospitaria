<?php

use Illuminate\Database\Seeder;
use MetodikaTI\SystemModule;

class SystemModuleTableSeeder extends Seeder
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
				'name'   => 'Sistema',
				'url'    => 'system',
				'icon'   => 'ti-settings',
				'parent' => 0,
				'order'  => 1
			],
			[
				'name'   => 'Usuarios',
				'url'    => 'system/user',
				'icon'   => 'ti-settings',
				'parent' => 1,
				'order'  => 1
			],	
			[
				'name'   => 'Perfiles',
				'url'    => 'system/profile',
				'icon'   => 'ti-settings',
				'parent' => 1,
				'order'  => 2
			],	
			[
				'name'   => 'Catalogos',
				'url'    => 'catalog',
				'icon'   => 'ti-book',
				'parent' => 0,
				'order'  => 2
			],	
			[
				'name'   => 'Slider de Home',
				'url'    => 'catalog/home-slider',
				'icon'   => 'ti-book',
				'parent' => 4,
				'order'  => 1
			],
			[
				'name'   => 'Eventos',
				'url'    => 'catalog/event',
				'icon'   => 'ti-book',
				'parent' => 4,
				'order'  => 2
			],						
			[
				'name'   => 'Blog',
				'url'    => 'blog',
				'icon'   => 'ti-agenda',
				'parent' => 0,
				'order'  => 1
			],	
			[
				'name'   => 'Categorías',
				'url'    => 'blog/category',
				'icon'   => 'ti-agenda',
				'parent' => 7,
				'order'  => 1
			],
			[
				'name'   => 'Entradas',
				'url'    => 'blog/post',
				'icon'   => 'ti-book',
				'parent' => 7,
				'order'  => 2
			]						
		];

		foreach ($matriz as $item) {
			SystemModule::create($item);
		}
	}
}
