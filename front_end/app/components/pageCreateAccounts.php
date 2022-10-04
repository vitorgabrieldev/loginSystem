<?php

    if(isset($_POST['submit']))
    {
        
        include('configMain.php');

        if(isset($_POST['nome']) || isset($_POST['password']))
        {
            if(strlen($_POST['nome']) == 0)
            {
                echo "Preencha seu nome !";
            } else if(strlen($_POST['password']) == 0) {
                echo "Preencha sua senha !";
            } else {
                $username = $mysqli->real_escape_string($_POST['nome']);
                $password = $mysqli->real_escape_string($_POST['password']);

                $sql_code = "INSERT INTO users (nome, senha) VALUES ('$username', '$password');";
                $sql_query = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);

                // $sql_code2 = "SELECT * FROM users WHERE nome = '$username' AND senha = '$password'";
                // $sql_query2 = $mysqli->query($sql_code) OR die("Falha na execução da query" . $mysqli->error);


                if(!isset($_SESSION)) { 
                    session_start();
                };

                // $_SESSION['nomeUser'] = $user['nome'];
                // $_SESSION['idUser'] = $user['id'];

                header("LOCATION: painelMain.php");

            };
        };

    };

    // Vitinhocraftyt100. = Password to database {000.webhost}


    // id19663154_root

    // id19663154_users_web_code

    // localhost

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <br>
        <input type="text" name="nome" id="username" placeholder="Insira seu nome : ">
        <br>
        <label for="password">Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Insira sua senha : ">
        <br><br>
        <!-- === Submit ===-->
        <input type="submit" value="Criar" name="submit" id="btnLogin">
    </form>
</body>
</html>