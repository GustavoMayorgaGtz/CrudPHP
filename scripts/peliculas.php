
<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once '../database.php';
header('Content type: application/json');
extract($_POST);
try {
    $db = new Database();
    $db->conectarDB();
    // $accion = "seleccionar";
    switch ($accion) {
        case "insertar":
            $query =  "insert into peliculas(titulo, genero,duracion,clasificacion) values ('$titulo','$genero,','$duracion', $clasificacion)";
            $db->ejecutarSQL($query);

            break;
        case "seleccionar":
            $video["peliculas"] = $db->seleccionar("select idp, titulo, genero, duracion, clasificacion from peliculas");
            break;
        case "eliminar": {
                $query = "delete from peliculas where idp = $idp";
                $db->ejecutarSQL($query);
                break;
            }
        case "modificar": {
                $query = "update peliculas set titulo = '$titulo', genero = '$genero', duracion = '$duracion', clasificacion = $clasificacion where idp = $idp ";
                $db->ejecutarSQL($query);
                break;
            }
    }
    echo ($video != null) ? json_encode($video) : "{}";
    $db->desconectarDB();
} catch (Exception $e) {
    $e->getMessage();
}
?>