<!DOCTYPE html> 

<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="HTML"> 
        <title>Exerice php partie 1 exercice 8</title>
        <link rel="stylesheet" href="assets/css/style.css">

       
    </head>
<body>
<nav>
    <ul>
        <li><a href="exo1.php">Ex 1</a></li>
        <li><a href="exo2.php">Ex 2</a></li>
        <li><a href="exo3.php">Ex 3</a></li>
        <li><a href="exo4.php">Ex 4</a></li>
        <li><a href="exo5.php">Ex 5</a></li>
        <li><a href="exo6.php">Ex 6</a></li>
        <li><a href="exo7.php">Ex 7</a></li>
        <li><a href="exo8.php">Ex 8</a></li>
    </ul>

    <h1>PHP Partie 1 : Les variables</h1>
    <h2>Exercice 8<h2>
    <p>Créer 5 variables sum, difference, product, quotient, modulo.<br>
    Dans la première mettre le résultat de l'opération 3 + 4.<br>
    Dans la deuxième mettre le résultat de l'opération 100 - 20.<br>
    Dans la troisième mettre le résultat de l'opération 45 * 15.<br>
    Dans la quatrième mettre le résultat de l'opération 45 / 15.<br>
    Dans la cinquième mettre le reste de la division entière 75 / 15.<br><br>

    Afficher le contenu des variables.</p>
    
<?php 

$sum =  3 + 4; 
$difference = 100 - 20; 
$product = 45 * 15; 
$quotient = 45 / 15; 
$modulo = 75 % 15; 


echo " $sum $difference $product $quotient $modulo ";?>

</body>
</html>
