<?php
require 'vehicule.php';
require 'truck.php';

$truck = new truck('blue', 2, 'fuel', 900);
var_dump($truck);

echo $truck->forward();
echo "<br>";
echo $truck->brake();
echo "<br>";
echo $truck->full();
