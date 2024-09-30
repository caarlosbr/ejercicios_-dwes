<?php
    /**
    * @author carlosbr <a24boreca@gmail.com>:
    * @time
    * @return 
    */

// Definimos el perfil de usuario (puede venir de la sesión, base de datos, etc.)
$perfil = "Administrador"; // Cambia a "Usuario" para probar con otro perfil

// Definimos las páginas según el perfil
$enlacesAdministrador = [
    "Pagina1" => "pagina1.php",
    "Pagina2" => "pagina2.php",
    "Pagina3" => "pagina3.php",
    "Pagina4" => "pagina4.php"
];

$enlacesUsuario = [
    "Pagina1" => "pagina1.php",
    "Pagina2" => "pagina2.php"
];

// Función para mostrar enlaces
function mostrarEnlaces($enlaces) {
    echo "<ul>";
    foreach ($enlaces as $nombre => $url) {
        echo "<li><a href='$url'>$nombre</a></li>";
    }
    echo "</ul>";
}

// Mostrar enlaces según el perfil
if ($perfil == "Administrador") {
    echo "<h2>Enlaces para Administrador</h2>";
    mostrarEnlaces($enlacesAdministrador);
} elseif ($perfil == "Usuario") {
    echo "<h2>Enlaces para Usuario</h2>";
    mostrarEnlaces($enlacesUsuario);
} else {
    echo "<h2>Perfil no reconocido</h2>";
}

  echo "<div>";
     echo "<a href='https://github.com/caarlosbr/ejercicios_-dwes/blob/8aa3e541f76f90bb90d3ba205f452ee014bc060d/UD3/03Condicionales/05.php'>Ver código</a>";
     echo "</div>";
?>
