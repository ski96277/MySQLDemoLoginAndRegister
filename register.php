<?php

require "conn.php";
//this username come from android by post_data
$name = $_POST["name"];
//this username come from android by post_data
$surname = $_POST["surname"];
//this username come from android by post_data
$age = $_POST["age"];
//this username come from android by post_data
$username = $_POST["username"];
//this username come from android by post_data
$password = $_POST["password"];



$mysql_qry ="insert into employee_data(name,surname,age,username,password) values ('$name','$surname','$age','$username','$password')";

if ($connection->query($mysql_qry) === TRUE) {
	echo "Register  Success";
}else{
	echo "Error: ".$mysql_qry . "<br>".$connection->error;
}
$connection->close();

  ?>