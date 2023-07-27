<?php
class Carrito{
private $bd;

function __construct($base) {
$this->bd=$base;
} 

public function seleccionarProducto($id){
  
   $respuesta=$this->bd->ejecutarConsultas("SELECT * FROM productos WHERE codigo=$id");

    
    $cod=$respuesta[0]['codigo'];
    $prod=$respuesta[0]['producto'];
    $desc=$respuesta[0]['descripcion'];
   $prec= $respuesta[0]['precio'];
             
 /*   echo $cod;
   echo $prod;
   echo $desc;
   echo $prec; */

   $insertar=$this->bd->ejecutarConsultas("INSERT INTO compras VALUES (DEFAULT, $cod, '$prod','$desc',$prec)");

} 
    
public function listarCompra(){
    $respuesta=$this->bd->ejecutarConsultas("SELECT *FROM compras ORDER BY producto");
    return $respuesta;
} 

public function eliminarCompra($id){
    $respuesta=$this->bd->ejecutarConsultas("DELETE FROM compras WHERE id_compra=$id");
    return $respuesta;
} 

}   

?>