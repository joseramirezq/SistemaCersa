<?php
    if ($peticionAjax) {
        require_once('../modelos/loginModelo.php');
    } else {
        require_once('./modelos/loginModelo.php');
    }

class loginControlador extends loginModelo{

    public function iniciar_sesion_controlador(){

        $usuario=mainModel::limpiar_cadena($_POST['usuario']);
        $pass=mainModel::limpiar_cadena($_POST['pass']);
        $datosLogin=[
            'Usuario'=>$usuario,
            'Clave'=>$pass,
            'Estado'=>1
        ];

        $datosCuenta=loginModelo::iniciar_sesion_modelo($datosLogin);

        if($datosCuenta-> rowCount()==1){
            $row=$datosCuenta->fetch();
            $fechaactual=date("Y-m-d");
            $yearActual=date("Y");
            $horaactual=date("h:i:s a");

            $consulta1=mainModel::ejecutar_consulta_simple("SELECT id FROM bitacora");
            $numero=($consulta1->rowCount())+1;
            $codigoB=mainModel::generar_codigo_aleatorio("CB", 7, $numero);
            $datosBitacora=[
                "Codigo"=>$codigoB,
                "Fecha"=>$fechaactual,
                "HoraInicio"=>$horaactual,
                "HoraFinal"=>"Sin registro",
                "Tipo"=>$row['permisos'],
               "Anio"=>$yearActual,
               "Cuenta"=>$row['codigousuario']

            ];
            $insertarBitacora=mainModel::guardar_bitacora($datosBitacora);
            if($insertarBitacora->rowCount()>=1){

            }else{
                    //alerta simple error 
                    //no hemos podido iniciar la session por problemas tecnicos
                    //por favor intente nuevamente
            }
        

        }
            else{
                //alerta de que ocurrio un error inesperado
                //El nomnbre de usuario u contraseña no son correctos o su cuenta puede estar desabilitada
            }

    }
    
}