<?php
if ($peticionAjax) {
    require_once('../core/mainModel.php');
} else {
    require_once('./core/mainModel.php');
}

class secundariosModelo extends mainModel
{

    protected function agregar_estados_modelo($datos)
    {
    
        $sql=self::conectar()->prepare("INSERT INTO 
        estado(nombre_estado, descri_estado, color)
        VALUES(:Nombre, :Descripcion, :Color)");
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Descripcion", $datos['Descripcion']);
        $sql->bindParam(":Color", $datos['Color']);
        $sql->execute();
        return $sql;
    }

    protected function agregar_categoria_modelo($datos)
    {
    
        $sql=self::conectar()->prepare("INSERT INTO
        categoria(nombre_cat, descripcion_cat)
        VALUES(:Nombre, :Descripcion)");
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Descripcion", $datos['Descripcion']);
        $sql->execute();
       return $sql;
    }

    protected function agregar_permiso_modelo($datos)
    {
        $sql=self::conectar()->prepare("INSERT INTO 
        cargo(puesto, descripion)
        VALUES(:Puesto, :Descripcion)");
        $sql->bindParam(":Puesto",$datos['Puesto']);
        $sql->bindParam(":Descripcion",$datos['Descripcion']);
        $sql->execute();
        return $sql;
    }
}

