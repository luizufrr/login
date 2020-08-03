<?php
require_once __DIR__ . '/header.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Cadastrando...</title>

</head>
<body>

<?php
// usado addslashes para evitar ataques de sql injection
$nome=addslashes($_POST['nome']);
$sobrenome=addslashes($_POST['sobrenome']);
$datadenscimento=addslashes($_POST['datadenscimento']);
$cargo=addslashes($_POST['cargo']);
$email=addslashes($_POST['email']);
$senha=addslashes($_POST['senha']);

// funcao definida no arquivo de configuracao para oferecer suporte ao php4
//veja o README seccao Bibliotecas > doctrine/orm para mais informacoes
$sql = $query("INSERT INTO USUARIO(nome, sobrenome, datanasci, cargo, email, senha)
				VALUE('$nome', '$sobrenome', '$datadenscimento', '$cargo', '$email', '$senha')");
?>

<form name="cadatroform" method="post" action="login.php">
    <input type="submit" value="Voltar ao Login"/>
</form>

</body>

</html>
