<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$marca=filter_input(INPUT_POST, 'marca');
$model=filter_input(INPUT_POST, 'model');
$capacitate=filter_input(INPUT_POST, 'capacitate');
$an_asamblare=filter_input(INPUT_POST, 'an_asamblare');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into masini(marca,model,capacitate,an_asamblare,cod_hub) Values('$marca','$model','$capacitate','$an_asamblare','$cod_hub')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>