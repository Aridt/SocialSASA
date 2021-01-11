<?php

require("./controller/UsuarioController.php");
$controller = new UsuarioController;

$home = "/SocialSASA/index.php/";

$ruta = str_replace($home, "", $_SERVER["REQUEST_URI"]);
$array_ruta = array_filter(explode("/", $ruta));

if (isset($array_ruta[0])  && is_numeric($array_ruta[1])) {

    switch ($array_ruta[0]) {
        case "datos";
            $controller->verDatos($array_ruta[1]);
            break;
        case "publicaciones";
            $controller->verPublicaciones($array_ruta[1]);
            break;
        case "comentarios";
            $controller->verComentarios($array_ruta[1]);
            break;

        default;
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
