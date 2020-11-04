<?php
require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){

		define('BASE_URL','http://localhost/car-ford/');
		$config['dbname'] = 'nova_mvc';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = ''; 


	}else{
	define('BASE_URL','http://carford.gq/');
		$dsn = "mysql:dbname=r7webd80_site_oficial;host=br310";
      $dbuser = "r7webd80_meusite";
      $dbpass = 'roteador35677';

	 $dataBase =  new PDO($dsn, $dbuser, $dbpass);

	}

  global $db;

try{

  
	
	//$db =      $db = $dataBase;



}catch(PDOException $e){

	echo 'FALHOU'.$e->getMessage();
	exit;

}