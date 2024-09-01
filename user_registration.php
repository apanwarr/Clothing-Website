<?php

$con = mysqli_connect('sql105.infinityfree.com','if0_36881185','Xh9jGNN4Vf45Rs');

if ($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'if0_36881185_website_data');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$address = $_POST['address'];

$query = " insert into user_reg (first_name,last_name,email_id,password,c_password,address) values ('$first_name','$last_name','$email_id','$password','$c_password','$address') ";

mysqli_query($con,$query);

header("location:index.php");

?>