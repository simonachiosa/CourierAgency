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

$nume=filter_input(INPUT_POST, 'nume');
$prenume=filter_input(INPUT_POST, 'prenume');
$telefon=filter_input(INPUT_POST, 'telefon');
$adresa=filter_input(INPUT_POST, 'adresa');
$adresa_mail=filter_input(INPUT_POST, 'adresa_mail');
$Username=filter_input(INPUT_POST, 'Username');
$Parola=filter_input(INPUT_POST, 'Parola');

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql = "INSERT INTO clienti(nume,prenume,telefon,adresa,adresa_mail)
    VALUES ('$nume','$prenume','$telefon','$adresa','$adresa_mail')";
    $query="INSERT INTO conturi_angajati(Username,Parola,Rol) VALUES('$Username','$Parola','client')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn->exec($query);

    echo "Autentificare cu succes!Bun venit ".$Username;

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
