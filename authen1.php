<?php
header('Access-Control-Allow-Origin: *');

$x = $_POST['user'];
$y = $_POST['pass'];

if($x == "cj" && $y == "1234"){
    $data = array(
        "code" => 0,
        "status" => "success",
        "first_name" => "Chatchanan",
        "last_name" => "Jandeng"
    );
    echo json_encode($data);
}else{
    $data = array(
        "code" => 1,
        "status" => "fail"
    );
    echo json_encode($data);
}