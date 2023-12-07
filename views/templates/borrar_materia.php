<?php
require_once "./controllers/materiaController.php";

$id = $vista[1];

if (isset($_SESSION["rol"]) and $_SESSION["rol"] == "Admin") {
  $alert = eliminarMateriaPorId($id);
}

header("Location: $URL/listado_materias");