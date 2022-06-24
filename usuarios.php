<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <h1>Cadastro de Usuarios</h1>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarusuarios.php">
    <fieldset id="cad">
    <legend>Usuarios</legend>
    <p><label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="30" maxlenght="100" placeholder="Digite o seu nome"></p>
    <p><label for="sobrenome">Sobrenome:</label><input type="text" name="sobrenome" id="sobrenome" size="36" maxlenght="100" placeholder="Digite o seu sobrenome"></p>
    <p><label for="datanasc">Data de nascimento:</label><input type="text" name="datanasc" id="datanasc" size="29" maxlenght="100" placeholder="Digite a sua datade nascimento"></p>
    <p><label for="email">E-mail:</label><input type="text" name="email" id="email" size="32" maxlenght="100" placeholder="Digite o seu e-mail"></p>
    <p><label for="rua">Rua:</label><input type="text" name="rua" id="rua" size="36" maxlenght="100" placeholder="Digite a sua rua"></p>
    <p><label for="numero">Numero:</label><input type="number" name="numero" id="numero" size="30" maxlenght="100" placeholder="Digite o numero"></p>
    <p><label for="bairro">Bairro:</label><input type="text" name="bairro" id="bairro" size="30" maxlenght="100" placeholder="Digite o seu bairro"></p>
    <p><label for="cidade">Cidade:</label><input type="text" name="cidade" id="cidade" size="27" maxlenght="100" placeholder="Digite a sua cidade"></p>
    <p><label for="cep">CEP:</label><input type="text" name="cep" id="cep" size="30" maxlenght="100" placeholder="Digite o seu cep"></p>
    <p><label for="estado">Estado:</label><input type="text" name="estado" id="estado" size="36" maxlenght="100" placeholder="Digite o seu estado"></p>
    <p><label for="cpf">CPF:</label><input type="text" name="cpf" id="cpf" size="29" maxlenght="100" placeholder="Digite o seu cpf"></p>
    <p><label for="rg">RG:</label><input type="text" name="rg" id="rg" size="32" maxlenght="100" placeholder="Digite o seu rg"></p>
    <p><label for="celular">Celular:</label><input type="text" name="celular" id="celular" size="36" maxlenght="100" placeholder="Digite o seu celular"></p>
    <p><label for="genero">Genero:</label><input type="text" name="genero" id="genero" size="30" maxlenght="100" placeholder="Digite o seu genero"></p>
    <p><label for="sexualidade">Sexualidade:</label><input type="text" name="sexualidade" id="sexualidade" size="30" maxlenght="100" placeholder="Digite a sua sexualidade"></p>
    <p><label for="estadocivil">Estado Civil:</label><input type="text" name="estadocivil" id="estadocivil" size="27" maxlenght="100" placeholder="Digite o seu estado civil"></p>
    <p><label for="cor">Cor:</label><input type="text" name="cor" id="cor" size="27" maxlenght="100" placeholder="Digite a sua cor"></p>
    <br>
    <hr>
    <input type="submit" value="Cadastrar">
    <hr>
</form>
</body>
</html>