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

  public function new()
  {
    $data["titulo"] = "Vehiculos";
    require_once "view/vehiculos/vehiculos_nuevo.php";
  }

  public function save()
  {
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $anio = $_POST['anio'];
    $color = $_POST['color'];

    $vehiculos = new VehiculosModel();
    $vehiculos->insert($placa, $marca, $modelo, $anio, $color);
    $data["Titulo"] = "Vehiculos";
    $this->index();
  }
  
  public function update()
  {
    $vehiculos = new VehiculosModel();

    $data["id"] = $id;
    $data["vehiculos"] = $vehiculos->getVehiculos($id);
    $data["Titulo"] = "Vehiculos";
    // require_once "view/vehiculos/vehiculos_nuevo.php";
  }
