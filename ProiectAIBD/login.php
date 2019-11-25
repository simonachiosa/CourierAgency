   <?php
   
$servername = "127.0.0.1";
$username = "root";
$password = "";
$Username=filter_input(INPUT_POST, 'Username');
$Parola=filter_input(INPUT_POST, 'Parola');
$Rol=filter_input(INPUT_POST, 'Rol');
try {
    $conn = new PDO("mysql:host=$servername;dbname=curierat", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
		$sql = "select Rol from conturi_angajati where Username='$Username' and Parola='$Parola'";
		foreach($conn->query($sql) as $row){
      
    echo "Autentificare cu succes!Bun venit ".$Username; 
    if($row['Rol']=='client'){
sleep(3);
  echo "Autentificare cu succes!Bun venit ".$Username; 
  
header('Location:inreg_comenzi.html');
 
   }
   }

}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
  
    
?>
<p>Veti fi redirectat in 3 secunde..</p>
<script>
//aici ai pagina pentru cel ce nu intra in rolul de sus
var timer = setTimeout(function(){window.location.href='tabel.php'},3000);
</script>