<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    }
catch(PDOException $e)
    {
	echo $sql."<br>".$e->getMessage(); 
	$conn = null;
    }
	if(isset($_POST['Modifica'])){
$data_plasare=filter_input(INPUT_POST, 'data_plasare');
$adresa_plecare=filter_input(INPUT_POST, 'adresa_plecare');
$adresa_destinatie=filter_input(INPUT_POST, 'adresa_destinatie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');

$sql="UPDATE comenzi SET data_plasare='$data_plasare',adresa_plecare='$adresa_plecare',adresa_destinatie='$adresa_destinatie', cod_hub='$cod_hub' where cod_comanda=$cod_comanda";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_comanda=filter_input(INPUT_POST, 'cod_comanda');
$data_plasare=filter_input(INPUT_POST, 'data_plasare');
$adresa_plecare=filter_input(INPUT_POST, 'adresa_plecare');
$adresa_destinatie=filter_input(INPUT_POST, 'adresa_destinatie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');

$sterge="Delete from comenzi where cod_comanda=$cod_comanda";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 