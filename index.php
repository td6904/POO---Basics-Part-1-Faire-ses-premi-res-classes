<?php

require_once 'Bicycle.php';
$bike = new Bicycle();

$bike->setColor('blue');

//var_dump($bike);



/* $rockrider = new Bicycle();
$rockrider->color = 'yellow';

$tornado = new Bicycle();
$tornado->color = 'black'; 


echo $rockrider->getColor();
echo $tornado->getColor(); */


/*echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $tornado->brake(); */

$homersPinkSedan = new Car('pink', 5, 100);

echo $homersPinkSedan->forward();
echo '<br> Vitesse de la car : ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersPinkSedan->brake();
echo '<br> Vitesse de la car : ' . $homersPinkSedan->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersPinkSedan->brake(); 

echo "<br><br>";
var_dump($homersPinkSedan);

echo "<br><br>";

$lovejoysKarmannGhia = new Car('White', 2, 100);

echo $lovejoysKarmannGhia->forward();
echo '<br> Vitesse de la car : ' . $lovejoysKarmannGhia->getCurrentSpeed() . ' km/h' . '<br>';
echo $lovejoysKarmannGhia->brake();
echo '<br> Vitesse de la car : ' . $lovejoysKarmannGhia->getCurrentSpeed() . ' km/h' . '<br>';
echo $lovejoysKarmannGhia->brake(); 

var_dump($lovejoysKarmannGhia);
