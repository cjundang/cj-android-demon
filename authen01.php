<?php
header('Access-Control-Allow-Origin: *');

$x = $_POST['users'];
$y = $_POST['password'];

if($x == "cj" && $y == "1234"){
    $data = array(
        "code" => 0,
        "status" => "success",
        "name" => "chaiyut",
        "lname" => "Jandeng"
    );
    echo json_encode($data);
}else{
    $data = array(
        "code" => 1,
        "status" => "fail"
    );
    echo json_encode($data);
}