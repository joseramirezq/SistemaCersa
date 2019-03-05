<?php

class vistasModelo
{

    protected function obtener_vistas_modelo($vistas)
    {
        //lista blanca , menos el login
        $listaBlanca = [
            "home",
            "usuario",

            //vistas clientes
            "listacliente",
            "agregarcliente",
            "detallecliente",

            //vistas curso
            "listacurso",
            "agregarcurso",

            //vista usuarios
            "listausuario",
            "agregarusuario",


            //vistas reportes
            "graficos"
        ];

        //si el valor que recibe de el controladro esta en la lista blanca
        if (in_array($vistas, $listaBlanca)) {

            if (is_file("./vistas/contenidos/".$vistas."-vista.php")) {
                $contenido = "./vistas/contenidos/".$vistas."-vista.php";
            } else { 
                $contenido = "login";
            }
        } elseif ($vistas == "login") {
            $contenido = "login";
        } elseif ($vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
