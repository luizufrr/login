<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Cadastrando...</title>

</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$banco = "cmbv";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<?php
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$datadenscimento=$_POST['datadenscimento'];
$cargo=$_POST['cargo'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO USUARIO(nome, sobrenome, datanasci, cargo, email, senha) VALUE('$nome', '$sobrenome', '$datadenscimento', '$cargo', '$email', '$senha')");
?>

<form name="cadatroform" method="post" action="login.php">
    <input type="submit" value="Voltar ao Login"/>
</form>

</body>

</html>