<?php
if ($peticionAjax) {
    require_once('../core/mainModel.php');
} else {
    require_once('./core/mainModel.php');
}

class clienteModelo  extends mainModel{
    protected function agregar_cliente_modelo($datos){
   
        $sql=self::conectar()->prepare("INSERT INTO 
         cliente(nombres_cli, apellidos_cli ,correo_cli, telefono_cli, profesion_cli, grado_cli, pais_cli, departamento_cli, distrito_cli, direccion_cli)
         VALUES(:Nombre, :Apellidos, :Correo, :Telefono, :Profesion, :Grado, :Pais, :Departamento, :Distrito, :Direccion)");
        $sql->bindParam(":Nombre",$datos['Nombre']);
        $sql->bindParam(":Apellidos",$datos['Apellidos']);
        $sql->bindParam(":Correo",$datos['Correo']);
        $sql->bindParam(":Telefono",$datos['Telefono']);
        $sql->bindParam(":Profesion",$datos['Profesion']);
        $sql->bindParam(":Grado",$datos['Grado']);
        $sql->bindParam(":Pais",$datos['Pais']);
        $sql->bindParam(":Departamento",$datos['Departamento']);
        $sql->bindParam(":Distrito",$datos['Distrito']);
        $sql->bindParam(":Direccion",$datos['Direccion']);

        $sql->execute();
        return $sql;
    }
}