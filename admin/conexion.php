<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/
//este es el archivo de conexion


#Clase para conectarnos a la base de datos
#(Si te preguntas de donde invoco a mysqli, la respuesta es porque es una libreria que viene incluida en el php.ini por default)
class Conexion extends mysqli {
	
#Accedo al constructor de la clase mysqli que viene por defaut en php
	public function __construct() {
		parent::__construct('localhost','hospitaria','.Z}S&+wFS2{('  ,'hospitar_admin');
	#especifico que el intercambio de datos siempre se hara en utf8 por los caracteres que pueda el usuario ingresar (á,é,í,ó,ú,ñ,etc.)
		$this->query("SET NAMES 'utf8';"); 
		$this->connect_errno ? die('Error con la conexion') : $estatus = 'Conectado';
		#echo $x;
		unset($x);
	}

#funcion para recorrer alguna consulta generada desde cualquier parte del sistema
	public function recorrer($consulta){

		$datos = array();
		while ($data = mysqli_fetch_object($consulta)) {
		    $datos[] = $data;
		    return $datos;
		}

		/*$el = mysqli_fetch_assoc($consulta);
		$total = count($el);
		return $datos;*/
	}

}

//$db = new Conexion();

?>
