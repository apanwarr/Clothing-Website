<?php

$con = mysqli_connect('sql105.infinityfree.com','if0_36881185','Xh9jGNN4Vf45Rs');

if ($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'if0_36881185_website_data');

$email_id = $_POST['email_id'];
$password = $_POST['password'];

$query = " insert into log_in (email_id,password) values ('$email_id','$password') ";

mysqli_query($con,$query);

header("location:index.php");//It reflected you to in main page.. 

?> 