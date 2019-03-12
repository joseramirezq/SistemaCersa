<?php
  $peticionAjax=true;
 require_once("../core/configgeneral.php");
//echo "probando al admin";

if(isset($_POST['usuario'])){
     require_once("../controladores/loginControlador.php");
     
     //INSTANCIOAMOS LA CLASE//
     $instanciaLogin= new loginControlador();
    //valida los campos requeridos
     if(isset($_POST['usuario']) && isset($_POST['pass'])){
        echo   $instanciaLogin->iniciar_sesion_controlador();
     }else{
        echo "ingresa todos los datos";
     }


 }else{
    session_start();
    session_destroy();
    echo '<script> window.location.href="'.SERVERURL.'login" </script>';
 }
 
 /*require_once("../controladores/administradorControlador.php");
 $insAdmin= new administradorControlador();
 echo $insAdmin->agregar_administrador_controlador();*/