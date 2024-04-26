<html>
<head>
<title>Formulier: invoer artikel</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="z. Eindopdracht home.php" class="active">Home</a>
  <a href="z. Eindopdracht klanten.php">Klanten</a>
  <a href="z. Eindopdracht producten.php">Producten</a>
  <a href="z. Eindproject factuur.php">Factuur</a>
  <a href="z. Eindopdracht bestellingen.php">Bestellingen</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<?php


include ("database.php");
$klantnr = $_POST['verstopt'];

$query = "SELECT * FROM klant WHERE klantnummer = $klantnr";
// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen
$rij = $resultaat->fetch_array(MYSQLI_ASSOC);

echo "

    <H1> Factuur klant</H1>
    <H3> Klantnaam $rij[naam]</H3>

    <table>
        <tr><td>Klantnummer: </td><td>$rij[klantnummer]</td></tr>
        <tr><td>Klantnaam: </td><td>$rij[naam]</td></tr>
        <tr><td>Adres: </td><td>$rij[adres]</td></tr>
        <tr><td>Postcode: </td><td>$rij[postcode]</td></tr>
        <tr><td>Woonplaats: </td><td>$rij[woonplaats]</td></tr>              
    </table>
";
// Reset resultaat
$resultaat->free_result();

echo "<H2>Details bestelling</H2>";

        $query = "SELECT * FROM orderregel
                    INNER JOIN `order` ON `order`.ordernummer = orderregel.ordernummer
                    INNER JOIN artikel ON orderregel.artikelnummer = artikel.artikelnummer
                    WHERE `order`.klantnummer = $klantnr";

        // Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
        $resultaat = $dbVerbinding->query($query);

        // De resultaten worden ingelezen in een array
        while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
        {
            $allerijen[] = $rij;
        }

        echo "<TABLE border='1'>
                <TR><TH>ordernr</TH>
                <TH>artikelnr</TH>
                <TH>omschrijving</TH>
                <TH>aantal</TH>
                <TH>prijs</TH>
                <TH>bedrag</TH></TR>
        ";

        // Elke regel uit de array wordt in een tabel getoond
        foreach ($allerijen as $record)
        {  
            echo"<TR><TD>$record[ordernummer]</TD>";
            echo"<TD>$record[artikelnummer]</TD>";
            echo"<TD>$record[artikelnaam]</TD>";
            echo"<TD>$record[aantal]</TD>";
            echo"<TD>$record[prijs]</TD>";
            $bedrag = $record['aantal']*$record['prijs'];
            echo"<TD>$bedrag</TD>";
            echo "</TR>";            
        }
        echo "</TABLE>";

        //reset resultaat en sluit de verbinding
        $resultaat->free_result();
        $dbVerbinding->close();
        

        
