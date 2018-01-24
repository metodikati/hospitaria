<?php namespace App\Library;

use App\SystemModule;
use App\Library\Pastora;

class LateralMenu {

	/**
	 *
	 *
	 */
	public static function menu()
	{
		return self::getSystemModules();
	}

	/**
	 * Metodo que devuelve los modulos que tiene permiso de ver el usuario
	 *
	 * @return Array. Conteniendo el árbol de Modulos que tiene permiso el usuario
	 */
	public static function getSystemModules($parent = 0)
	{
		$permits = Pastora::jsonToArray(Pastora::userProfile());

		$response = [];

		foreach (SystemModule::where('parent', '=', $parent)->orderBy('order')->get() as $module) {

			if (array_key_exists($module->id, $permits)) {

				$response[] = [
					'name'  => $module->name,
					'url'   => $module->url,
					'icon'  => $module->icon,
					'child' => self::getSystemModules($module->id)
				];

			}

		}

		return $response;

	}

}