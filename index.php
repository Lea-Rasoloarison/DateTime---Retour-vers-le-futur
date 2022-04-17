<?php

$presentTime = new DateTime();

$destinationTime = new DateTime();
$destinationTime->setTimestamp(643625111);

$diff=$presentTime->diff($destinationTime);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom de Zeus !</title>
    <link href="/style.css" rel="stylesheet"/>
</head>

<body>
<header>
    <h1>“La route ? Là où on va, on n’a pas besoin de route !”</h1>
</header>

<div class="imgDolorean">
<img class="dolorean" src="https://fr.web.img3.acsta.net/newsv7/20/12/08/12/17/1635674.jpg" alt="dolorean">
</div>

<div class="present">
    <h2>Quitte à voyager à travers le temps au volant d’une voiture, autant en choisir une qui ait de la gueule :</h2>
    <a href="#">
        <figure class="presentDate">
            <?php echo $presentTime->format('M d Y hA i') ?>
        </figure>
    </a>
</div>

<div class="destination">
    <h2>Si mes calculs sont exacts, lorsque ce petit bolide atteindra 88 miles à l’heure, attends toi à voir quelque chose qui décoiffe :</h2>
    <a href="#">
        <figure class="destinationDate">
            <?php echo $destinationTime->format('M d Y hA i') ?>

        </figure>
    </a>
</div>

<div class="difference">
    <h2>Difference :</h2>
    <a href="#">
        <figure class="differenceTime">
            <?php
            echo 'years : '.$diff->y.' '.'months : '.$diff->m.' '.'days : '.$diff->d.' '.'seconds :'.$diff->s.'</br>';
            echo 'total number  days :'.' '.$diff->days;
            ?>

        </figure>
    </a>
</div>
