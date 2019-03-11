<?php

        if ($peticionAjax) {
            require_once('../modelos/clienteModelo.php');
        } else {
            require_once('./modelos/clienteModelo.php');
        }

        class clienteControlador extends clienteModelo{

            public function agregar_cliente_controlador(){
                $nombre=mainModel::limpiar_cadena($_POST['nombre']);
                $apellidos=mainModel::limpiar_cadena($_POST['apellidos']);
                $correo=mainModel::limpiar_cadena($_POST['correo']);
                $telefono=mainModel::limpiar_cadena($_POST['telefono']);
                $profesion=mainModel::limpiar_cadena($_POST['profesion']);
                $grado=mainModel::limpiar_cadena($_POST['grado']);
                $pais=mainModel::limpiar_cadena($_POST['pais']);
                $departamento=mainModel::limpiar_cadena($_POST['departamento']);
                $distrito=mainModel::limpiar_cadena($_POST['distrito']);
                $direccion=mainModel::limpiar_cadena($_POST['direccion']);

                $datosCliente=[
                    "Nombre"=>$nombre,
                    "Apellidos"=>$apellidos,
                    "Correo"=>$correo,
                    "Telefono"=>$telefono,
                    "Profesion"=>$profesion,
                    "Grado"=>$grado,
                    "Pais"=>$pais,
                    "Departamento"=>$departamento,
                    "Distrito"=>$distrito,
                    "Direccion"=>$direccion

                ];
                $guardarCliente=clienteModelo::agregar_cliente_modelo($datosCliente);

            }
        }


