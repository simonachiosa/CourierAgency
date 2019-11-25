<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$adresa=filter_input(INPUT_POST, 'adresa');
$adresa_mail=filter_input(INPUT_POST, 'adresa_mail');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into clienti(nume,prenume,telefon,adresa,adresa_mail) Values('$nume','$prenume','$telefon','$adresa','$adresa_mail')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>