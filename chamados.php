<?php
session_start();

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }
$logado = $_SESSION['email'];
echo "Bem Vindo $logado";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Realize o Chamado</title>

</head>
<body>


<form name="signup" method="POST" action="chamando.php">
Nome: <input type="text" name="nome"/> <br /> <br />
Status: <select name="status">
    <option value="Novo">Novo</option>
</select><br /><br />
Equipamento: <select name="tipo">
    <option value="Computador">Computador</option>
    <option value="Notebook">Notebook</option>
    <option value="Impressora">Impressora</option>
    <option value="Monitor">Monitor</option>
    <option value="Rede">Rede</option>
    <option value="Internet">Internet</option>
</select>
<br/> <br /> 

Tombamento: <input type="text" name="tombamento"/><br /><br />

Setor: <select name="departamento" placeholder="Digite o departamento*" required>
    <option value="Mesa Diretora Presidência">Mesa Diretora Presidência</option>
    <option value="Gabinete Presidência">Gabinete Presidência</option>
    <option value="Diretoria de Creimonial">Diretoria de Creimonial</option>
    <option value="Diretoria de Expediente">Diretoria de Expediente</option>
    <option value="Diretoria de Relações Institucionais">Diretoria de Relações Institucionais</option>
    <option value="Corregedoria">Corregedoria</option>
    <option value="Procuradoria da Mulher">Procuradoria da Mulher</option>
    <option value="Procuradoria Administrativa">Procuradoria Administrativa</option>
    <option value="Procuradoria Legislativa">Procuradoria Legislativa</option>
    <option value="Procuradoria">Procuradoria</option>
    <option value="Comissão Permanente de Licitação">Comissão Permanente de Licitação</option>
    <option value="Direção Comissão Permanente de Licitação">Direção Comissão Permanente de Licitação</option>
    <option value="Divisão de Expediente">Divisão de Expediente</option>
    <option value="Divisão de Editais de Publicação">Divisão de Editais de Publicação</option>
    <option value="Controladoria">Controladoria</option>
    <option value="Sub. Controladoria de Auditoria de Controle Gestão">Sub. Controladoria de Auditoria de Controle Gestão</option>
    <option value="Sub. Controladoria de Execução Orçamentária">Sub. Controladoria de Execução Orçamentária</option>
    <option value="Sub. Controladoria de Informação e Transparência">Sub. Controladoria de Informação e Transparência</option>
    <option value="Ouvidoria">Ouvidoria</option>
</select> <br /><br />

Ocorrência: <textarea type="text" name="ocorrencia"></textarea><br /><br />

<form name="cadatroform" method="post" action="chamando.php">
    <input type="submit" value="Finalizar"/>
</form>
</form>

<br />

<form name="cadatroform" method="post" action="login.php">
    <input type="submit" value="Sair"/>
</form>

</body>




</html>
