<?php

$usuario = "";

if($_POST['nome'] != ""){
    $usuario = $_POST['nome'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta do Formulario</title>
</head>
<body <?php if($usuario != ""){ echo "bgcolor=pink"; } ?>>
    <?php if($usuario != ""){ echo "<h1>Bem vindo(a) " . $usuario . "</h1>"; }?> <br>
    <?php if($_POST['endereco'] != ""){ echo "<h1>Endereço: " . $_POST['endereco'] . "</h1>"; }?><br>
    <?php if($_POST['bairro'] != ""){ echo "<h1>Bairro:" . $_POST['bairro'] . "</h1>"; }?> <br>
    <?php if($_POST['cep'] != ""){ echo "<h1>CEP: " . $_POST['cep'] . "</h1>"; }?>
</body>
</html>