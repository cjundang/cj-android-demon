<?php
header('Access-Control-Allow-Origin: *');

$data = array(
    "name" => "Chanankorn",
    "sname" => "Jandeng"
    'age'=>40
);

echo json_encode($data);