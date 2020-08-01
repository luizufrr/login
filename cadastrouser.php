<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Sistema de Cadastro</title>
</head>
<body>
<form name="signup" method="POST" action="cadastrandouser.php">
    Nome: <input type="text" name="nome"/> <br /><br />
    Sobrenome: <input type="text" name="sobrenome"/><br /><br />
    Data de Nascimento: <input type="date" id="start" name="datadenscimento" value="datadenscimento"
       min="1900-01-01" max="2005-12-31"><br /><br />
    Cargo: <input type="text" name="cargo"/><br /><br />
    Email: <input type="text" name="email" placeholder="Digite seu E-Mail*" required/><br /><br />
    Senha: <input type="password" name="senha"/><br /><br />
    <input type="submit" value="Finalizar"/>

</form>

</body>

</html>