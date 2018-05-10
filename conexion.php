<?php

class Conexion extends mysqli {

//PRODUCTION
#Accedo al constructor de la clase mysqli que viene por defaut en php
	public function __construct() {
		parent::__construct('localhost','hospitaria','.Z}S&+wFS2{('  ,'hospitar_admin');
		#especifico que el intercambio de datos siempre se hara en utf8 por los caracteres que pueda el usuario ingresar (á,é,í,ó,ú,ñ,etc.)
		$this->query("SET NAMES 'utf8';");
		//$this->connect_errno ? die('Error con la conexion') : $estatus = 'Conectado';
		#echo $x;
		unset($x);
	}

//LOCAL
/*
    public function __construct() {
		parent::__construct('localhost','root',''  ,'hospitar_admin');
		#especifico que el intercambio de datos siempre se hara en utf8 por los caracteres que pueda el usuario ingresar (á,é,í,ó,ú,ñ,etc.)
		$this->query("SET NAMES 'utf8';");
		//$this->connect_errno ? die('Error con la conexion') : $estatus = 'Conectado';
		#echo $x;
		unset($x);
    }
*/

#funcion para recorrer alguna consulta generada desde cualquier parte del sistema
	public function recorrer($consulta){

		$datos = array();
		while ($data = mysqli_fetch_object($consulta)) {
		    $datos[] = $data;
		    return $datos;
		}
	}

}


?>
