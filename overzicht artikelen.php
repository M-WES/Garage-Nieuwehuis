<?php
        //in database.php wordt de verbinding naar de database gemaakt//
        include("database.php");
        ?>
        
        <H1> Overzicht artikelen</H1>
        <TABlE border="1">
        <TR>
        
        <TD>Artikelnummer</TD>
        <TD>Naam</TD>
        <TD>Categorie</TD>
        <TD>Prijs</TD>
        <TD>eerste kolom</TD>
        <TD>tweede kolom</TD>
        
        
        </TR>
        
        <input type ="button" value="Artikel toevoegen" onClick="window.location.href='Volledig project.php'">
        <input type ="button" value="Klantenoverzicht" onClick="window.location.href='Overzicht klanten.php'">
        <BR> <BR>
        <?php
        
        // Bepaal query
        // Selecteer de eerste 5 klanten
        $query="SELECT * FROM artikel LIMIT 1000";
        
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
        echo"<TR><TD>$record[artikelnummer]</TD>";
        echo"<TD>$record[artikelnaam]</TD>";
        echo"<TD>$record[Categorie]</TD>";
        echo"<TD>$record[prijs]</TD>";
        
        echo "<TD><FORM action='Wijzigen artikel.php' method='post'>
        <input type='hidden' name='verstopt' value='$record[artikelnummer]'>
        <input type = 'submit' name='wijzig' value='wijzig'>
        </FORM></TD>";
        
        echo "<TD><FORM action='verwijderen artikel.php' method='post'>
        <input type='hidden' name='verstopt' value='$record[artikelnummer]'>
        <input type = 'submit' name='verwijder' value='verwijder'>
        </FORM></TD>";


        }
        
        
        // Reset resultaat en sluit de verbinding
        $resultaat->free_result();
        $dbVerbinding->close();
        
        ?>
    </TABLE>