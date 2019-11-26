<?php  
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $Username=filter_input(INPUT_POST, 'Username');
    $Parola=filter_input(INPUT_POST, 'Parola');
    $Rol=filter_input(INPUT_POST, 'Rol');
    try {
        $conn = new PDO("mysql:host=$servername;dbname=curierat", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        $sql = "select Rol from conturi_angajati where Username='$Username' and Parola='$Parola'";
        
        foreach($conn->query($sql) as $row){    
            if($row['Rol']=='client')
                header('Location:plasare comanda.html');
       }
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
        $conn = null; 
    }       
?>
<script>
    var timer = setTimeout(function(){window.location.href='tabel.php'},3000);
</script>