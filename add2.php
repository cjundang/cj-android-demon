<?php
header('Access-Control-Allow-Origin: *');

$x = $_POST['x'];
$y = $_POST['y'];
echo $x+$y;