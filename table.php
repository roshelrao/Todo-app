<?php
$mysql= new mysqli ("localhost","root","") or die (mysqli_connect_error());

$sql1="create database if not exists list";
if(mysqli_query($mysql,$sql1)){
    echo"database succesfull";
}
else{
    echo"error" .mysqli_error($mysql);
}

if(mysqli_select_db($mysql,"list")){
$sql2="create table if not exists todo(
    tid int primary key auto_increment,
    description varchar(100) not null,
    addeddate date not null,
    expire date not null,
    done int(1) not null
    )";

if(mysqli_query($mysql,$sql2)){
    echo"todo succesfull";
}
else{
    echo"todo error" .mysqli_error($mysql);
}

$sql3="create table if not exists users(
    uid int primary key auto_increment,
    fname varchar(100) not null,
    lname varchar(100) not null,
    email varchar(100) not null,
    password varchar(20) not null
)";

if(mysqli_query($mysql,$sql3)){
    echo"user ok";
}
else{
    echo"user not ok" .mysqli_error($mysql);
}
}

?>