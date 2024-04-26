<?php
session_start();

//Testen of gemaakte sessie nog niet bestaat
if(!isset($_SESSION['mijnId']))

{
    $_SESSION['mijnId'] = uniqid(); //uniek nummer maken

    echo 'Sessie gemaakt<br/>';
}

echo $_SESSION["mijnId"]; //print Id
echo "<br/>Naar <a href='sessie2.php'>Vervolg<a/>";
?>
