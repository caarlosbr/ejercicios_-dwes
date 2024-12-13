<?php
/**
 * Archivo de la clase Persona
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 */

// Clase Persona
 class Persona
 {
    private $_nombre;
    private $_apellido1;
    private $_apellido2;
    // Constructor
    public function __construct($nombre, $apellido1, $apellido2) 
    {
        $this->_nombre = $nombre; //  $this pseudo variable
        $this->_apellido1 = $apellido1;
        $this->_apellido2 = $apellido2;
    }
    
    /**
     * Summary of Saludo
     * @return void
     */
    public function Saludo(){
        echo "Hola mundo";
    }

    /**
     * Summary of Nombre
     * @return string
     */
    public function Nombre()
    {
        return $this->_nombre . " " . $this->_apellido1 . " " . $this->_apellido2;
    }
 }
?>