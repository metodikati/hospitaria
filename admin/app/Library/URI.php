<?php namespace MetodikaTI\Library;

use Route;
use MetodikaTI\SystemModule;
use MetodikaTI\Permission;
use MetodikaTI\Library\Pastora;

use Session;

class URI {

	public static $uri;

	public static $breadcrum = [];

	/**
	 * Metodo que devuelve los permisos que tiene el usuario
	 *
	 * @return JSON
	 */
	public static function breadcrums()
	{

		if (Route::current()->getUri() != 'admin/dashboard') {

			self::$uri = Route::current()->getUri();

			self::cleanString();

			self::generateBread(self::$uri, true);

			return array_reverse(self::$breadcrum);

		} else {

			return [];

		}
		
	}

	public static function generateBread($module, $id = false)
	{
		if ($id === true) {

			$query = SystemModule::where('url', '=', $module)->first();

		} else {

			$query = SystemModule::find($module);

		}

		//Se agrega el breadcrumb a la variable
		self::$breadcrum[] = [
			'name' => $query->name,
			'url'  => $query->url,
			'icon' => $query->icon
		];

		if ($query->parent > 0) {

			self::generateBread($query->parent);

		}
	}

	/**
	 *
	 *
	 */
	public static function cleanString()
	{
		$inicio = strlen("admin/dashboard/");

		if (self::isAlta()) {

			$final = strpos(self::$uri, "/create");

		} else if (self::isEditar()) {

			$final = strpos(self::$uri, "/edit");

		} else if (self::isTable()) {

			$final = strpos(self::$uri, "/table");

		} else if (self::isDestroy()) {

			$final = strpos(self::$uri, "/delete");

		} else {

			$final = false;

		}

		self::$uri = ($final === false) ? substr(self::$uri, $inicio) : substr(self::$uri, $inicio, $final - $inicio);
	}

	/**
	 *
	 *
	 */
	public static function isAlta()
	{
		if (is_null(self::$uri)) {

			self::setURI();

		}
		
		return (preg_match("/create/", self::$uri)) ? true : false;
	}

	/**
	 *
	 *
	 */
	public static function isEditar()
	{
		if (is_null(self::$uri)) {

			self::setURI();

		}

		return (preg_match("/edit/", self::$uri)) ? true : false;
	}

	/**
	 *
	 *
	 */
	public static function isTable()
	{
		if (is_null(self::$uri)) {

			self::setURI();

		}

		return (preg_match("/table/", self::$uri)) ? true : false;
	}

	/**
	 *
	 *
	 */
	public static function isDestroy()
	{
		if (is_null(self::$uri)) {

			self::setURI();

		}

		return (preg_match("/delete/", self::$uri)) ? true : false;
	}

	public static function setURI()
	{
		self::$uri = Route::current()->getUri();
	}

	/**
	 *
	 *
	 *
	 */
	public static function setRequestType()
	{

		if (self::isAlta()) {

			return "CREATE";

		} else if(self::isEditar()) {

			return "UPDATE";

		} else if(self::isDestroy()) {

			return "DELETE";

		} else {

			return "READ";
		}
			
	}

	/**
	 * Metodo que devuelve los permisos dados en el sistema
	 *
	 * @return Array.
	 */
	public static function permits()
	{

		if (!Session::has("systemPermissions")) {

			$permissions = Permission::all();

			$response = [];

			foreach ($permissions as $permission) {

				$response[$permission->name] = (int)$permission->bit;

			}

			Session::put('systemPermissions', $response);

		} 

		return Session::get('systemPermissions');

	}

	/**
	 * Metodo que devuele el modulo en el que se encuentra el usuario
	 *
	 * @return Object.
	 */
	public static function getModule()
	{

		self::cleanString();
 		return SystemModule::where('url', '=', self::$uri)->first();

	}

	/**
	 * Metodo que determina si un usuario tiene permiso para ejecutar alguna acción dentro del modulo dado
	 *
	 * @return bool.
	 */
	public static function border($userPermissions)
	{
		self::$uri = Route::current()->uri;

		$requestType = self::setRequestType();

		$permissions = self::permits();

		$module = self::getModule();

 
		if (array_key_exists($module->id, $userPermissions)) {

			return ($userPermissions[$module->id] & $permissions[$requestType]) ? true : false;

		} else {

			return false;

		}

	}

