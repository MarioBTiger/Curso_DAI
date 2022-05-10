<?PHP
session_start();

//vemos si el usuario y contraseña es válido

if ($_POST["usuario"]=="coquito" && $_POST["contrasena"]=="123"){
        //usuario y contraseña válidos
        //Crear  variable para la sesión
        $_SESSION ["autentificado"]= "si";
        $_SESSION ["user"]= $_POST["usuario"];
        $_SESSION ["pass"]= $_POST["contrasena"];
        header("Location:aplicacion.php");
}else {
        //si no existe, ir a la Página de Inicio
        header("Location: index.php?errorusuario=si");
}
?>

