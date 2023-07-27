<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
setlocale(LC_TIME,'spanish');
class Usuarios { 
public $nombre;  
public $apellido; 
public $fechanac; 


public function __construct($nom,$ape,$fecha){
    $this->nombre = $nom;
    $this->apellido = $ape;
    $this->fechanac = $fecha;
	
}
private function calcular_edad(){
    $fecha_nacimiento = "$this->fechanac";
    $dia_actual = date("d-m-Y");
    $edad_diff = date_diff(date_create($fecha_nacimiento), date_create($dia_actual));
   $edad= $edad_diff->format('%y');
   return $edad;
}

public function imprime_caracteristicas(){ 
    $edad = $this->calcular_edad();
    ?>
<div class="mostrar">
    <h2>Datos ingresados:</h2>
    <p><b>Apellido:</b> <?php echo $this->apellido;?></p>
    <p><b>Nombre:</b> <?php echo $this->nombre;?></p>
   	<p><b>Edad:</b> <?php echo $edad;?></p>
</div>
<?php
}
}
?>