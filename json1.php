<?php
header('Access-Control-Allow-Origin: *');

$data = array(
    "fname" => "Chanankorn",
    "lname" => "Jandeng"
);

echo json_encode($data);