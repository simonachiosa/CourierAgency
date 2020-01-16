<html>
<head>


</head>


<body>

  
 <form method = "post">
                  <label>AWB:</label><input type = "text" name = "AWB" class = "box"/><br /><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
                  


<?php
   
$servername = "127.0.0.1";
$username = "root";
$password = "";

$AWB= filter_input(INPUT_POST,'AWB');

try {
    $conn = new PDO("mysql:host=$servername;dbname=curierat", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "select loc_comanda from ruta r, colet c, comenzi co where r.cod_colet=c.cod_colet and c.cod_comanda=co.cod_comanda and co.cod_comanda='$AWB'";
		foreach($conn->query($sql) as $row){
      

    if($row['loc_comanda']=='plasata'){
      echo "<img src='images/comanda_plasata.png'>";
   }

   if($row['loc_comanda']=='predata'){
        echo "<img src='images/produse_predate.png'>";
   }

   if($row['loc_comanda']=='depozit'){
      echo "<img src='images/comanda_depozit.png'>";
   }

   if($row['loc_comanda']=='livrate'){
        echo "<img src='images/produse_livrare.png'>";
   }
   
   if($row['loc_comanda']=='curs'){
        echo "<img src='images/produse_curs.png'>";
   }
   
   }

}
    
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    $conn = null;
    }
  
    
?>

</body>

</html>