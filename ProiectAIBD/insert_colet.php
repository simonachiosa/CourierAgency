<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$dimensiune=filter_input(INPUT_POST, 'dimensiune');
$greutate=filter_input(INPUT_POST, 'greutate');
$cod_comanda=filter_input(INPUT_POST, 'cod_comanda');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into colet(dimensiune,greutate,cod_comanda) Values('$dimensiune','$greutate','$cod_comanda')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>