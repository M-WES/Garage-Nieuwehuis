<?php
session_start();
if(isset($_SESSION["mijnId"]))
{
echo "Bestaande sessie:".$_SESSION["mijnId"]."<br/>";
echo "Naar <a href = 'sessie.php'>Begin</a><br/>";

echo "<a href = 'Sessie3.php'>Meld af </a><br/>";

}
else
{
    echo "Toegang tot de sessie geweigerd, de sessie is beeindigd"; 
}    

?>