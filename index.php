<?php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle('pink');


//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
//echo $bike->brake();
echo '<br>';

$myCar = new Car('blue', 8, 'gasoline');
echo $myCar->start();
echo '<br>';
echo $myCar->forward();
echo '<br>';
echo $myCar->brake();