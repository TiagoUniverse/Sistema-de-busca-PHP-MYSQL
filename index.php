<?php

require_once "conexao.php";

$pesquisa = $mysqli->real_escape_string( $_GET['busca']);
$sql_code = "SELECT * from comida where nome LIKE '%$pesquisa%' or preco LIKE '%$pesquisa%' ";
$sql_query = $mysqli->query($sql_code) or die("Error ao consultar: " . $mysqli->error);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de busca</title>
</head>
<body>
    <h1>Lista de comidas</h1>
    <form action="">
        <input name="busca" placeholder="Digite os termos de pesquisa" style="width: 200px;" type="text">
        <button type="submit" >Pesquisar</button>
    </form>

    <br>
    <table border="1" width="400px">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
        <tr>
            <td colspan="2">Digite algo para pesquisar...</td>
        </tr>
    </table>
</body>
</html>