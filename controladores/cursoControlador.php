<?php


if ($peticionAjax) {
    require_once('../modelos/cursoeModelo.php');
} else {
    require_once('./modelos/cursoModelo.php');
}

class cursoControlador extends cursoModelo{

    public function agregar_curso_controlador(){
        $categoria=mainModel::limpiar_cadena($_POST['categoria']);
        $nombre=mainModel::limpiar_cadena($_POST['nombre']);
        $duracion=mainModel::limpiar_cadenas($_POST['duracion']);
        $descripcion=mainModel::limpiar_cadena($_POST['descripcion']);
        $fechainicio=mainModel::limpiar_cadena($_POST['fechainicio']);
        $fechafin=mainModel::limpiar_cadena($_POST['fechafin']);
        $horario=mainModel::limpiar_cadena($_POST['horario']);
        $costomatricula=mainModel::limpiar_cadena($_POST['costomatricula']);
        $costocertificado=mainModel::limpiar_cadena($_POST['costocertificado']);
        $costoalternativo=mainModel::limpiar_cadena($_POST['costoalternativo']);
        $horascertificado=mainModel::limpiar_cadena($_POST['horascertificado']);
        $modalidad=mainModel::limpiar_cadena($_POST['modalidad']);
        $docente=mainModel::limpiar_cadena($_POST['docente']);


        $sql->bindParam(":Horascerti",$datos['Horascerti']);
        $sql->bindParam(":Docente",$datos['Docente']);
        $sql->bindParam(":Modalidad",$datos['Modalidad']);

        $datosCurso=[
            "Categoria"=>$categoria,
            "Nombre"=>$nombre,
            "Descripcion"=>$descripcion,
            "Duracion"=>$duracion,
            "FechaI"=>$fechainicio,
            "FechaF"=>$fechafin,
            "Horario"=>$horario,
            "Costomatricula"=>$costomatricula,
            "Costocerti"=>$costocertificado,
            "Costoalternativo"=>$costoalternativo,
            "Horascerti"=>$horascertificado,
            "Modalidad"=>$modalidad,
            "Docente"=>$docente

        ];
        $guardarCurso=cursoModelo::agregar_curso_modelo($datosCurso);

    }
}


