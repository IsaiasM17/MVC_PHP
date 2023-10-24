<?php 

class VistasModelo {
    
    /*---------- MODELO OBTENER VISTAS ----------*/
    protected static function obtener_vistas_modelo($vistas){
        
        $listaBlanca = ["home", "client-new", "client-list", "client-search", "client-update",
        "reservation-new", "reservation-list", "reservation-pending", "reservation-reservation", "reservation-search", "reservation-update",
        "item-new", "item-list", "item-search", "item-update", 
        "user-list", "user-new", "user-search", "user-update", "company"];

        if(in_array($vistas, $listaBlanca)) {

            if(is_file("./vistas/contenidos/". $vistas . "-view.php")) {
                
                $contenido = "./vistas/contenidos/". $vistas . "-view.php";
            }else{

                $contenido = "404";
            
            }
        }elseif($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        }else{
            $contenido = "404";
        }
        return $contenido;
    }

}