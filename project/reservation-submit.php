<?php

include("connection.php");


$reservation_id=substr(number_format(time() * mt_rand(),0,'',''),0,6);
$id=$_POST["id"];
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$phone=$_POST["phone"];
$country=$_POST["country"];
$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];
$room_id=$_POST["room_id"];


$total=mysql_query("SELECT room_price FROM rooms WHERE room_id='".$room_id."' ");
$price=date_diff($check_out, $check_in)*$total;



if($password == $confirmpassword) {
	mysql_query("INSERT INTO clients (reservation_id, id, name, surname, email, password, country, phone) VALUES ('".$reservation_id."', '".$id."', '".$name."', '".$surname."', '".$email."', '".$password."', '".$country."', '".$phone."' )");
	
	mysql_query("INSERT INTO reservations (reservation_id, room_id, check_in, check_out, total, price) VALUES ( '".$reservation_id."', '".$room_id"', '".$check_in."', '".$check_out."', '".$total."', '".price."' )");
	
	#header("Location: success.php?message=$success");
	$state=1;
}
else 
	$state=0; 


if($state==1) 
	include("success.php");


else 
	include("failure.php");




?>
