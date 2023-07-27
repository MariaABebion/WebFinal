<?php
class Registrar{
private $bd;


function __construct($base) {
$this->bd=$base;
} 

public function ingresarusuario($mail){

    $resultado=$this->bd->ejecutarConsultas("SELECT * FROM registro WHERE mail='$mail'");
$filas=$resultado;

if ($filas){
    header("Location:unidad8.php?mail_registrado");
   
}else{
   
    $clave = password_hash($_POST['password'], PASSWORD_DEFAULT, array('cost'=> 4));
    $mail=$_POST['mail'];
    $resultado=$this->bd->ejecutarConsultas("INSERT INTO registro VALUES ('$mail', '$clave')");
   
    header("Location:unidad8.php?ok");
  
}

}

public function validarusuario($mailingresada,$claveingresada){
 
   $claveingresada = $_POST['password'];
   $mailingresada=$_POST['mail'];
  
    $resultado=$this->bd->ejecutarConsultas("SELECT * FROM registro WHERE mail='$mailingresada'");
    
    if (empty ($resultado)){   

    header("Location:unidad8.php?usuario_error");
} else{
    $mailBD=$resultado[0]['mail'];
    $claveBD=$resultado[0]['clave'];
    $validar_pass=password_verify($claveingresada,$claveBD);

    if ($mailingresada==$mailBD && $validar_pass){
        session_start();
        $_SESSION['mail']=$mailingresada;
        header("Location:unidad8.php?login_ok");
        
    }else{
        header("Location:unidad8.php?error_pass");
    }  

    }
} 

} 

?>