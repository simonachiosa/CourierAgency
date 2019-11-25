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
$cod_cont=filter_input(INPUT_POST, 'cod_cont');
$Username=filter_input(INPUT_POST, 'Username');
$Parola=filter_input(INPUT_POST, 'Parola');
$Rol=filter_input(INPUT_POST, 'Rol');

$sql="UPDATE conturi_angajati SET Username='$Username',Parola='$Parola',Rol='$Rol' where cod_cont=$cod_cont";
$conn->query($sql);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	  
	 if(isset($_POST['Sterge'])){
$cod_cont=filter_input(INPUT_POST, 'cod_cont');
$Username=filter_input(INPUT_POST, 'Username');
$Parola=filter_input(INPUT_POST, 'Parola');
$Rol=filter_input(INPUT_POST, 'Rol');

$sterge="Delete from conturi_angajati where cod_cont=$cod_cont";
$conn->query($sterge);
header('Location:tabel.php');
 }else{
      echo"eroare";}
	?>
	
    


  
 