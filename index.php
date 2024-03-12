<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form name="cadastro" method="POST" action="resposta.php">
        Nome: <input type="text" name ="nome"> <br><br>
        Endereço: <input type="text" name ="endereco"> <br><br>
        Bairro: <input type="text" name ="bairro"> <br><br>
        Cep: <input type="text" name ="cep"> <br><br>
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>