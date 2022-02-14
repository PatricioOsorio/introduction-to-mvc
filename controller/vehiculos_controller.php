<?php
class VehiculosController
{
  public function __construct()
  {
    require_once "model/vehiculos_model.php";
  }

  public function index()
  {
    $vehiculos = new VehiculosModel();
    $data["Titulo"] = "Vehiculos";
    $data["Vehiculos"] = $vehiculos->getVehiculos();

    require_once "view/vehiculos_view.php";
  }

  public function nuevo()
  {
    $data["titulo"] = "Vehiculos";
    require_once "view/vehiculos/vehiculos_nuevo.php";
  }

  public function Save()
  {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $vehiculos = new VehiculosModel();
  }
}
