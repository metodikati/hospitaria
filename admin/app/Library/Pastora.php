<?php namespace MetodikaTI\Library;

use MetodikaTI\User;
use Permission;
use Auth;
use Session;
use MetodikaTI\SystemModule;
use \Carbon\Carbon;


class Pastora {


	public static function in_relation($object, $field_id, $field) {
		if (!is_null($object)) {
			if (!is_null($object->$field_id)) {
				if (!is_null($object->$field_id->$field)) {
					return  true;
				} 
			}
		}
		return false;
	}
	/**
	 * Metodo que devuelve verdadero si una propiedad se encuentra en un arreglo
	 *
	 * @return Boolean
	 */
	public static function in_object($value,$object) {
    	if (is_object($object)) {
      		foreach($object as $key => $item) {
        		if ($value==$key) return true;
      		}
    	}
    	return false;
  	}


  	public static function dateFormat($date) {
  		$aux = explode(' ', $date);
  		$aux1 = $aux[0];
  		$aux = explode('-', $aux1);
  		$year = $aux[0];
  		$month = $aux[1];
  		$day = $aux[2];

		$date = Carbon::createFromDate($year, $month, $day, 'America/Monterrey');	
		$anio = $date->year;
		$numMes = $date->month;
		$dia = $date->day;
		$numDia = $date->dayOfWeek;
		$day = 1;
		$mes = 1;

		switch ($numDia) {
			case 1:
				$day = 'Lunes';
				break;		
			case 2:
				$day = 'Martes';
				break;
			case 3:
				$day = 'Miercoles';
				break;
			case 4:
				$day = 'Jueves';
				break;
			case 5:
				$day = 'Viernes';
				break;
			case 6:
				$day = 'Sabado';
				break;
			case 0:
				$day = 'Domingo';
				break;
		}

		switch ($numMes) {
			case 1:
				$mes = 'Enero';
				break;
			case 2:
				$mes = 'Febrero';
				break;
			case 3:
				$mes = 'Marzo';
				break;
			case 4:
				$mes = 'Abril';
				break;
			case 5:
				$mes = 'Mayo';
				break;
			case 6:
				$mes = 'Junio';
				break;
			case 7:
				$mes = 'Julio';
				break;
			case 8:
				$mes = 'Agosto';
				break;
			case 9:
				$mes = 'Septiembre';
				break;
			case 10:
				$mes = 'Octubre';
				break;
			case 11:
				$mes = 'Noviembre';
				break;
			case 12:
				$mes = 'Diciembre';
				break;
		}
		
		$fecha = $day . ', ' . $dia . ' de ' . $mes . ', ' . $anio;

		return $fecha;

  		
  	}


  	public static function getAbbrMonth($month)
  	{
  		switch ($month) {
			case 1:
				$mes = 'ENE.';
				break;
			case 2:
				$mes = 'FEB.';
				break;
			case 3:
				$mes = 'MAR.';
				break;
			case 4:
				$mes = 'ABR.';
				break;
			case 5:
				$mes = 'MAY.';
				break;
			case 6:
				$mes = 'JUN.';
				break;
			case 7:
				$mes = 'JUL.';
				break;
			case 8:
				$mes = 'AGO.';
				break;
			case 9:
				$mes = 'SEP.';
				break;
			case 10:
				$mes = 'OCT.';
				break;
			case 11:
				$mes = 'NOV.';
				break;
			case 12:
				$mes = 'DIC.';
				break;
		}
		
		return $mes;
  	}
	/**
	 * Metodo que devuelve los permisos que tiene el usuario
	 *
	 * @return JSON
	 */
	public static function userProfile()
	{

		return User::find(Auth::user()->id)->userProfile->permits;
	}

	/**
	 * Metodo que convierte un Json a Array
	 *
	 * @return Array
	 */
	public static function jsonToArray($json)
	{
		$json = (array)json_decode($json);
		$response = [];
		foreach ($json as $key => $value) {
			$response[(int)$key] = (int)$value;
		}
		return $response;
	}


	/**
	 *
	 *
	 */
	public function strongMeter($password)
	{
		$rank = 0;
		$rank += (strlen(trim($password)) > 7) ? 5 : 0;
		$rank += (strlen(trim($password)) > 11 && strlen(trim($password)) < 16) ? 10 : 0;
		$rank += (preg_match("/([A-Z])/", $password)) ? 10 : 0;
		$rank += (preg_match("/([0-9])/", $password)) ? 10 : 0;
	}

	/**
	 * Metodo que construye el arbol de modulos del sistema
	 *
	 * @var $parent integer. ID del papa del módulo
	 *
	 * @return array
	 */
	public static function moduleTree($parent = 0)
	{

		$response = [];

		foreach (SystemModule::where('parent', '=', $parent)->orderBy('order')->get() as $module) {

			$response[] = [
				'id'    => $module->id,
				'name'  => $module->name,
				'url'   => $module->url,
				'icon'  => $module->icon,
				'parent_as_child' => $module->parent_as_child,
				'child' => self::moduleTree($module->id)
			];

		}

		return $response;

	}


	/**
	 *
	 *
	 */
	public static function cleanPhone($phone)
	{
		$mapper = [
			'/',
			'(',
			')',
			'-',
			' '
		];

		foreach ($mapper as $key => $value) {

			$phone = str_replace($value, "", $phone);

		}

		return $phone;
	}



 



	public static function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}


	public function getRandomWord($len = 5) {
		$word = array_merge(range('0', '9'), range('A', 'Z'));
		shuffle($word);
		return substr(implode($word), 0, $len);
	}



}