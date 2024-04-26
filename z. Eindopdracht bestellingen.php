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
<br>
<input type ="button" value="Nieuwe bestelling maken" onClick="window.location.href='z. Eindopdracht bestelling maken.php'">

<?php
        //in database.php wordt de verbinding naar de database gemaakt//
        include("database.php");
        ?>
        
        <H1> Overzicht bestellingen</H1>
        <TABlE border="1">
        <TR>
        
        <TD>Ordernummer</TD>
        <TD>Klantnummer</TD>
        <TD>Orderdatum</TD>
        <TD>Betaald</TD>
        <TD>Wijzigen</TD>
        
        </TR>
         
        <?php
        
        // Bepaal query
        // Selecteer de eerste 5 klanten
        $query="SELECT * FROM `order` LIMIT 100";
        
        // Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
        $resultaat = $dbVerbinding->query($query);
        
        // De resultaten worden ingelezen in een array
        while ($rij = $resultaat->fetch_array(MYSQLI_ASSOC))
        {
        $allerijen[] = $rij;
        }
        
        // Elke regel uit de array wordt in een tabel getoond
        foreach ($allerijen as $record)
        {
        echo"<TR><TD>$record[ordernummer]</TD>";
        echo"<TD>$record[klantnummer]</TD>";
        echo"<TD>$record[orderdatum]</TD>";
        echo"<TD>$record[betaald]</TD>";
        
        echo "<TD><FORM action='z. Eindopdracht bestelling wijzigen.php' method='post'>
        <input type='hidden' name='verstopt' value='$record[ordernummer]'>
        <input type = 'submit' name='wijzig' value='wijzig'>
        </FORM></TD>";
         

        }
        
        
        // Reset resultaat en sluit de verbinding
        $resultaat->free_result();
        $dbVerbinding->close();
        
        ?>
    </TABLE>

