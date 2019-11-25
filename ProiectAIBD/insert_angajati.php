<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$salariu=filter_input(INPUT_POST, 'salariu');
$functie=filter_input(INPUT_POST, 'functie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into angajati(nume,prenume,salariu,functie,cod_hub) Values('$nume','$prenume','$salariu','$functie','$cod_hub')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>