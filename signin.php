<?php

$method = $_SERVER['REQUEST_METHOD'];
$data = json_decode(file_get_contents('php://input'));

switch ($method) {
    case 'POST':
        echo verifyUser($data);
        break;
}

function verifyUser($data)
{
    //db read (registration) => username & password
    $mysql= new mysqli ("localhost","root","","list") or die (mysqli_connect_error());
    $sql= "select COUNT(*) as c from users where email='$data->email' and password='$data->lpass'";
    $x =  mysqli_query($mysql,$sql);

    return json_encode(array("verified" => mysqli_fetch_assoc($x)["c"]));

}