<?php
/**
 * Archivo para instanciar las clases que estamos creando
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 * 
 */

 // Requerimos clase Persona
 require_once "Persona.php";
 require_once "Alumno.php";

 // Creamos un objeto 
$persona = new Persona("Carlos", "Borreguero", "Redondo");
$alumno = new Alumno("Carlos", "Borreguero", "Redondo");

$persona->Saludo();
echo "<br/>";
echo $persona->Nombre();
echo "<br/>";
echo $alumno->Saluda();




?>