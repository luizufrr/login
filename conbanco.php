<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/vendor/autoload.php';

// database configuration parameters
$conn = array(
    //'driver' => 'pdo_sqlite',
    //'path' => __DIR__ . '/db.sqlite',
	'host' => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'cmbv',);
if(isset($_ENV['DOCKER'])) {
	$conn['host'] = 'mysql';
	$conn['password'] = 'root';
}

if (substr(phpversion(),0,1) == '4') {
	$mysql = mysql_connect($conn['host'], $conn['user'], $conn['password'], $conn['dbname']) 
		or die("Sem conexão com o servidor. Error: ".mysql_error());
	mysql_select_db($conn['banco']) or die("Sem acesso ao DB, Entre em
		contato com o Administrador! Error: ".mysql_error());
} else {
	$mysql = mysqli_connect($conn['host'], $conn['user'], $conn['password'], $conn['dbname']);
	mysqli_select_db($mysql,$conn['dbname']) or die("Sem acesso ao DB, Entre em
		contato com o Administrador! Error: ".mysqli_error($mysql));
}

$query = function($sql) use ($mysql){
		if (substr(phpversion(),0,1) == '4') {
			return mysql_query($sql);
		} else {
			return mysqli_query($mysql,$sql);
		}
	};
$num_rows = function($result){
		if (substr(phpversion(),0,1) == '4') {
			return mysql_num_rows($result);
		} else {
			return mysqli_num_rows($result);
		}
	};
//$sql = $query("INSERT INTO USUARIO(nome, sobrenome, datanasci, cargo, email, senha)
//                VALUE('nome2', 'sobrenome', 'datadenscimento', 'cargo', 'email', 'senha')");

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode,null,null,false);
// or if you prefer XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
//set alias
$db = $entityManager;
?>
