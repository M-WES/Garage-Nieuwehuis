<html>
<head>
<title>Formulier: wijzig klant</title>
</head>

<body>

<?php
include ("database.php");
$artnr = $_POST['verstopt'];

$query = "SELECT * FROM artikel WHERE artikelnummer = $artnr";
// Voer query uit in de database. Gebruik de verbinding zoals die in database.php staat
$resultaat = $dbVerbinding->query($query);

// De resultaten worden ingelezen
$rij = $resultaat->fetch_array(MYSQLI_ASSOC);

?>


<H2> Wijzig een artikel : </H2>

<FORM action="Wijzigen klant.php" method="POST">
<table>
<tr><td>Klantnummer: </td>
<td><input name ="klantnummer" value="<?php echo "$rij[klantnummer]"; ?>" /></td></tr>
<tr><td>naam: </td>
<td><input name ="naam" value="<?php echo "$rij[naam]"; ?>" /></td></tr>
<tr><td>Adres: </td>
<td><input name ="adres" value="<?php echo "$rij[adres]"; ?>" /></td></tr>
<tr><td>Postcode: </td>
<td><input name ="postcode" value="<?php echo "$rij[postcode]"; ?>"/></td></tr>
<tr><td>Woonplaats: </td>
<td><input name ="woonplaats" value="<?php echo "$rij[woonplaats]"; ?>"/></td></tr>
<tr><td>Email: </td>
<td><input name ="email" value="<?php echo "$rij[email]"; ?>"/></td></tr>
<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="naar overzicht" onClick="window.location.href='z. Eindopdracht Wijzigen klant def.php'">
</td>
</tr>
</table>
</FORM>

</body>
</html>
<?php

// sluiten database
$dbVerbinding->close();


?>