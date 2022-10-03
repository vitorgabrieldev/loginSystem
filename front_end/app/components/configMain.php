<?php

    // $user = 'id19663154_users_web_code';
    // $pass = '';
    // $database = 'id19663154_root';
    // $host = 'localhost';

    $user = 'root';
    $pass = '';
    $database = 'users_web_code';
    $host = 'localhost';

    $mysqli = new mysqli($host, $user, $pass, $database);

    if($mysqli->error)
    {
        die("Falha na conexão ao banco de dados".$mysqli->error);
    }
    
?>