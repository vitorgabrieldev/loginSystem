<?php
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "</tr>";

    include_once('configMain.php');
    $res = mysqli_query($mysqli, "SELECT * FROM users");

    while ($registro = mysqli_fetch_array($res))
    {
        $nomeReq = $registro['nome'];

        echo "<tr>";
        echo "<td>".$nomeReq."</td>";
        echo "</tr>";
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Visualizar usuarios</title>
</head>
<body></body>
</html>