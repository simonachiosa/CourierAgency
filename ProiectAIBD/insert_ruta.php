<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$loc_comanda=filter_input(INPUT_POST, 'loc_comanda');
$data=filter_input(INPUT_POST, 'data');
$ora=filter_input(INPUT_POST, 'ora');
$cod_angajat=filter_input(INPUT_POST, 'cod_angajat');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into ruta(loc_comanda,data,ora,cod_angajat,cod_colet) Values('$loc_comanda','$data','$ora','$cod_angajat','$cod_colet')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>