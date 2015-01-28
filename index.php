<?php

//$schemaDag = array();
//        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
//        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
//5lektioner 1 dag


$maten = array();
$maten[0] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";
$maten[1] = "<p>Pytt i panna</p><p>Kycklinglevergryta, eko ris</p>";
$maten[2] = "<p>Potatis</p><p>Kycklinglevergryta, eko ris</p>";
$maten[3] = "<p>Mat</p><p>Kycklinglevergryta, eko ris</p>";
$maten[4] = "<p>Janne</p><p>Kycklinglevergryta, eko ris</p>";
$maten[5] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";
$maten[6] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";
$maten[7] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";
$maten[8] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";
$maten[9] = "<p>Pytt i panna, rödbetor</p><p>Kycklinglevergryta, eko ris</p>";








echo "<form method='POST'>";
echo "<input type='submit' name='action' value='1'>";
echo "<input type='submit' name='action' value='2'>";
echo "<input type='submit' name='action' value='3'>";
echo "<div id='matsedel'>";
echo "<h2> Matsedel </h2>";
echo "<ul>";
echo "</form method='POST'>";
switch ($_POST["action"]) {
    case 1 :
        $index = date("N")-1;
        $dag = date("l");
        echo $dag;
        echo $maten[$index];

        break;
    case 2:
        echo $maten[0];
        echo $maten[1];
        echo $maten[2];
        echo $maten[3];
        echo $maten[4];
        break;

    case 3:
        echo $maten[5];
        echo $maten[6];
        echo $maten[7];
        echo $maten[8];
        echo $maten[9];
        break;


    default:
        break;
}















?>

