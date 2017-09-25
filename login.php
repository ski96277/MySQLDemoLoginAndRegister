<?php

require "conn.php";
//this username come from android by post_data
$user_name = $_POST["user_name"];
//this username come from android by post_data
$user_pass = $_POST["password"];
$mysql_qry = "select * from employee_data where username = '$user_name' and password ='$user_pass';";

$result = mysqli_query($connection ,$mysql_qry);

if (mysqli_num_rows($result) > 0 ) {
	echo "LogIn Success";
}else{
	echo "Login Not Success";
}


  ?>