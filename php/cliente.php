<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties
  
  private $nombre;
  private $pApellido; 
  private $sApellido;     
  private $DNI;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($cNombre, $cPApellido, $cSApellido, $cDNI) {
  
    $this->nombre = $cNombre;
    $this->pApellido = $cPApellido;
    $this->sApellido = $cSApellido;
    $this->DNI = $cDNI;
   
  }
  
  //Getters

  function getNombre() {
    return $this->nombre;
  }

  function getPrimerApellido() {
    return $this->pApellido;
  }
  
  function getSegundoApellido() {
    return $this->sApellido;
  }

  function getDNI() {
    return $this->DNI;
  }
  

  function imprimeCliente() {
    return "<p>$this->nombre,$this->pApellido,$this->sApellido,$this->DNI</p>";
  }


  //sql para inserción del cliente
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (nombre, pApellido, sApellido, DNI) VALUES ('$this->nombre','$this->pApellido','$this->sApellido','$this->DNI') ";

    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "nombredes":
        $sql = $sql . "nombre DESC";
        break;
      case "pApellidoasc":
        $sql = $sql . "pApellido ASC";
        break;
      case "pApellidodesc":
          $sql = $sql . "pApellido DESC";
          break;
      case "sApellidoasc":
          $sql = $sql . "sApellido ASC";
          break;
      case "sApellidodesc":
          $sql = $sql . "sApellido DESC";
          break;
      default:
        $sql = $sql . "nombre ASC";
    }

    return $sql;
  }


}
?>