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


  
</div>
<body>
<H1> Amazon - toevoegen artikel</H1>
<H3> Voer een artikel in : </H3>

<FORM action="Volledig project.php" method="POST">
<table>
<tr><td>Artikelnummer: </td>
<td><input name ="artikelnummer" /></td></tr>
<tr><td>Artikelnaam: </td>
<td><input name ="artikelnaam" /></td></tr>
<tr><td>Categorie: </td>
<td><input name ="categorie" /></td></tr>
<tr><td>Prijs: </td>
<td><input name ="prijs"/></td></tr>
<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="naar overzicht" onClick="window.location.href='overzicht artikelen.php'">
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
$artnum = $_POST["artikelnummer"];
$artnaam = $_POST["artikelnaam"];
$cat = $_POST["categorie"];
$prijs = $_POST["prijs"];
$voorraad = 0;

echo "U hebt de volgende gegevens ingevoerd: <br>";
echo "artikelnummer: $artnum <br>";
echo "artikelnaam: $artnaam <br>";
echo "categorie: $cat <br>";
echo "prijs: $prijs <br>";
echo "de voorraad is op $voorraad gezet";

$query = "INSERT INTO artikel (artikelnummer, artikelnaam, categorie, prijs, aantal_in_voorraad)
VALUES ('$artnum', '$artnaam', '$cat', '$prijs', '$voorraad')";



$resultaat = $dbVerbinding->query($query);

$dbVerbinding->close();

}

?>

