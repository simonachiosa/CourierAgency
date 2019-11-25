<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$cod_hub=filter_input(INPUT_POST, 'cod_hub');
$an_infiintare=filter_input(INPUT_POST, 'an_infiintare');
$locatie=filter_input(INPUT_POST, 'locatie');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into hub(an_infiintare,locatie) Values('$an_infiintare','$locatie')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>