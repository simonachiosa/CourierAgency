<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'curierat');
?>
<html>
  <head>
    <title>Invoice generator</title>
  </head>
  <body>
    select invoice:
    <form method = 'get' action = 'invoice-db.php'>
      <select name = 'invoiceID'>
        <?php
          $query = mysqli_query($con, "select * from clienti");
          while($invoice = mysqli_fetch_array($query)){
            echo "<option value='".$invoice['cod_clienti']."'>".$invoice['cod_clienti'].", ".$invoice['nume'].", ".$invoice['prenume']."</option>";
          }
        ?>
      </select>
      <input type = 'submit' value = 'Generate'>
    </form>
  </body>
</html>
