<html>
<head>
<title>Formulier: invoer artikel</title>
</head>

<body>
<H1> Keukenprins - toevoegen artikel</H1>
<H3> Voer een artikel in : </H3>

<FORM action="opdracht 3.php" method="POST">
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

