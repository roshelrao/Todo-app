<?php
session_start();

$description=$_REQUEST["des"];
$added_date=$_REQUEST["adate"];
$expire_date=$_REQUEST["expire"];


$mysql= new mysqli ("localhost","root","","list") or die (mysqli_connect_error());
$id = $_SESSION['id'];
$sql1="insert into todo (description, addeddate,expire,done,uid) values ('$description','$added_date','$expire_date','d', '$id')";

    if(mysqli_query($mysql,$sql1)){

        header("location:add.php");
    }

else{
    echo"no hahahhaha";
}

?>