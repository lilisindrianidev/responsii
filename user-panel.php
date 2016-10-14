<?php

include("connection.php");

$email=$_POST["email"];
$password=$_POST["password"];

$db_user=mysql_query("SELECT email FROM clients WHERE email='asdfaa@fdfdfs.fr' ");
#$db_pass=mysql_query("SELECT password FROM clients WHERE password=".$password" ");

if ($email == $db_user)  {
	echo "Καλώς ήρθες ".$email;
}
else
	echo "Λυπούμαστε, τα στοιχεία που δώσατε δεν υπάρχουν στην βάση δεδομένων μας.";
?>