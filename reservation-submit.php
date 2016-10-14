<?php

include("connection.php");

$reservation_id=substr(number_format(time() * mt_rand(),0,'',''),0,6);
$id=$_POST["id"];
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$country=$_POST["country"]; 
$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];
$room_id=$_POST["room_id"];


$total=mysql_query("SELECT room_price FROM rooms WHERE room_id='".$room_id."' ");
$result=mysql_fetch_row($total);


$date1 = new DateTime($check_out);
$date2 = new DateTime($check_in);
$diff = $date2->diff($date1)->format("%a");
$price = $result[0]*$diff;


mysql_query("INSERT INTO clients (reservation_id, id, name, surname, email, country, phone) VALUES ('".$reservation_id."', '".$id."', '".$name."', '".$surname."', '".$email."', '".$country."', '".$phone."' )");
mysql_query("INSERT INTO reservations (reservation_id, room_id, check_in, check_out, total, price) VALUES ( '".$reservation_id."', '".$room_id."', '".$check_in."', '".$check_out."', '".$diff."', '".$price."' )");

header("Location: success.php?reservation_id=$reservation_id");

include("success.php");







?>
