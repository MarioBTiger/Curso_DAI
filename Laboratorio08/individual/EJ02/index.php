<form action="control.php" method="POST">
<tr>
    <td colspan="2" align="center"
        <?PHP
        if(isset($_GET["errorusuario"])){?>
        <?php 
            if($_GET['errorusuario']=="si")
            ?>
            bgcolor=red><span style="color:ffffff"><b>Datos incorrectos </b></span>
        <?PHP }else{?>
            bgcolor=#ccccc>lntroduce tu clave de acceso
        <?PHP }?></td>
</tr><br>
<tr>
    <td align="right">Usuario:</td>
    <td><input type="Text" name="usuario" size="8" maxlength="50"></td>
</tr><br>
<tr>
    <td align="right">Clave:</td>
    <td><input type="password" name="contrasena" size="8" maxlength="50"></td>
</tr><br>
<tr> <td> <input type="Submit" value="ENTRAR"></td>
</tr>
</form>
 
