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
$cod_ruta=filter_input(INPUT_POST, 'cod_ruta');
$loc_comanda=filter_input(INPUT_POST, 'loc_comanda');
$data=filter_input(INPUT_POST, 'data');
$ora=filter_input(INPUT_POST, 'ora');
$cod_angajat=filter_input(INPUT_POST, 'cod_angajat');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');

$sql="UPDATE ruta SET loc_comanda='$loc_comanda',data='$data',ora='$ora',cod_angajat='$cod_angajat',cod_colet='$cod_colet' where cod_ruta=$cod_ruta";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_ruta=filter_input(INPUT_POST, 'cod_ruta');
$loc_comanda=filter_input(INPUT_POST, 'loc_comanda');
$data=filter_input(INPUT_POST, 'data');
$ora=filter_input(INPUT_POST, 'ora');
$cod_angajat=filter_input(INPUT_POST, 'cod_angajat');
$cod_colet=filter_input(INPUT_POST, 'cod_colet');

$sterge="Delete from ruta where cod_ruta=$cod_ruta";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 