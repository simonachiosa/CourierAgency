<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$Username=filter_input(INPUT_POST, 'Username');
$Parola=filter_input(INPUT_POST, 'Parola');
$Rol=filter_input(INPUT_POST, 'Rol');
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$inserare="insert into conturi_angajati(Username,Parola,Rol) Values('$Username','$Parola','angajat')";
  $conn->query($inserare);
  header('Location:tabel.php');
    }
catch(PDOException $e)
    {
	echo $inserare."<br>".$e->getMessage(); 
	$conn = null;
    }
	
?>