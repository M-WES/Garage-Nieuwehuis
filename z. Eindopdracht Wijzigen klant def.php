<HTML>
<HEAD>
<TITLE>De Keukenprins</TITLE>
</HEAD>

<BODY>
<?php

include("database.php");

if(isset($_POST["submit"]))
{
$kltnr = $_POST["klantnummer"];
$artnaam = $_POST["artikelnaam"];
$cat = $_POST["categorie"];
$prijs = $_POST["prijs"];
$voorraad = $_POST["voorraad"];

echo "U hebt de volgende gegevens gewijzigd: <br>";
echo "artikelnummer: $artnum <br>";
echo "artikelnaam: $artnaam <br>";
echo "categorie: $cat <br>";
echo "prijs: $prijs <br>";
echo "de voorraad is op $voorraad gezet";

$query = "UPDATE artikel SET artikelnaam = '$artnaam', categorie = '$cat', prijs = $prijs, aantal_in_voorraad = $voorraad
WHERE artikelnummer = $artnum";

$resultaat = $dbVerbinding->query($query);

// sluiten database
$dbVerbinding->close();

}

?>

<p><input type ="button" value="Naar Overzicht" onClick="window.location.href='z. Eindopdracht producten.php'"></p>

</BODY>
</HTML>