<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "cmbv";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>Enviando Chamado</title>

</head>
<body>

<?php

#$logado=$_SESSION['email']
$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$status=$_POST['status'];
$tombamento=$_POST['tombamento'];
$departamento=$_POST['departamento'];
$ocorrencia=$_POST['ocorrencia'];

$sql = mysql_query("INSERT INTO chamado(nome, tipo, status, tombamento, departamento, ocorrencia) VALUE('$nome', $tipo','$status', '$tombamento', '$departamento', '$ocorrencia')");

?>
<form name="cadatroform" method="post" action="chamados.php">
    <input type="submit" value="Novo Chamado"/>
</form>

<br />
<?php
if(isset($_POST["acao2"])){
    echo "<script>alert('Chamado realizado com sucesso')</script>";
}
?>


</body>

</html>