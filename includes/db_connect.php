<?php
/*
db_connect.php
definierar variabler:
*/

$host = "localhost";
$user = "dhg17";
$pass = "mysql2018";
$db = "register";

try{
	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
	// ställer in PDO felmeddelanden
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//	echo "Databaskontakten lyckades!";
}
catch(PDOException $e) {
	echo "Databaskontakten misslyckades: " . $e->getMessage();
}
?>