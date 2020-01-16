<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>AWB Tracking</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">AWB Tracking</h2>
                    <form action="AWB_tracking.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="AWB" name="AWB">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">Cauta</button>
                        </div>
                    </form>
                </div>
        </div>
        <br>
        <div class="wrapper wrapper--w780">
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
</div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>