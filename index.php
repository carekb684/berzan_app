<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>schema</title>
        
        
        <style>
            .lektion{
                border:solid thin black;
                width:100px;
            }
            
        </style>
    </head>
    <body>
        <?php
        //vecka - dag-lektioner-ämne,lärare,sal,börja,sluta

        $schemaDag = array();
        $schemaDag[] = array("klass" => "te12e", "vecka" => 4, "dag" => "mån", "starttid" => "0810", "sluttid" => "0910", "ämne" => "matte",
            "lärare" => "Johan", "sal" => "fikarum", "färgkod" => "#23424");
        $schemaDag[] = array("klass" => "te12e", "vecka" => 4, "dag" => "mån", "starttid" => "1030", "sluttid" => "1130", "ämne" => "matte",
            "lärare" => "Johan", "sal" => "fikarum", "färgkod" => "#23424");
        $schemaDag[] = array("klass" => "te12e", "vecka" => 4, "dag" => "mån", "starttid" => "1230", "sluttid" => "1350", "ämne" => "matte",
            "lärare" => "Johan", "sal" => "fikarum", "färgkod" => "#23424");
        $schemaDag[] = array("klass" => "te12e", "vecka" => 4, "dag" => "mån", "starttid" => "1430", "sluttid" => "1550", "ämne" => "matte",
            "lärare" => "Johan", "sal" => "fikarum", "färgkod" => "#23424");
        $schemaDag[] = array("klass" => "te12e", "vecka" => 4, "dag" => "mån", "starttid" => "1600", "sluttid" => "1650", "ämne" => "matte",
            "lärare" => "Johan", "sal" => "fikarum", "färgkod" => "#23424");
        //5lektioner 1 dag
        
        

        
        echo "<div id='schema_mån'>";
        echo "<h2> MÅNDAG </h2>";
        echo "<ul>";
        
        foreach($schemaDag as $lektion){
        echo "<div class='lektion'>";
        echo"<li>" .$lektion["ämne"] . "</li>";
        echo"<li>" .$lektion["lärare"] . "</li>";
        echo"<li>" .$lektion["sal"] . "</li>";
        echo"<li>" .$lektion["starttid"] . "</li>";
        echo"<li>" .$lektion["sluttid"] . "</li>";
        echo "</div>";
        
        }
        echo "</ul>";
        echo "</div>";
        
        
        function schemaDag($klass, $vecka) {

            return $schemaDag;
        }
        ?>



    </body>
</html>
