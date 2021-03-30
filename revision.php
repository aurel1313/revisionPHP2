<!DOCTYPE html>
<html>
    <head>
        <title>Voitures</title>
        <meta charset="utf-8"/>
    </head>
    <body>
    <?php
        $marque = 'renault';
        $couleur='bleu';
        $immatriculation ='56AB34';
        echo "<p>Voiture ".$immatriculation."de marque ".$marque."(".$couleur.")\n";
        echo"<br/>";

            $voiture = array(
                "marque"=>"peugeot",
                "couleur"=>"bleu",
                "immatriculation"=>"FN-911-XD"
                );
            var_dump($voiture);
            echo "<p>Voiture ".$voiture['immatriculation']."de marque ".$voiture['marque']."(".$voiture['couleur'].")";
            echo "<br/>";
        //liste de voiture-tableaux//
        $voitures2 =array(
            array("123456789","ferrari","vert"),
            array("259641",'renault',"noir"),
            array("710097","tesla","bleu nuit")
        );
        var_dump($voitures2);
//liste d'affichage des voitures//

?>
   <h1>Liste des voitures</h1>
   <?php
    foreach($voitures2 as $valeurs){
        echo "<ul>";
            echo "<li>".$valeurs[0]."</li>";
            echo"<li>".$valeurs[1]."</li>";
            echo "<li>".$valeurs[2]."</li>";
        echo "</ul>";
    }
    ?>
   
    </body>
</html>
