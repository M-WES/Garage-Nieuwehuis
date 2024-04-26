<?php
session_start();

//Testen of gemaakte sessie nog niet bestaat
if(!isset($_SESSION['mijnId']))

{
    $_SESSION['mijnId'] = "Kabouter plop";

    echo 'Sessie gemaakt<br/>';
}

echo $_SESSION["mijnId"];
echo "<br/>Naar <a href='sessie2.php'>Vervolg<a/>";
?>
