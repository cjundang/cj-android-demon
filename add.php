<?php
header('Access-Control-Allow-Origin: *');

$x = $_GET['x'];
$y = $_GET['y'];
echo $x+$y;
