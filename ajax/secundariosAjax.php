<?php
  $peticionAjax=true;
 require_once("../core/configgeneral.php");
//echo "probando al admin";

//ESTADOS
if(isset($_POST['insertar_estados'])){
     require_once("../controladores/secundariosControlador.php");
     
     //INSTANCIOAMOS LA CLASE//
     $insEstado= new secundariosControlador();
    //valida los campos requeridos
     if(isset($_POST['nombre'])){
        echo $insEstado->agregar_estados_controlador();
        ?>
                
        <script>
         function myFunction() {
         alert("Hello! I am an alert box!");
         }
         myFunction();
         </script>
        <?php 
       
     }else{

     }

//CATEGORIA
 }else if(isset($_POST['insertar_categoria'])){
    require_once("../controladores/secundariosControlador.php");
     
    //INSTANCIOAMOS LA CLASE//
    $insAdmin= new secundariosControlador();
   //valida los campos requeridos
    if(isset($_POST['cargo'])){
       echo $insAdmin->agregar_categoria_controlador();
    }else{

    }

  //PERMISO
 }else if(isset($_POST['insertar_permiso'])){

    require_once("../controladores/secundariosControlador.php");
     
     //INSTANCIOAMOS LA CLASE//
     $insAdmin= new secundariosControlador();
    //valida los campos requeridos
     if(isset($_POST['cargo'])){
        echo $insAdmin->agregar_permiso_controlador();
     }else{

     }
//ENVIAR AL LOGIN
 }else{
    session_start();
    session_destroy();
    echo '<script> window.location.href="'.SERVERURL.'login" </script>';
 }
 
 /*require_once("../controladores/administradorControlador.php");
 $insAdmin= new administradorControlador();
 echo $insAdmin->agregar_administrador_controlador();*/