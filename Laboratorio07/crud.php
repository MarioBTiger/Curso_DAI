<?php 
include_once 'connection.php';

//<button name = save> 
if(isset($_POST['save'])){
    $titulo = $conn->real_escape_string($_POST['titulo']);
    $autor = $conn->real_escape_string($_POST['autor']);
    $url = $conn->real_escape_string($_POST['url']);

    $SQL = $conn->query("INSERT INTO data(titulo, autor, url) VALUES ('$titulo','$autor', '$url')");

    if(!$SQL){
        echo $conn->error;   
    }
}

// <url ?del>
if(isset($_GET['del'])){
    $SQL = $conn->query("DELETE FROM data WHERE id=".$_GET['del']);
}

// <url ?edit>
if(isset($_GET['edit'])){
    $SQL = $conn->query("SELECT * FROM data WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

// <button name = update> 
if(isset($_POST['update'])){
    $SQL = $conn->query("UPDATE data SET titulo='".$_POST['titulo']."', autor='".$_POST['autor']."', url='".$_POST['url']."' WHERE id=".$_GET['edit']);
}

?>