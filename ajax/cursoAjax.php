<?php
 $peticionAjax=true;
 require_once("../core/configgeneral.php");
//echo "probando al admin";

if(isset($_POST['nombre'])){
     require_once("../controladores/cursoControlador.php");
     
     //INSTANCIOAMOS LA CLASE
     $insAdmin= new cursoControlador();
    //valida los campos requeridos
     if(isset($_POST['cargo']) && isset($_POST['nombre'])&& isset($_POST['apellidos'])){
        echo $insAdmin->agregar_curso_controlador();
     }else{

     }


 }else{
    session_start();
    session_destroy();
    echo '<script>windows.location.href="'.SERVERURL.'login/"</script>';
 }
 
