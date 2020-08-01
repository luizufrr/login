<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$con = mysql_connect("localhost", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("cmbv") or die("Sem acesso ao DB, Entre em
contato com o Administrador!");

$result = mysql_query("SELECT * FROM `USUARIO` WHERE `EMAIL` = '$email' AND `SENHA`= '$senha'");

if(mysql_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('location:chamados.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('location:login.php');

  }
?>