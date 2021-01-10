<?php
header('Access-Control-Allow-Origin: *');

$data = array(
    array(
        "fname" => "Chanankorn",
        "lname" => "Jandeng"
    ),
    array(
        "fname" => "Chatchanan",
        "lname" => "Jandeng"
    ),
    array(
        "fname" => "Chaiyut",
        "lname" => "Jandeng"
    ),
);

echo json_encode($data);