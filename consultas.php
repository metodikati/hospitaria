<?php

/**
* 
*/
class Consultas
{

    public function consultaCategorias(){
        include_once ('conexion.php'); 
        $db = new Conexion();
        $db->real_query("SELECT * FROM specialties WHERE estatus = 'Activo' order by name");
        $res = $db->use_result();

        //echo "Result set order...\n";
        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;

        }
        if ($datos == null) {
                $datos = "Sin categorias";
        }
        return $datos;
    }

    public function consultaProductos($idCategoria){
        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT * from doctors where especialidades_id = $idCategoria ");
        $res = $db->use_result();
        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
    // Consulto las categorias
        $db2 = new Conexion();
        $db2->real_query("SELECT * FROM categoria WHERE id = $idCategoria ");
        $res2 = $db2->use_result();
        while ($row2 = $res2->fetch_assoc()) {
            $datos2[] = $row2;
        }

        return array('datosProductos' => $datos, 'datosCategoria' => $datos2);
    }
    public function SoloCategorias($idCategoria){
        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT * FROM categoria WHERE id = $idCategoria ");
        $res = $db->use_result();
        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
        return $datos;
    }
    public function categoriaDescripcion($idCategoria){
        include_once('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT * FROM descripcion_categoria
            where categoria_id = $idCategoria");
        $res = $db->use_result();

        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
        return $datos;
    }

    public function consultaProductosDetalle($id){
        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT espe.datos, espe.especificaciones, prod.id, prod.nombre,
            prod.precio, prod.descripcion, prod.imagenRepresentativa, cat.nombre_categoria 
            FROM  producto prod 
            JOIN categoria cat on cat.id = prod.categoria_id  
            JOIN especificaciones espe on espe.producto_id = prod.id
            WHERE prod.id  = $id ");
        $res = $db->use_result();

        //echo "Result set order...\n";
        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
        return $datos;
    }
        public function consultaProductosImagenes($id){
        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT * from imagenes
                            where producto_id = $id ");
        $res = $db->use_result();

        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
        return $datos;
    }
    public function consultaEspecialidad($id){
        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT * from specialties where  estatus = 'Activo' order by name");
        $res = $db->use_result();

        while ($row = $res->fetch_assoc()) {
            $datos[] = $row;
        }
        return $datos;
    }


}

if (isset($_POST['accion']) && $_POST['accion'] == "ejecutarbusqueda" ) {
        $error = "";
        $success = "";
        $busqueda = $_POST['datoabuscar'];

        include_once ('conexion.php');
        $db = new Conexion();
        $db->real_query("SELECT id, name, consulting_room, email, phone, urgencias FROM doctors WHERE especialidades_id = '".$busqueda."' ORDER BY name");


        

        
        //$res = $db->use_result();
        $resultado = $db->use_result(); //Ejecución de la consulta
        while ($row = $resultado->fetch_assoc()) {
            $datos[] = $row;
        }
        if (count($datos) < 1) {
            $error = "No se encontraron datos para mostrar";
        }else{
            $total = count($datos);
            for ($i=0; $i < $total; $i++) { 
                $success[$i] = [
                    'id' => $datos[$i]['id'],
                    'nombre' => $datos[$i]['name'],
                    'correo' => $datos[$i]['email'],
                    'phone' => $datos[$i]['phone'],
                    'consultorio' => $datos[$i]['consulting_room'],
                    'urgencias' => $datos[$i]['urgencias'],
                    'total' => $total,
                ];
            }
            
        }
        echo json_encode(array("error" => $error, "success" => $success));
    }


