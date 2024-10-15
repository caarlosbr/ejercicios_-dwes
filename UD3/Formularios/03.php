<?php

/**
 * Formulario para crear un currículum que incluya: Campos de texto, grupo de
 * botones de opción, casilla de verificación, lista de selección única, lista de
 * selección múltiple, botón de validación, botón de imagen, botón de reset, etc.
 * 
 * @author Carlos Borreguero Redondo <a24boreca@iesgrancapitan.org>
 * @version 8.3.6
 */

    $idiomas = array ("Inglés", "Francés", "Alemán", "Portugués", "Italiano", "Español" );
    $conocimientos = array ("Frontend", "Backend", "Full-Stack");

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <h1>Currículum Vitae</h1>
    <div>
        <h3>Información personal</h3>
        <form action="" method="post">
            <label for="nombre">Nombre y apellidos</label>
            <input type="text" name="nombre"><br/>
            <label for="edad">Edad</label>
            <input type="number" name="edad"><br/>
            <label for="localidad">Localidad</label>
            <input type="text" name="localidad"><br/>      

        <h3>Nivel de Idiomas</h3>
            <?php
                // Generar los checkboxes para cada idioma
                for ($i = 0; $i < count($idiomas); $i++) {
                    echo "<input type='checkbox' name='idiomas[]' value='$idiomas[$i]'> $idiomas[$i]<br>";
                }
            ?>

        <h3>Conocimientos</h3>
            <label for="conocimientos">Escoge en que se siente mas cómodo</label>
            <select name="conocimientos" id="conocimientos">
                <?php
                    for($i = 0; $i < count($conocimientos); $i++){
                        echo "<option value='$conocimientos[$i]'>$conocimientos[$i]</option>";
                    } 
                ?>

            </select><br><br>

            <input type="submit" value="Enviar"><br><br>

            <input type="reset" value="Restablecer">

        </form>

        

    </div>


 </body>
 </html>