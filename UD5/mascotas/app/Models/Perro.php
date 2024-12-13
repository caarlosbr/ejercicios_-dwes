<?php
/**
 * @author Carlos Borreguero Redondo <email>
 */

 namespace App\Models;

 class Perro
 {
  private $_color;
  private $_nombre;
  private $_habilidad;
  private $_sociabilidad;

  public function __construct($nombre, $color){
    $this->color = $color; 
    $this->nombre = $nombre; 
    $this->habilidad = 0; 
    $this->sociabilidad= 5; 
  }

  public function entrenar(){
    echo "<br/> Dar la pata<br/>";
    if($this->_habilidad <= 100)
    $this->_habilidad++;
  }

  public function darPata(){
    $retorno = "¿Como?";
    if($this->_habilidad > 5){
        $retorno = "Levanta la pata";
    }
    echo $retorno;
  }

 }