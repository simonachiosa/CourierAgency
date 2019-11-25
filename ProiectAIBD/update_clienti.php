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
$cod_clienti=filter_input(INPUT_POST, 'cod_clienti');
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$adresa=filter_input(INPUT_POST, 'adresa');
$adresa_mail=filter_input(INPUT_POST, 'adresa_mail');

$sql="UPDATE clienti SET nume='$nume',prenume='$prenume',telefon='$telefon',adresa='$adresa',adresa_mail='$adresa_mail' where cod_clienti=$cod_clienti";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_clienti=filter_input(INPUT_POST, 'cod_clienti');
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$adresa=filter_input(INPUT_POST, 'adresa');
$adresa_mail=filter_input(INPUT_POST, 'adresa_mail');

$sterge="Delete from clienti where cod_clienti=$cod_clienti";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 