	/**
	 *
	 *
	 *
	 */
	public static function printButton($buttonType, $id = "", $text = "", $properties = null)
	{
		//Se establece la uri
		//self::$uri = Route::current()->getUri();
		self::$uri = Route::current()->uri;

		switch ($buttonType) {
			case 'update':
				return self::printUpdateButton($id);
				break;
			case 'delete':
				return self::printDeleteButton($id, $text);
				break;
			case 'create':
				return self::printCreateButton($text);
				break;
			case 'read':
				return self::printReadButton($id, $text);
				break;
		}
	}

	public static function printUpdateButton($id)
	{
		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();

		if (array_key_exists($module->id, $userPermission)) {

			if ($userPermission[$module->id] & $permissions["UPDATE"]) {

				return "<a href=".url('admin/dashboard/'.self::$uri.'/edit/'.base64_encode($id))." class='btn btn-success'><i class='fa fa-pencil'></i> Editar</a>";

			}

		}
	}

	public static function printDeleteButton($id, $text)
	{
		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();

		if (array_key_exists($module->id, $userPermission)) {

			if ($userPermission[$module->id] & $permissions["DELETE"]) {

				return "<a href=".url('admin/dashboard/'.self::$uri.'/delete/'.base64_encode($id))." class='btn btn-danger btnBorrarII btnDelete' data-id='".base64_encode($id)."' data-name='".$text."'><i class='fa fa-trash-o'></i> Borrar</a>";

			}

		}
	}

	public static function printCreateButton($text)
	{
		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();

		if (array_key_exists($module->id, $userPermission)) {

			if ($userPermission[$module->id] & $permissions["CREATE"]) {

				return "<a href=".url('admin/dashboard/'.self::$uri."/create")." class='btn btn-primary'><i class='fa fa-pencil'></i> ".$text."</a>";

			}

		}
	}

	public static function printReadButton($id, $text)
	{
		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();

		if (array_key_exists($module->id, $userPermission)) {

			if ($userPermission[$module->id] & $permissions["CREATE"]) {

				return "<a href=".url('admin/dashboard/'.self::$uri."/show/".base64_encode($id))." class='btn btn-primary'><i class='fa fa-eye'></i> ".$text."</a>";

			}

		}
	}






	public static function checkPermitionButton($button_type){
	
		self::$uri = Route::current()->uri;

		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();


		if (array_key_exists($module->id, $userPermission)) {

			switch ($button_type) {
				case 'edit':
						if ($userPermission[$module->id] & $permissions["UPDATE"]) {	return true;	}else{ return false; }
					break;
				case 'delete':
						if ($userPermission[$module->id] & $permissions["DELETE"]) {	return true;	}else{ return false; }
					break;
				case 'create':
						if ($userPermission[$module->id] & $permissions["CREATE"]) {	return true;	}else{ return false; }
					break;
				case 'view':
						if ($userPermission[$module->id] & $permissions["CREATE"]) {	return true;	}else{ return false; }
					break;					
				default:
					return true;
					break;
			}


		}else{
			return false;
		}
	}




	public static function checkPermitions(){
	
		self::$uri = Route::current()->uri;

		$userPermission = Pastora::jsonToArray(Pastora::userProfile());
		$permissions = self::permits();
		$module = self::getModule();

		$permitions["edit"] = false;
		$permitions["delete"] = false;
		$permitions["create"] = false;
		$permitions["view"] = false;

		if (array_key_exists($module->id, $userPermission)) {

			if ($userPermission[$module->id] & $permissions["UPDATE"]) {	
				$permitions["edit"] = true;
			}

			if ($userPermission[$module->id] & $permissions["DELETE"]) {	
				$permitions["delete"] = true;
			}

			if ($userPermission[$module->id] & $permissions["CREATE"]) {	
				$permitions["create"] = true;
			}

			if ($userPermission[$module->id] & $permissions["CREATE"]) {	
				$permitions["view"] = true;
			}
 
		}


 		return $permitions;
	}



}