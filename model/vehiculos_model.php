<?php
class VehiculosModel
{
  private $db;
  private $vehiculos;

  public function __construct()
  {
    $this->db = Connection::connect();
    $this->vehiculos = array();
  }

  public function getVehiculo($id)
  {
    $query = "SELECT * FROM `vehiculos` WHERE id = '$id'";
    $result = $this->db->query($query);
    $row = $result->fetch_assoc();

    return $row;
  }

  public function getVehiculos()
  {
    $query = "SELECT * FROM `vehiculos`";
    $result = $this->db->query($query);

    while ($row = $result->fetch_assoc()) {
      $this->vehiculos[] = $row;
    }

    return $this->vehiculos;
  }

  public function create($placa, $marca, $modelo, $anio, $color)
  {
    $result = $this->db->query("INSERT INTO vehiculos (placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");
  }

  public function update($placa, $marca, $modelo, $anio, $color)
  {
    $result = $this->db->query("UPDATE vehiculos SET placa = '$placa', marca = '$marca', modelo = '$modelo', anio = '$anio', color = '$color'");
  }

  public function delete($id)
  {
    $result = $this->db->query("DELETE FROM vehiculos WHERE id = '$id'");
  }
}
