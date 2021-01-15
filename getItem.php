<?php
header('Access-Control-Allow-Origin: *');


$data = array(
    'itd'=>array(
        "name" => "ITD",
        "fname" => "Information Technology and Digital Innovation "
        
    ),
    'imi'=>array(
        "name" => "IMI",
        "fname" => "Innovation of Medical Informatics "
        
    ),
    
    'com' => array(
        "name" => "COM",
        "fname" => "digital commnunicartion"
        
    ),
    'mta'=>array(
        "name" => "MTA",
        "fname" => "Multimedia Technology and Animation"
    ),
    'dcm' => array(
        "name" => "DCM",
        "fname" => "Digital Content and Media"
    ),
);


$x = $data[$_POST['id']];

echo json_encode($x);
