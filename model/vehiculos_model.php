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

  public function getVehiculos()
  {
    $query = "SELECT * FROM `vehiculos`";
    $result = $this->db->query($query);

    while ($row = $result->fetch_assoc()) {
      $this->vehiculos[] = $row;
    }

    return $this->vehiculos;
  }
}
