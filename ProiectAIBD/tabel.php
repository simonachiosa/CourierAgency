
<html>
<head>
<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DPD Romania</title>
	<meta name="description" content="Blueprint: A basic template for a responsive multi-level menu" />
	<meta name="keywords" content="blueprint, template, html, css, menu, responsive, mobile-friendly" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	<script src="js/modernizr-custom.js"></script>
<style>

* {
  box-sizing: border-box;
}

#myInput1 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 2em;
  margin-top: 100px;
}

.formInsert {
   margin: 50px 300px 0px 0px;
}

.insertBtn {
  display: inline-block;
  line-height: 40px;
  padding: 0 33px;
  font-family: Poppins, Arial, "Helvetica Neue", sans-serif;
  cursor: pointer;
  color: #fff;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  font-size: 18px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
  background: #5c5edc;
}

#myInput2 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#comenzi {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#comenzi td, #comenzi th {
  border: 1px solid #ddd;
  padding: 8px;
}

#comenzi tr:nth-child(even){background-color: #f2f2f2;}

#comenzi tr:hover {background-color: #ddd;}

#comenzi th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}




#myInput3 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#hub {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#hub td, #hub th {
  border: 1px solid #ddd;
  padding: 8px;
}

#hub tr:nth-child(even){background-color: #f2f2f2;}

#hub tr:hover {background-color: #ddd;}

#hub th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}



#myInput4 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#colet {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#colet td, #colet th {
  border: 1px solid #ddd;
  padding: 8px;
}

#colet tr:nth-child(even){background-color: #f2f2f2;}

#colet tr:hover {background-color: #ddd;}

#colet th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}



 #myInput5 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#angajati {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#angajati td, #angajati th {
  border: 1px solid #ddd;
  padding: 8px;
}

#angajati tr:nth-child(even){background-color: #f2f2f2;}

#angajati tr:hover {background-color: #ddd;}

#angajati th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}




 #myInput6 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#factura {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#factura td, #factura th {
  border: 1px solid #ddd;
  padding: 8px;
}

#factura tr:nth-child(even){background-color: #f2f2f2;}

#factura tr:hover {background-color: #ddd;}

#factura th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}




#myInput7 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#masini {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#masini td, #masini th {
  border: 1px solid #ddd;
  padding: 8px;
}

#masini tr:nth-child(even){background-color: #f2f2f2;}

#masini tr:hover {background-color: #ddd;}

#masini th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}




#myInput8 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#ruta {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#ruta td, #ruta th {
  border: 1px solid #ddd;
  padding: 8px;
}

#ruta tr:nth-child(even){background-color: #f2f2f2;}

#ruta tr:hover {background-color: #ddd;}

#ruta th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}



#myInput9 {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#clienti {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#clienti td, #clienti th {
  border: 1px solid #ddd;
  padding: 8px;
}

#clienti tr:nth-child(even){background-color: #f2f2f2;}

#clienti tr:hover {background-color: #ddd;}

#clienti th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #5c5edc;
  color: white;
}


