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
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
$dimensiune=filter_input(INPUT_POST, 'dimensiune');
$greutate=filter_input(INPUT_POST, 'greutate');
$cod_comanda=filter_input(INPUT_POST, 'cod_comanda');

$sql="UPDATE colet SET dimensiune='$dimensiune',greutate='$greutate',cod_comanda='$cod_comanda' where cod_colet=$cod_colet";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
$dimensiune=filter_input(INPUT_POST, 'dimensiune');
$greutate=filter_input(INPUT_POST, 'greutate');
$cod_comanda=filter_input(INPUT_POST, 'cod_comanda');

$sterge="Delete from colet where cod_colet=$cod_colet";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 