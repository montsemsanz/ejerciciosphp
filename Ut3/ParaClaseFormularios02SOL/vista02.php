﻿<?php
     
    include "cabecera.php";
?>
    <form id='form' action="" method="post">
        <div>
        <label>Nombre</label>
        <input type="text" name="nombre"  /><br />
        <p>Qué aficiones tienes?</p><br />
        <input type="checkbox" name="cine" value="cine" />Cine<br />
        <input type="checkbox" name="lectura" value="lectura" />Lectura<br />
        <input type="checkbox" name="deporte" value="deporte" />Deporte<br />
        <input type="checkbox" name="baile" value="baile" />Baile<br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </div>
    </form>
<?php
    include "pie.php";
?>
