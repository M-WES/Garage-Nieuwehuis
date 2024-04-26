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
    text-align: left
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

<body>
<H1> Bestelling aanmaken</H1>
<H3> Maak je keuze : </H3>

<FORM action="z. Eindopdracht bestellingen.php" method="POST">
<table>
<tr><td>Ordernummer: </td>
<td><input name ="ordernummer" /></td></tr>
<tr><td>Klantnummer: </td>
<td><input name ="klantnummer" /></td></tr>
<tr><td>Orderdatum: </td>
<td><input name ="orderdatum" /></td></tr>
<tr><td>Betaald: </td>
<td><input name ="betaald"/></td></tr>

<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="Naar bestellingen" onClick="window.location.href='z. Eindopdracht bestellingen.php'">
</td>
</tr>
</table>
</FORM>

</body>
</html>
<?php

include ("database.php");

if(isset($_POST["submit"]))
{
$artnum = $_POST["ordernummer"];
$artnaam = $_POST["klantnummer"];
$cat = $_POST["orderdatum"];
$prijs = $_POST["betaald"];
$voorraad = 0;

echo "U hebt de volgende gegevens ingevoerd: <br>";
echo "ordernummer: $artnum <br>";
echo "klantnummer: $artnaam <br>";
echo "orderdatum: $cat <br>";
echo "betaald: $prijs <br>";

$query = "INSERT INTO artikel (artikelnummer, artikelnaam, categorie, prijs, aantal_in_voorraad)
VALUES ('$artnum', '$artnaam', '$cat', '$prijs', '$voorraad')";



$resultaat = $dbVerbinding->query($query);

$dbVerbinding->close();

}

?>

