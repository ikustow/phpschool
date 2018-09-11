<?php

require $_SERVER['DOCUMENT_ROOT'].'\homeworks\vendor\autoload.php';

use Intervention\Image\ImageManager;
$manager = new ImageManager(array('driver'=>'gd'));


$manager->make('picture/1.png')->flip('v')->save('results/1.png');
echo "<img src='picture/1.png'  style= 'height: 100px; width: auto;'/>";
echo "<br>.<br>";
echo 'Повернули:';
echo "<br>.<br>";
echo "<img src='results/1.png'  style= 'height: 100px; width: auto;'/>";