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
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
$an_infiintare=filter_input(INPUT_POST, 'an_infiintare');
$locatie=filter_input(INPUT_POST, 'locatie');

$sql="UPDATE hub SET an_infiintare='$an_infiintare',locatie='$locatie' where cod_hub=$cod_hub";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
$an_infiintare=filter_input(INPUT_POST, 'an_infiintare');
$locatie=filter_input(INPUT_POST, 'locatie');

$sterge="Delete from hub where cod_hub=$cod_hub";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 