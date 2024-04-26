<html>
<head>
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


<FORM action="z. Eindopdracht Bestelling wijzigen def.php" method="POST">
<table>
<tr><td>Orderdummer: </td>
<td><input name ="ordernummer" </td></tr>
<tr><td>Klantnummer: </td>
<td><input name ="klantnummer" </td></tr>
<tr><td>Orderdatum: </td>
<td><input name ="orderdatum" </tr>

<tr>
<td colspan="2" >
<input type ="submit" name="submit"/>
<input type ="button" value="naar overzicht" onClick="window.location.href='z. Eindproject bestellingen.php'">
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