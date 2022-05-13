<?php
    define('_HOST_NAME','localhost');
    define('_DATABASE_NAME','laboratorio08');
    define('_DATABASE_USER_NAME','root');
    define('_DATABASE_PASSWORD','');

    $conn = new MySQLi(_HOST_NAME,
        _DATABASE_USER_NAME,_DATABASE_PASSWORD,
        _DATABASE_NAME);

    if($conn -> connect_error)
    {
        die("ERROR : -> ".$conn->connect_error);
    }