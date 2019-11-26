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
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO clienti(nume,prenume,telefon,adresa,adresa_mail)
        VALUES ('$nume','$prenume','$telefon','$adresa','$adresa_mail')";
        $query="INSERT INTO conturi_angajati(Username,Parola,Rol) VALUES('$Username','$Parola','client')";
        
        $conn->exec($sql);
        $conn->exec($query);
       } catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
       }

    $conn = null;
?>
<script>
    var timer = setTimeout(function(){
    window.location.href='index.html'},3000);
</script>
