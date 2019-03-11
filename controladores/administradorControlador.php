<?php
     if ($peticionAjax) {
        require_once('../modelos/administradorModelo.php');
    } else {
        require_once('./modelos/administradorModelo.php');
    }

    class administradorControlador extends administradorModelo{
        
        public function agregar_administrador_controlador(){

            $cargo=mainModel::limpiar_cadena($_POST['cargo']);
            $nombre=mainModel::limpiar_cadena($_POST['nombre']);
            $apellidos=mainModel::limpiar_cadena($_POST['apellidos']);
            $usuario=mainModel::limpiar_cadena($_POST['usuario']);
            $pass1=mainModel::limpiar_cadena($_POST['pass1']);
            $pass2=mainModel::limpiar_cadena($_POST['pass2']);
            $telefono=mainModel::limpiar_cadena($_POST['telefono']);
            $correo=mainModel::limpiar_cadena($_POST['correo']);
            $permiso=mainModel::limpiar_cadena($_POST['permiso']);

            $consulta3=mainModel::ejecutar_consulta_simple("SELECT 
            idusuario FROM usuario ");
            $numero=($consulta3->rowCount())+1;
            $codigo=mainModel::generar_codigo_aleatorio("US", 3, $numero);
            

           if($pass1!=$pass2){

            //alertas para mostrar en caso no se ejecuta algo 
               /* $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"Las contraseñas que acabas de ingresar no coinciden, intente nuevamente",
                    "Tipo"=>"error"
                ];
                return mainModel::sweet_alert($alerta);*/
                
               // echo "las contraseñas no coinciden";
            }else{
                $dataUsuario=[
                    "Idcargo"=>$cargo,
                    "Codigo"=>$codigo, 
                    "Nombre"=>$nombre,
                    "Apellidos"=>$apellidos,
                    "Correo"=>$correo, 
                    "Telefono"=>$telefono,            
                    "Usuario"=>$usuario, 
                    "Pass"=>$pass1, 
                    "Estado"=>"1", 
                    "Permiso"=>"$permiso"
                    
                   
                ];
                $guardarUsuario=administradorModelo::agregar_administrador_modelo($dataUsuario);
           
              /*  $consulta1=mainModel::ejecutar_consulta_simple("SELECT 
                usuario_us FROM usuario WHERE usuario_us='$usuario'");
                if ($consulta1->rowCount()>=1) {
                        $alerta=[
                            "Alerta"=>"simple",
                            "Titulo"=>"Ocurrio un error inesperado",
                            "Texto"=>"El usuario que acaba de ingresar ya se encuentra registrado en el sistema",
                            "Tipo"=>"error"
                        ];
                } else {
                    if($correo!=""){
                        $consulta2=mainModel::ejecutar_consulta_simple("SELECT 
                          correo_us FROM usuario WHERE correo_us='$correo'");
                          $ec=$consulta2->rowCount();

                    }else{
                        $ec=0;


                    }
                    if($ec>=1){
                        //ERROR SI EL IMAIL SE ENCUENTRA INGRESADO
                        $alerta=[
                            "Alerta"=>"simple",
                            "Titulo"=>"Ocurrio un error inesperado",
                            "Texto"=>"El EMAIL qeu acaba ingresar ya se enceuntra registrado en el sistema",
                            "Tipo"=>"error"
                        ];
                    }else{
                        //GENERANDO CODIGO DEL USUARIO
                        $consulta3=mainModel::ejecutar_consulta_simple("SELECT 
                        idusuario FROM usuario ");
                        $numero=($consulta3->rowCount())+1;
                        $codigo=mainModel::generar_codigo_aleatorio("US", 3, $numero);
                        
                        //ENCRIPTAR PASS
                        $clave=mainModel::encryption($pass1);

                        //ENVIANDO DATOS AL MODELO
                        $dataUsuario=[
                            "Idcargo"=>$cargo,
                            "Codigo"=>$codigo, 
                            "Nombre"=>$nombre,
                            "Apellidos"=>$apellidos,
                            "Correo"=>$correo, 
                            "Telefono"=>$telefono,            
                            "Usuario"=>$usuario, 
                            "Pass"=>$pass1, 
                            "Estado"=>"1", 
                            "Permiso"=>"$permiso"
                            
                           
                        ];
                        $guardarUsuario=administradorModelo::agregar_administrador_modelo($dataUsuario);
                        //VERIFICAMOS SI SE INSERTO EL REGISTRO
                        if($guardarUsuario->rowCount()>=1){
                            $alerta=[
                                "Alerta"=>"limpiar",
                                "Titulo"=>"Usuario Registrado",
                                "Texto"=>"El usuario se ha registrado con exito en el sistema",
                                "Tipo"=>"success"
                            ];
                        }else{
                            $alerta=[
                                "Alerta"=>"simple",
                                "Titulo"=>"Ocurrio un error inesperado",
                                "Texto"=>"No hemos podido insertar el usuario en el sistema",
                                "Tipo"=>"error"
                            ];
                        }
                    }
                }
                
*/
            }
            //return mainModel::sweet_alert($alerta);
            
        }
    }
    