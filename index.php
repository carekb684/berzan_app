<?php

include './getFood-JSON.php';
//$schemaDag = array();
//        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
//        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
//5lektioner 1 dag


$maten = array();







for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $test = getFood(0, $i, $j);
        $matenvecka[$i][$j] = $test;
    }
    echo "<br>";
}

for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $test = getFood(0, $i, $j);
        $matennastavecka[$i][$j] = $test;
    }
    echo "<br>";
}






if (isset($_POST["action"])) {
    $vy = $_POST["action"];
} else {
    $vy = 1;
}




echo "<form method='POST'>";
echo "<input type='submit' name='action' value='1'>";
echo "<input type='submit' name='action' value='2'>";
echo "<input type='submit' name='action' value='3'>";
echo "<div id='matsedel'>";
echo "<h2> Matsedel </h2>";
echo "<ul>";
echo "</form method='POST'>";
switch ($vy) {
    case 1 :
        $index = date("N") - 1;
        $dag = date("l");
        echo $dag;


        $mat = getFood(0, $dag, 0);
        echo $mat;
        $mat2 = getFood(0, $dag, 1);
        echo $mat2;
        $mat3 = getFood(0, $dag, 2);
        echo $mat3;

        break;
    case 2:
        for ($i = 0; $i <= 4; $i++) {
            for ($j = 0; $j <= 2; $j++) {
                echo $matenvecka[$i][$j] . " , ";
            }
            echo "<br>";
        }

        break;

    case 3:
        for ($i = 0; $i <= 4; $i++) {
            for ($j = 0; $j <= 2; $j++) {
                echo $matennastavecka[$i][$j] . " , ";
            }
            echo "<br>";
        }
        break;


    default:
        break;
}
?>

