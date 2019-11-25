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
$cod_masina=filter_input(INPUT_POST, 'cod_masina');
$marca=filter_input(INPUT_POST, 'marca');
$model=filter_input(INPUT_POST, 'model');
$capacitate=filter_input(INPUT_POST, 'capacitate');
$an_asamblare=filter_input(INPUT_POST, 'an_asamblare');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
$sql="UPDATE masini SET marca='$marca',model='$model',capacitate='$capacitate',an_asamblare='$an_asamblare',cod_hub='$cod_hub'  where cod_cont=$cod_masina";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_masina=filter_input(INPUT_POST, 'cod_masina');
$marca=filter_input(INPUT_POST, 'marca');
$model=filter_input(INPUT_POST, 'model');
$capacitate=filter_input(INPUT_POST, 'capacitate');
$an_asamblare=filter_input(INPUT_POST, 'an_asamblare');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');

$sterge="Delete from masini where cod_masina=$cod_masina";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 