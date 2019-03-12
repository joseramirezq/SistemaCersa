<?php
     if ($peticionAjax) {
        require_once('../modelos/secundariosModelo.php');
    } else {
        require_once('./modelos/secundariosModelo.php');
    }

    class secundariosControlador extends secundariosModelo{
        
        public function agregar_estados_controlador(){
            $nombre=mainModel::limpiar_cadena($_POST['nombre']);
            $descripcion=mainModel::limpiar_cadena($_POST['descripcion']);
            $color=mainModel::limpiar_cadena($_POST['color']);
           

            $datosEstado=[
                "Nombre"=>$nombre,
                "Descripcion"=>$descripcion,
                "Color"=>$color
            ];
            $guardarEstado=secundariosModelo::agregar_estados_modelo($datosEstado);
            if($guardarEstado->rowCount()>=1){
                $direccion=SERVERURL."adestados";
                header('location:'.$direccion);
              
            }
        }

        public function agregar_categoria_controlador(){
            $nombre=mainModel::limpiar_cadena($_POST['nombre_cat']);
            $descripcion=mainModel::limpiar_cadena($_POST['descripcion_cat']);
            

            $datosCategoria=[
                "Nombre"=>$nombre,
                "Descripcion"=>$descripcion
              
            ];
            $guardarCategoria=secundariosModelo::agregar_categoria_modelo($datosCategoria);

        }

        public function agregar_permiso_controlador(){
            $puesto=mainModel::limpiar_cadena($_POST['puesto']);
            $des_puesto=mainModel::limpiar_cadena($_POST['descripcion_puesto']);
            $datosCargo=[
                "Puesto"=>$puesto,
                "Descripcion"=>$des_puesto,

            ];
            $guardarCargo=secundariosModelo::agregar_permiso_modelo($datosCargo);

        }
    }
    