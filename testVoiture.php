<!DOCTYPE html>
<html>
        <head>
        <title>
            Test voitures
        </title>
    
    
        </head>
    <body>
       <?php
            include('voiture.php');
        $voitures1 = new Voiture("ford","rouge","2468");
        echo $voitures1->afficher();
        ?>
        
    </body>
</html>