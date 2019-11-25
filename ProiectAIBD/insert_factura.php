<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$total_plata=filter_input(INPUT_POST, 'total_plata');
$data_infiintarii=filter_input(INPUT_POST, 'data_infiintarii');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
$cod_clienti=filter_input(INPUT_POST, 'cod_clienti');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into factura(total_plata,data_infiintarii,cod_colet,cod_clienti) Values('$total_plata','$data_infiintarii','$cod_colet','$cod_clienti')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>