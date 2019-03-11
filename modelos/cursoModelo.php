<?php
if ($peticionAjax) {
    require_once('../core/mainModel.php');
} else {
    require_once('./core/mainModel.php');
}

class cursoModelo  extends mainModel{
    protected function agregar_curso_modelo($datos){
   
        $sql=self::conectar()->prepare("INSERT INTO 
        especialidad(idcategoria, nombre_es, descripcion_es, duracion_es, fecha_inicio, fecha_fin , horas_certificado, costo_matricula, costo_certi, costo_alternativo)
        VALUES(:Idcategoria, :Nombre, :Descripcion, :Duracion , :FechaI, :FechaF, :Horascerti, :Costomatricula, :Costocerti, :Costoalternativo )");
      
        $sql->bindParam(":Idcategoria",$datos['Categoria']);
        $sql->bindParam(":Nombre",$datos['Nombre']);
        $sql->bindParam(":Descripcion",$datos['Descripcion']);
        $sql->bindParam(":Duracion",$datos['Duracion']);
        $sql->bindParam(":FechaI",$datos['FechaI']);
        $sql->bindParam(":FechaF",$datos['FechaF']);
        $sql->bindParam(":Horascerti",$datos['Horascerti']);
        $sql->bindParam(":Costomatricula",$datos['Costomatricula']);
        $sql->bindParam(":Costocerti",$datos['Costocerti']);
        $sql->bindParam(":Costoalternativo",$datos['Costoalternativo']);
        $sql->bindParam(":Horario",$datos['Horario']);
        $sql->bindParam(":Docente",$datos['Docente']);
        $sql->bindParam(":Modalidad",$datos['Modalidad']);

        $sql->execute();
        return $sql;
    }
}