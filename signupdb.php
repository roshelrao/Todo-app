<?php

$firstname=$_REQUEST["fname"];
$lastname=$_REQUEST["lname"];
$mail=$_REQUEST["email"];
$pass=$_REQUEST["passw"];

$mysql= new mysqli ("localhost","root","","list") or die (mysqli_connect_error());

$sql1="insert into users(fname,lname,email,password)  values('$firstname','$lastname','$mail','$pass')";

if(mysqli_query($mysql,$sql1)){
    //header("Location:home.php");
}
else{
    echo"noooo";
}

?>