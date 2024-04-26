<?php
session_start();
session_destroy();
echo "Sessie beeindigd<br/>";
echo "Naar <a href='Sessie2.php'>Vorige pagina<a/><br/>";
echo "<a href='Sessie.php'>Maak willekeurige sessie<a/><br/>";
echo "<a href='Sessie4.php'>Maak sessie<a/>";

?>