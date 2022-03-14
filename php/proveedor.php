<?php

  
class Proveedor {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties
  
  private $nombre;
  private $cif; 
  private $direccion;     
  private $email;
  private $telefono;  
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($pNombre, $pCIF, $pDireccion, $pEmail,$pTelefono) {
  
    $this->nombre = $pNombre;
    $this->cif = $pCIF;
    $this->direccion = $pDireccion;
    $this->email = $pEmail;
    $this->telefono = $pTelefono;
   
  }
  
  //Getters

  function getNombre() {
    return $this->nombre;
  }

  function getCIF() {
    return $this->cif;
  }
  
  function getDireccion() {
    return $this->direccion;
  }

  function getEmail() {
    return $this->email;
  }
  
  function getTelefono() {
    return $this->telefono;
  }

  function imprimeProveedor() {
    return "<p>$this->nombre,$this->cif,$this->direccion,$this->email,$this->telefono</p>";
  }


  //sql para inserción del proveedor
  function getInsertSQL() {
    $sql = "INSERT INTO proveedores (nombre,cif,direccion,email,telefono) VALUES ('$this->nombre','$this->cif','$this->direccion','$this->email','$this->telefono') ";

    return $sql;
  }

  

}
?>