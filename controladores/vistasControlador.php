<?php

    require_once "./modelos/vistasModelo.php";

    

    class vistasControlador extends vistasModelo
    {
        /*------- controlador para obtener plantilla------------*/

        public function obtener_plantilla_controlador(){

            return require_once "./vistas/plantilla.php";
        }

        /*------- controlador para obtener vistas------------*/

        public function obtener_vistas_controlador(){

            if(isset($_GET['vistas'])){
                $ruta=explode("/",$_GET['vistas']);
                $respuesta=vistasModelo::obtener_vistas_modelo($ruta[0]);
            }else{
                $respuesta="home";

            }
            return $respuesta;
        }
    }

