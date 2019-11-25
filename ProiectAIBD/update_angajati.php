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
$cod_angajat=filter_input(INPUT_POST, 'cod_angajat');
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$salariu=filter_input(INPUT_POST, 'salariu');
$functie=filter_input(INPUT_POST, 'functie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');

$sql="UPDATE angajati SET nume='$nume',prenume='$prenume',salariu='$salariu',functie='$functie',cod_hub='$cod_hub where cod_angajat=$cod_angajat";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$salariu=filter_input(INPUT_POST, 'salariu');
$functie=filter_input(INPUT_POST, 'functie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');

$sterge="Delete from angajati where cod_angajat=$cod_angajat";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 