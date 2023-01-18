<?php
// Tiago César da Silva Lopes || 18/01/23

$id_comida = $_POST['id_comida'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de registros</title>
</head>

<body>
    <h1>Alteração de registros</h1>
    <a type="button" href="index.php">Voltar</a>

    <form method="post" action="cadastro2.php">
        <h2>Altere o registro abaixo:</h2>
        <h7>Nome do alimento:</h7>
        <input type="text" name="nome" value="<?php ?>"  placeholder="Nome do alimento:">

        <br><br>
        <h7>Preço:</h7>
        <input type="int" name="preco" placeholder="Preço: (1.00)">

        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>