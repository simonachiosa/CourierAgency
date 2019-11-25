<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$data_plasare=filter_input(INPUT_POST, 'data_plasare');
$adresa_plecare=filter_input(INPUT_POST, 'adresa_plecare');
$adresa_destinatie=filter_input(INPUT_POST, 'adresa_destinatie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into comenzi(data_plasare,adresa_plecare,adresa_destinatie,cod_hub) Values('$data_plasare','$adresa_plecare','$adresa_destinatie','$cod_hub')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>