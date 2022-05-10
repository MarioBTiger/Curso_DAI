<?php
        session_start();

    if ($_SESSION["ESTADO"] != "OK")
            header("Location: index.php");
            
?>

<?php
        echo ("Hola".$_POST["txt_nombre"]);
?>
