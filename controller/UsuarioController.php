
<?php

const URL_Usuarios = "https://jsonplaceholder.typicode.com/users";
const URL_Publicaciones = "https://jsonplaceholder.typicode.com/posts";
const URL_Comentarios = "https://jsonplaceholder.typicode.com/comments";

require("./helper/VistasHelper.php");

error_reporting(0);
class UsuarioController
{

    var $usuarios;
    var $publicaciones;
    var $comentarios;
    var $vistas;

    function __construct()
    {
        $this->vistas = new VistasHelper();
        $this->usuarios = json_decode(file_get_contents(URL_Usuarios));
        $this->publicaciones = null;
        $this->comentarios = null;
    }

    public function index()
    {
        
        if (!is_null($this->usuarios)) {
            $rowset = $this->usuarios;
            $this->vistas->vista("index", $rowset);
        } else {
            echo '<script type="text/javascript">alert("Error de conexion, porfavor reintente")</script>';
        }
    }

    public function verComentarios($postId)
    {

        $this->comentarios = json_decode(file_get_contents(URL_Comentarios . "?postId=" . $postId));
        if (!is_null($this->comentarios)) {
            $r = $this->comentarios;
            $this->vistas->vista("comentarios", $r);
        } else {
            echo '<script type="text/javascript">alert("Error de conexion, porfavor reintente")</script>';
            $this->index();
        }
    }

    public function verPublicaciones($userId)
    {
        $this->publicaciones = json_decode(file_get_contents(URL_Publicaciones . "?userId=" . $userId));
        if (!is_null($this->publicaciones)) {
            $r = $this->publicaciones;
            $this->vistas->vista("publicaciones", $r);
        } else {
            echo '<script type="text/javascript">alert("Error de conexion, porfavor reintente")</script>';
            $this->index();
        }
    }

    public function verDatos($id)
    {

        if (array_key_exists($id, $this->usuarios)) {
            $row = $this->usuarios[$id - 1];
            $this->vistas->vista("datosUsuario", $row);
        } else {
            $this->index();
       }
    }
}


?>