<?php
session_start();
require_once __DIR__ . '/header.php';

// usado addslashes para evitar ataques de sql injection
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

// funcao definida no arquivo de configuracao para oferecer suporte ao php4
//veja o README seccao Bibliotecas > doctrine/orm para mais informacoes
$result = $query("SELECT * FROM `USUARIO` WHERE `EMAIL` = '$email' AND `SENHA`= '$senha'");

// funcao definida no arquivo de configuracao para oferecer suporte ao php4
//veja o README seccao Bibliotecas > doctrine/orm para mais informacoes
if($num_rows($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
header('Location: chamados.php');
}
else{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);
  header('Location: login.php');

  }
?>
