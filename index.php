<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>schema</title>
    </head>
    <body>
        <?php
        //vecka - dag-lektioner-ämne,lärare,sal,börja,sluta


        $schemaDag = array(
        
        array(array()),
        
        array("vecka"=>12),
        
        array("dag"=>måndag),
        
        array("l"=>måndag),
        );
        
        
        function schemaDag($klass, $vecka){
            
            return $schemaDag;
        }
        
        
        
        ?>
        
        
        
    </body>
</html>
