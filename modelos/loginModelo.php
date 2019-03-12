<?php
if ($peticionAjax) {
    require_once('../core/mainModel.php');
} else {
    require_once('./core/mainModel.php');
}

class loginModelo extends mainModel{
    protected function iniciar_sesion_modelo($datos){
        $sql=mainModel::conectar()->prepare("SELECT * FROM usuario
        WHERE usuario_us=:Usuario AND pass_us=:Clave AND estado_us=:Estado");
        $sql->bindParam(":Usuario",$datos['Usuario']);
        $sql->bindParam(":Clave",$datos['Clave']);
        $sql->bindParam(":Estado",$datos['Estado']);
        $sql->execute();
        return $sql;

    }
}