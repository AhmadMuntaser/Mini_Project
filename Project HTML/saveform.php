<?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$pass = $_POST['password'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$con = mysqli_connect("localhost","root","");

if($con){
	
	die("Cannot connect to DB server" . mysqli_error($con));
	
}


if(!mysqli_select_db($con, 'project'))
echo("No such DB" . mysqli_error($con));


$q = "insert into saveproject (name,email,age,password,contact,message )
values('$name','$email','$age','$pass','$contact','$message')";

if(mysqli_query($con,$q))
echo "record added successfully";
else
echo"record not added" . mysqli_error($con);

mysqli_close(%con);


?>