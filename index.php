<?php
require_once "config/config.php";
require_once "core/routes.php";
require_once "database/connection.php";
require_once "controller/vehiculos_controller.php";

if (isset($_GET['c'])) {
  $controlador = cargarControlador($_GET['c']);

  if (isset($_GET['a'])) {
    (isset($_GET['id']))
      ? cargarAccion($controlador, $_GET['a'], $_GET['id'])
      : cargarAccion($controlador, $_GET['a']);
  } else {
    $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
    $accionTmp = ACCION_PRINCIPAL;
    $controlador->accionTmp();
  }
}

// $vehiculosController = new VehiculosController();
// $vehiculosController->index();
