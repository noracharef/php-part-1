<!DOCTYPE html> 

<html lang="fr" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="HTML"> 
        <title>Exerice php partie 1 exercice 2</title>
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
    <h2>Exercice 2<h2>
    <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.  Attention age est de type entier.  Afficher leur contenu.</p>
    
<?php 

$lastname = "Charef";
$firstname = "Nora";
$age = 28;

echo "Hello, je suis $firstname $lastname j'ai $age ans";
echo 'Hello, je suis ' . $firstname . ' ' . $lastname . ' j\' ai ' . $age . ' ans';
?>


</body>
</html>
