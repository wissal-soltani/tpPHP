<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul </title>

</head>
<body>
    <?php
    echo"<h1> Calcul sur les variables</h1>";
    $tva=0.2;
    $prix=150;
    $nombre=10;
    $prixHT=$prix*$nombre;
    echo"le prix HT de 10 articles est".$prixHT."dt<br>";
    $prixTTC=$prixHT+($prixHT*$tva);
    echo"le prix TTC de 10 articles est".$prixTTC."dt<br>";

    ?>
    
    
</body>
</html>