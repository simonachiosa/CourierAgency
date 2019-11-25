<!DOCTYPE HTML>
<html>
<head>

</head>
<body>
<?php 
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "curierat";

$data_plasare=filter_input(INPUT_POST, 'data_plasare');
$adresa_plecare=filter_input(INPUT_POST, 'adresa_plecare');
$adresa_destinatie=filter_input(INPUT_POST, 'adresa_destinatie');
$cod_hub=filter_input(INPUT_POST, 'cod_hub');
$dimensiune=filter_input(INPUT_POST, 'dimensiune');
$greutate=filter_input(INPUT_POST, 'greutate');
$cod_comanda=filter_input(INPUT_POST, 'cod_comanda');


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO comenzi(cod_comanda,data_plasare,adresa_plecare,adresa_destinatie,cod_hub)
    VALUES ('$cod_comanda','$data_plasare','$adresa_plecare','$adresa_destinatie','1')";
    $query="INSERT INTO colet(dimensiune,greutate,cod_comanda) VALUES('$dimensiune','$greutate','$cod_comanda')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);
   
    echo "Comanda plasata! "; 
    
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
<p>Veti fi redirectat in 5 secunde..</p>
<script>
var timer = setTimeout(function(){
window.location.href='pag1.html'},5000);
</script>
</body>
</html>