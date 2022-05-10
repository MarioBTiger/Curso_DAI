<?php 
    session_start();
?>
<p>BIENVENIDOS</p>

<form name="form1" method="post" action="pagina2.php">
<p>Nombre
    <input name="txt_nombre" type="text" id="txt_nombre">
        <?php
        $_SESSION["ESTADO"] = "OK"
        ?>
</p>
<p>
    <input type="submit" name="Submit" value="Enviar"'>
</p>
</form>