</style>
</head>
 <body>
 <header class="bp-header cf">
    <div class="dummy-logo">
        <div class="dummy-icon foodicon foodicon--coconut"></div>
        <h2 class="dummy-heading">DPD Romania</h2>
    </div>
 </header>
 <nav id="ml-menu" class="menu">
 <div class="tab">
    <li  class="menu__item" role="menuitem">
        <button class="tablinks" onclick="opentab(event, 'Conturi_angajati')">Conturi</button>
    </li>
  <button class="tablinks" onclick="opentab(event, 'Comenzi')">Comenzi</button>
   <button class="tablinks" onclick="opentab(event, 'Hub')">Hub</button>
   <button class="tablinks" onclick="opentab(event, 'Colet')">Colet</button>
   <button class="tablinks" onclick="opentab(event, 'Angajati')">Angajati</button>
   <button class="tablinks" onclick="opentab(event, 'Factura')">Factura</button>
   <button class="tablinks" onclick="opentab(event, 'Masini')">Masini</button>
	<button class="tablinks" onclick="opentab(event,'Ruta')">Ruta</button>
	<button class="tablinks" onclick="opentab(event,'Clienti')">Clienti</button>
  </div>
  </nav>
 <div class="content">
 <div id="Conturi_angajati" class="tabcontent">
    <table id="customers">
    <tr class="header">
        <th>Cod</th>
        <th>User</th>
        <th>Parola</th>
        <th>Rol</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput1" onkeyup="myFunction1()" placeholder="Cauta User" title="Type in a name">

    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "curierat";

        $Username=filter_input(INPUT_POST, 'Username');
        $Parola=filter_input(INPUT_POST, 'Parola');
        $Rol=filter_input(INPUT_POST, 'Rol');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_cont,Username,Parola,Rol from conturi_angajati";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update.php method=post>";
        echo "<form action=insert.php method=post>";
            echo "<td><input type=text name=cod_cont value='".$row['cod_cont']."'></td>";
                echo "<td><input type=text name=Username value='".$row['Username']."'></td>";
                    echo "<td><input type=text name=Parola value='".$row['Parola']."'></td>";
                        echo "<td><input type=text name=Rol value='".$row['Rol']."'></td>";
                        echo "<td><input type=submit name='Modifica' value='Modifica'>";
                        echo "<td><input type=submit name='Sterge' value='Sterge'>";
                            echo "</form>";
                            echo "</form>";
                                echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form class="formInsert" action="insert.php" method="POST">
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Cod" name="cod_cont">
        </div>
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="User" name="Username">
        </div>
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Parola" name="Parola">
        </div>
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Rol" name="Rol">
        </div>
        <div class="p-t-10">
            <button class="insertBtn" type="submit">Insert</button>
        </div>
    </form>



    <script>
    function myFunction1() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput1");
      filter = input.value.toUpperCase();
      table = document.getElementById("customers");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    </script>
 </div>

 <div id="Comenzi" class="tabcontent">
    <table id="comenzi">
        <tr class="header">
        <th>Cod</th>
        <th>Data plasare</th>
        <th>Adresa plecare</th>
        <th>Adresa destinatie</th>
        <th>Cod Hub</th>
        <th>Modifica</th>
        <th>Sterge</th>
        </tr>

    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "curierat";

        $data_plasare=filter_input(INPUT_POST, 'data_plasare');
        $adresa_plecare=filter_input(INPUT_POST, 'adresa_plecare');
        $adresa_destinatie=filter_input(INPUT_POST, 'adresa_destinatie');
        $cod_hub=filter_input(INPUT_POST, 'cod_hub');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_comanda,data_plasare,adresa_plecare,adresa_destinatie,cod_hub from comenzi";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_comenzi.php method=post>";
        echo "<form action=insert_comenzi.php method=post>";
            echo "<td><input type=text name=cod_comanda value='".$row['cod_comanda']."'></td>";
                echo "<td><input type=text name=data_plasare value='".$row['data_plasare']."'></td>";
                    echo "<td><input type=text name=adresa_plecare value='".$row['adresa_plecare']."'></td>";
                        echo "<td><input type=text name=adresa_destinatie value='".$row['adresa_destinatie']."'></td>";
                            echo "<td><input type=text name=cod_hub value='".$row['cod_hub']."'></td>";
                            echo "<td><input type=submit name='Modifica' value='Modifica'>";
                            echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                echo "</form>";
                                echo "</form>";
                                    echo "</tr>";



    }
    ?>
    </table>
     <p></p>
    <form class="formInsert" action="insert_comenzi.php" method="POST">
        <div class="input-group">
            <input type="date" name="an_infiintare" placeholder="Data"  size="20" required />
        </div>
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Adresa plecare" name="adresa_plecare">
        </div>
        <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Adresa destinatie" name="adresa_destinatie">
        </div>
        
         <div class="input-group">
            <input class="input--style-3" type="text" placeholder="Cod Hub" name="cod_hub">
        </div>
        <div class="p-t-10">
            <button class="insertBtn" type="submit">Insert</button>
        </div>
    </form>



    <script>
    function myFunction2() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput2");
      filter = input.value.toUpperCase();
      table = document.getElementById("comenzi");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>

  <div id="Hub" class="tabcontent">
  <table id="hub">
    <tr class="header">
        <th>Cod</th>
        <th>An infiintare</th>
        <th>Locatie</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput3" onkeyup="myFunction3()" placeholder="Cauta locatie" title="Type in a name">

    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "curierat";

    $an_infiintare=filter_input(INPUT_POST, 'an_infiintare');
    $locatie=filter_input(INPUT_POST, 'locatie');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_hub,an_infiintare,locatie from hub";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_hub.php method=post>";
        echo "<form action=insert_hub.php method=post>";
            echo "<td><input type=text name=cod_hub value='".$row['cod_hub']."'></td>";
                echo "<td><input type=text name=an_infiintare value='".$row['an_infiintare']."'></td>";
                    echo "<td><input type=text name=locatie value='".$row['locatie']."'></td>";
                        echo "<td><input type=submit name='Modifica' value='Modifica'>";
                        echo "<td><input type=submit name='Sterge' value='Sterge'>";
                            echo "</form>";
                            echo "</form>";
                                echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_hub.php" method="post">
    <b>An infiintare:</b>
    <input type="date" name="an_infiintare" value=""  size="20" required /><br><br>
    <b>Locatie:</b>
    <input type="text" name="locatie" value=""  size="20" required /><br><br>
        <input type="submit">

    </form>



    <script>
    function myFunction3() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput3");
      filter = input.value.toUpperCase();
      table = document.getElementById("hub");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>

  <div id="Colet" class="tabcontent">
  <table id="colet">
    <tr class="header">
        <th>Cod</th>
        <th>Dimensiune</th>
        <th>Greutate</th>
        <th>Cod Comanda</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput4" onkeyup="myFunction4()" placeholder="Cauta dimensiune" title="Type in a name">

    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "curierat";

        $dimensiune=filter_input(INPUT_POST, 'dimensiune');
        $greutate=filter_input(INPUT_POST, 'greutate');
        $cod_comanda=filter_input(INPUT_POST, 'cod_comanda');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_colet,dimensiune,greutate,cod_comanda from colet";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_colet.php method=post>";
        echo "<form action=insert_colet.php method=post>";
            echo "<td><input type=text name=cod_colet value='".$row['cod_colet']."'></td>";
                echo "<td><input type=text name=dimensiune value='".$row['dimensiune']."'></td>";
                    echo "<td><input type=text name=greutate value='".$row['greutate']."'></td>";
                        echo "<td><input type=text name=cod_comanda value='".$row['cod_comanda']."'></td>";
                        echo "<td><input type=submit name='Modifica' value='Modifica'>";
                        echo "<td><input type=submit name='Sterge' value='Sterge'>";
                            echo "</form>";
                            echo "</form>";
                                echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_colet.php" method="post">
    <b>Dimensiune:</b>
    <input type="text" name="dimensiune" value=""  size="20" required /><br><br>
    <b>Greutate:</b>
    <input type="text" name="greutate" value=""  size="20" required /><br><br>
    <b>Cod comanda:</b>
    <input type="text" name="cod_comanda" value=""  size="20" required /><br><br>
        <input type="submit">

    </form>



    <script>
    function myFunction4() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput4");
      filter = input.value.toUpperCase();
      table = document.getElementById("colet");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }

    </script>

  </div>

  <div id="Angajati" class="tabcontent">
    <table id="angajati">
    <tr class="header">
        <th>Cod</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Salariu</th>
        <th>Functie</th>
        <th>Cod Hub</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput5" onkeyup="myFunction5()" placeholder="Cauta nume" title="Type in a name">

    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "curierat";

    $nume=filter_input(INPUT_POST, 'nume');
    $prenume=filter_input(INPUT_POST, 'prenume');
    $salariu=filter_input(INPUT_POST, 'salariu');
    $functie=filter_input(INPUT_POST, 'functie');
    $cod_hub=filter_input(INPUT_POST, 'cod_hub');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_angajat,nume,prenume,salariu,functie,cod_hub from angajati";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_angajati.php method=post>";
        echo "<form action=insert_angajati.php method=post>";
            echo "<td><input type=text name=cod_angajat value='".$row['cod_angajat']."'></td>";
                echo "<td><input type=text name=nume value='".$row['nume']."'></td>";
                    echo "<td><input type=text name=prenume value='".$row['prenume']."'></td>";
                        echo "<td><input type=text name=salariu value='".$row['salariu']."'></td>";
                            echo "<td><input type=text name=functie value='".$row['functie']."'></td>";
                                echo "<td><input type=text name=cod_hub value='".$row['cod_hub']."'></td>";
                                echo "<td><input type=submit name='Modifica' value='Modifica'>";
                                echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                    echo "</form>";
                                    echo "</form>";
                                        echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_angajati.php" method="post">
    <b>Nume:</b>
    <input type="text" name="nume" value=""  size="20" required /><br><br>
    <b>Prenume:</b>
    <input type="text" name="prenume" value=""  size="20" required /><br><br>
    <b>Salariu:</b>
    <input type="text" name="salariu" value=""  size="20" required /><br><br>
    <b>Functie:</b>
    <input type="text" name="functie" value=""  size="20" required /><br><br>
    <b>Cod Hub:</b>
    <input type="text" name="cod_hub" value=""  size="20" required /><br><br>
        <input type="submit">

    </form>



    <script>
    function myFunction5() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput5");
      filter = input.value.toUpperCase();
      table = document.getElementById("angajati");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>

  <div id="Factura" class="tabcontent">
    <table id="factura">
    <tr class="header">
        <th>Cod</th>
        <th>Total plata</th>
        <th>Data infiintare</th>
        <th>Cod colet</th>
        <th>Cod client</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput6" onkeyup="myFunction6()" placeholder="Cauta total" title="Type in a name">

    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "curierat";

        $total_plata=filter_input(INPUT_POST, 'total_plata');
        $data_infiintarii=filter_input(INPUT_POST, 'data_infiintarii');
        $cod_colet=filter_input(INPUT_POST, 'cod_colet');
        $cod_clienti=filter_input(INPUT_POST, 'cod_clienti');

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_factura,total_plata,data_infiintarii,cod_colet,cod_clienti from factura";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_factura.php method=post>";
        echo "<form action=insert_factura.php method=post>";
            echo "<td><input type=text name=cod_factura value='".$row['cod_factura']."'></td>";
                echo "<td><input type=text name=total_plata value='".$row['total_plata']."'></td>";
                    echo "<td><input type=text name=data_infiintarii value='".$row['data_infiintarii']."'></td>";
                        echo "<td><input type=text name=cod_colet value='".$row['cod_colet']."'></td>";
                            echo "<td><input type=text name=cod_clienti value='".$row['cod_clienti']."'></td>";

                                echo "<td><input type=submit name='Modifica' value='Modifica'>";
                                echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                    echo "</form>";
                                    echo "</form>";
                                        echo "</tr>";



    }
    ?>
    </table>
    <br><br>
     <p></p>
		 <?php
		 $con = mysqli_connect('localhost', 'root', '');
		 mysqli_select_db($con, 'curierat');
		 ?>
         <input class="input--style-3" type="text" placeholder="Select Invoice : ">
    <br><br>
     <form method = 'get' action = 'invoice-db.php'>
       <select name = 'invoiceID' class="input--style-3">
         <?php
           $query = mysqli_query($con, "select * from clienti");
           while($invoice = mysqli_fetch_array($query)){
             echo "<option value='".$invoice['cod_clienti']."'>".$invoice['cod_clienti'].", ".$invoice['nume'].", ".$invoice['prenume']."</option>";
           }
         ?>
       </select>
       <br><br>
       <div class="p-t-10">
            <button class="insertBtn" type="submit">Generate</button>
        </div>
     </form>
     <form class="formInsert" action="insert_factura.php" method="post">
     <div class="input-group">
         <input class="input--style-3" type="text" placeholder="Total plata" name="total_plata">
    </div>
    <div class="input-group">
        <input class="input--style-3" type="text" placeholder="Data infiintarii" name="data_infiintarii">
    </div>
    <div class="input-group">
        <input class="input--style-3" type="text" placeholder="Cod colet" name="cod_colet">
    </div>
    <div class="input-group">
        <input class="input--style-3" type="text" placeholder="Cod client" name="cod_clienti">
    </div>
    <div class="p-t-10">
        <button class="insertBtn" type="submit">Insert</button>
    </div>
    </form>


    <script>
    function myFunction6() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput6");
      filter = input.value.toUpperCase();
      table = document.getElementById("factura");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>

  <div id="Masini" class="tabcontent">
    <table id="masini">
    <tr class="header">
        <th>Cod</th>
        <th>Marca</th>
        <th>Model</th>
        <th>Capacitate</th>
        <th>An asamblare</th>
        <th>Cod Hub</th>
        <th>Modifica</th>
        <th>Sterge</th>
        </tr>
    <input type="text" id="myInput7" onkeyup="myFunction7()" placeholder="Cauta marca" title="Type in a name">

    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "curierat";

    $marca=filter_input(INPUT_POST, 'marca');
    $model=filter_input(INPUT_POST, 'model');
    $capacitate=filter_input(INPUT_POST, 'capacitate');
    $an_asamblare=filter_input(INPUT_POST, 'an_asamblare');
    $cod_hub=filter_input(INPUT_POST, 'cod_hub');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_masina,marca,model,capacitate,an_asamblare,cod_hub from masini";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_masini.php method=post>";
        echo "<form action=insert_masini.php method=post>";
            echo "<td><input type=text name=cod_masina value='".$row['cod_masina']."'></td>";
                echo "<td><input type=text name=marca value='".$row['marca']."'></td>";
                    echo "<td><input type=text name=model value='".$row['model']."'></td>";
                        echo "<td><input type=text name=capacitate value='".$row['capacitate']."'></td>";
                            echo "<td><input type=text name=an_asamblare value='".$row['an_asamblare']."'></td>";
                                    echo "<td><input type=text name=cod_hub value='".$row['cod_hub']."'></td>";

                                echo "<td><input type=submit name='Modifica' value='Modifica'>";
                                echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                    echo "</form>";
                                    echo "</form>";
                                        echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_masini.php" method="post">
    <b>Marca:</b>
    <input type="text" name="marca" value=""  size="20" required /><br><br>
    <b>Model:</b>
    <input type="text" name="model" value=""  size="20" required /><br><br>
    <b>Capacitate:</b>
    <input type="text" name="capacitate" value=""  size="20" required /><br><br>
    <b>An asamblare:</b>
    <input type="date" name="an_asamblare" value=""  size="20" required /><br><br>
    <b>Cod Hub:</b>
    <input type="text" name="cod_hub" value=""  size="20" required /><br><br>

        <input type="submit">

    </form>



    <script>
    function myFunction7() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput7");
      filter = input.value.toUpperCase();
      table = document.getElementById("masini");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>

  <div id="Ruta" class="tabcontent">
    <table id="ruta">
    <tr class="header">
        <th>Cod</th>
        <th>Loc comanda</th>
        <th>Data</th>
        <th>Ora</th>
        <th>cod_angajat</th>
        <th>cod_colet</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput8" onkeyup="myFunction8()" placeholder="Cauta loc comanda" title="Type in a name">

    <?php
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "curierat";

        $loc_comanda=filter_input(INPUT_POST, 'loc_comanda');
        $data=filter_input(INPUT_POST, 'data');
        $ora=filter_input(INPUT_POST, 'ora');
        $cod_angajat=filter_input(INPUT_POST, 'cod_angajat');
        $cod_colet=filter_input(INPUT_POST, 'cod_colet');


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_ruta,loc_comanda,data,ora,cod_angajat,cod_colet from ruta";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_ruta.php method=post>";
        echo "<form action=insert_ruta.php method=post>";
            echo "<td><input type=text name=cod_ruta value='".$row['cod_ruta']."'></td>";
                echo "<td><input type=text name=loc_comanda value='".$row['loc_comanda']."'></td>";
                    echo "<td><input type=text name=data value='".$row['data']."'></td>";
                        echo "<td><input type=text name=ora value='".$row['ora']."'></td>";
                            echo "<td><input type=text name=cod_angajat value='".$row['cod_angajat']."'></td>";
                                    echo "<td><input type=text name=cod_colet value='".$row['cod_colet']."'></td>";

                                echo "<td><input type=submit name='Modifica' value='Modifica'>";
                                echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                    echo "</form>";
                                    echo "</form>";
                                        echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_ruta.php" method="post">
    <b>Loc comanda:</b>
    <input type="text" name="loc_comanda" value=""  size="20" required /><br><br>
    <b>Data:</b>
    <input type="date" name="data" value=""  size="20" required /><br><br>
    <b>Ora:</b>
    <input type="time" name="ora" value=""  size="20" required /><br><br>
    <b>Cod angajat:</b>
    <input type="text" name="cod_angajat" value=""  size="20" required /><br><br>
    <b>Cod colet:</b>
    <input type="text" name="cod_colet" value=""  size="20" required /><br><br>

        <input type="submit">

    </form>

    <script>
    function myFunction8() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput8");
      filter = input.value.toUpperCase();
      table = document.getElementById("ruta");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
  </div>


  <div id="Clienti" class="tabcontent">
    <table id="clienti">
    <tr class="header">
        <th>Cod</th>
        <th>Nume</th>
        <th>Prenume</th>
        <th>Telefon</th>
        <th>Adresa</th>
        <th>Adresa mail</th>
        <th>Modifica</th>
        <th>Sterge</th>
    </tr>
    <input type="text" id="myInput9" onkeyup="myFunction9()" placeholder="Cauta nume" title="Type in a name">

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


    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="select cod_clienti,nume,prenume,telefon,adresa,adresa_mail from clienti";

        }
    catch(PDOException $e)
        {
        echo $sql."<br>".$e->getMessage();
        $conn = null;
        }
        foreach($conn->query($sql) as $row){
            echo"<tr>";
        echo "<form action=update_clienti.php method=post>";
        echo "<form action=insert_clienti.php method=post>";
            echo "<td><input type=text name=cod_clienti value='".$row['cod_clienti']."'></td>";
                echo "<td><input type=text name=nume value='".$row['nume']."'></td>";
                echo "<td><input type=text name=prenume value='".$row['prenume']."'></td>";
                    echo "<td><input type=text name=telefon value='".$row['telefon']."'></td>";
                        echo "<td><input type=text name=adresa value='".$row['adresa']."'></td>";
                            echo "<td><input type=text name=adresa_mail value='".$row['adresa_mail']."'></td>";
                            echo "<td><input type=submit name='Modifica' value='Modifica'>";
                            echo "<td><input type=submit name='Sterge' value='Sterge'>";
                                echo "</form>";
                                echo "</form>";
                                    echo "</tr>";



    }
    ?>
    </table>
     <p></p>
     <form action="insert_comenzi.php" method="post">
    <b>Cod clienti:</b>
    <input type="text" name="cod_clienti" value=""  size="20" required /><br><br>
    <b>Nume:</b>
    <input type="text" name="nume" value=""  size="20" required /><br><br>
    <b>Prenume:</b>
    <input type="text" name="prenume" value=""  size="20" required /><br><br>
    <b>Telefon:</b>
    <input type="text" name="telefon" value=""  size="20" required /><br><br>
    <b>Adresa:</b>
    <input type="text" name="adresa" value=""  size="20" required /><br><br>
    <b>Adresa mail:</b>
    <input type="text" name="adresa_mail" value=""  size="20" required /><br><br>
        <input type="submit">

    </form>
    <script>
    function myFunction9() {
      var input, filter, table, tr, td, i, txtValue, txtbx;
      input = document.getElementById("myInput9");
      filter = input.value.toUpperCase();
      table = document.getElementById("clienti");
      tr = table.getElementsByTagName("tr");
      for (i = 1; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtbx = td.getElementsByTagName("input")[0];
          txtValue = txtbx.value;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>
 </div>
 </div>
     <script>
    function opentab(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>

</body>
</html>
