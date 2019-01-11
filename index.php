<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="busca.php">
        <label for="cep">CEP</label>
        <input type="text" name="cep" id="cep" size="10" onblur="pesquisacep(this.value);"><br>
        <label for="rua">Rua</label>
        <input type="text" name="rua" id="rua" size="60"><br>
        <label for="bairro">Bairro</label>
        <input type="text" name="bairro" id="bairro"size="40"><br>
        <label for="cidade">Cidade</label>
        <input type="text" name="cidade" id="cidade" size="40"><br>
        <label for="uf">Estado</label>
        <input type="text" name="uf" id="uf" size="2"><br>
        
    </form>
</body>
</html>