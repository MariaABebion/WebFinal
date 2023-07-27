<?php
class Producto{
   private $bd;
  
function __construct($base) {
$this->bd=$base;
} 

public function listarProductos(){
    $respuesta=$this->bd->ejecutarConsultas("SELECT *FROM productos ORDER BY producto");
    return $respuesta;
} 

}    
?>