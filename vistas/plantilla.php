
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('vistas/modulos/link.php'); ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo COMPANY;?></title>
</head>
<body>
 
<body>
    <?php
    
      $peticionAjax=false;

        require_once('./controladores/vistasControlador.php');
        $vist= new vistasControlador();
        $vistasRespuesta=$vist->obtener_vistas_controlador();

        if($vistasRespuesta=="login" || $vistasRespuesta=="404" ):
            if ($vistasRespuesta=="login" ) {
              require_once('./vistas/contenidos/login-vista.php');
            } else {
              require_once('./vistas/contenidos/404-vista.php');
            }
            
           
        else:
          session_start();
        ?>
      
      <div class="container-scroller">
      <!-- NAVBAR -->
      <?php include('modulos/_navbar.php'); ?>
      
      <div class="container-fluid page-body-wrapper">
        <!-- SIDEBAR(BARRA LATERAL) -->
              <?php include('modulos/_sidebar.html'); ?>
        
         <!--CONTENIDO DEL LA PAGINA-->
        <div class="main-panel">
          <div class="content-wrapper">

            <!--Contenido-->
            <?php require_once $vistasRespuesta;?>



    
     </div>
          <!-- content-wrapper ends -->
          <!-- FOOTERS -->
        <?php include('modulos/_footer.html'); ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
  </div>
    <?php endif;?>
    <?php include('modulos/script.php'); ?>        
</body>
</html>