<?php
$mysql_host = 'localhost:3306';
$mysql_user = 'root';
$mysql_password = 'emsys$$$';
$mysql_db = 'kyu_db';
try {
	$pdo = new PDO("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec("set names utf8;");
} catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}
?>
