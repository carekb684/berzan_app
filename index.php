<?php
$schemaDag = array();
        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
        $schemaDag[] = array("dag" => "man", "datum" => "27/1", "mat" => "Järpar");
        
        //5lektioner 1 dag



        echo "<input type='submit' name='idag' value='Idag'>";
        echo "<input type='submit' name='vecka' value='Denna Vecka'>";
        echo "<input type='submit' name='nstv' value='Nästa Vecka'>";
        echo "<div id='matsedel'>";
        echo "<h2> Matsedel </h2>";
        echo "<ul>";

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        if(isset($_POST["idag"])){
        foreach ($schemaDag as $lektion){ 
        echo "<div class='lektion'>";
        echo"<li>" . $lektion["dag"] . "</li>";
        echo"<li>" . $lektion["amne"] . "</li>";
        echo"<li>" . $lektion["larare"] . "</li>";
        echo"<li>" . $lektion["sal"] . "</li>";
        echo"<li>" . $lektion["starttid"] . "</li>";
        echo"<li>" . $lektion["sluttid"] . "</li>";
        echo "</div>";
        }
        }
        echo "</ul>";
        echo "</div>";
        
        
?>

