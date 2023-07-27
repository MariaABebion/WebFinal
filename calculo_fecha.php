<?php
session_start();
date_default_timezone_set("America/Argentina/Buenos_Aires");
setlocale(LC_TIME,'spanish');

$d= $_POST['dia'];
$m= $_POST['mes'];
$Y= $_POST['anio'];


if (checkdate($m, $d, $Y)) {
    echo "<p>El día $d/$m/$Y existe.</p>";
} else {
    echo "<p>El día $d/$m/$Y no existe.</p>";
}

$fecha_elegida= ("$Y-$m-$d");
$fecha_actual= date("Y-m-d");

$datos=funcion_diasfaltantes($fecha_elegida, $fecha_actual);

// echo "Dias que faltan:" .$datos[11];

function funcion_diasfaltantes($fecha_elegida, $fecha_actual){
  
//indice 0=años
//indice 1= meses
//indice 2 = dias
//indice 11= total de dias
  $datetime1= date_create ($fecha_actual);
   $datetime2= date_create ($fecha_elegida);
   $interval= date_diff ($datetime1, $datetime2);

   $tiempo= array();

   foreach ($interval as $valor){
    $tiempo[]=$valor;
}
    return $tiempo;
}

$_SESSION['dia'] = $d;
$_SESSION['mes'] = $m;
$_SESSION['anio'] = $Y;
$_SESSION['mostrarResultado'] = $datos[11];


header("Location:unidad2.php?ok");
?>
