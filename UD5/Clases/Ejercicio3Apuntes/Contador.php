<?php
/**
 * @author Carlos borreguero <email>
 */

class Contador
{
    private $contador; // Variable privada
    private static $instancia = 0; // Variable de clase

    // Constructor, 

    public function __construct($cont = 0){
        $this->contador = $cont;
        self::$instancia ++; // Se cre
    }

    /**
     * Summary of contar
     * @return static
     */
    public function contar(){
        $this->contador++;
        return $this;
    }

    /**
     * Summary of nInstancias
     * @return mixed
     */
    public static function nInstancias(){
        return self::$instancia;
    }

    /**
     * Summary of __tostring
     * @return string
     */
    public function __tostring(){
        return (string) $this->contador;
    }
}

