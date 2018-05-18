
<?php
try{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$db = new PDO('mysql:host=localhost;dbname=search_db;charset=utf8', 'user', 'password',$pdo_options);
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}
?>