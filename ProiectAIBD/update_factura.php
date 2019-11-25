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
$cod_factura=filter_input(INPUT_POST, 'cod_factura');
$total_plata=filter_input(INPUT_POST, 'total_plata');
$data_infiintarii=filter_input(INPUT_POST, 'data_infiintarii');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
$cod_clienti=filter_input(INPUT_POST, 'cod_clienti');

$sql="UPDATE factura SET total_plata='$total_plata',data_infiintarii='$data_infiintarii',cod_colet='$cod_colet',cod_clienti='$cod_clienti' where cod_factura=$cod_factura";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_factura=filter_input(INPUT_POST, 'cod_factura');
$total_plata=filter_input(INPUT_POST, 'total_plata');
$data_infiintarii=filter_input(INPUT_POST, 'data_infiintarii');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');
$cod_clienti=filter_input(INPUT_POST, 'cod_clienti');

$sterge="Delete from factura where cod_factura=$cod_factura";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 