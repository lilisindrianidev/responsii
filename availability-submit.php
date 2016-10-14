<?php

include("connection.php");
include("header.html");
#$reservation_id=$_GET["reservation_id"];
#echo "RID ".$reservation_id;



echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='mystyle.css'>
</head>
	<body id=bodystyle>
	<br> <br> <br>
	<h2 align=center>Διαθεσιμότητα</h2>
	
		<form action='reservation.php' method='post' >
		  <table  align=center width=500px>
			<tr>
				<th>Τύπος Δωματίου</th>
				<th>Θέα</th>
				<th>Όροφος</th>
				<th>Τιμή</th>
			</tr>";

$check_in=$_POST["check_in"];
$check_out=$_POST["check_out"];


$availability=mysql_query("SELECT room_type, room_view, floor, room_price, room_id FROM rooms WHERE room_id NOT IN (SELECT room_id FROM reservations WHERE check_in >= date '".$check_in."' AND check_out <= date '".$check_out."') ");

    if($availability->num_rows === 0)
    {
        echo 'No results';
    }

while($rooms=mysql_fetch_array($availability)) {
	echo"
				
		 <tr>
			<td align=center>".$rooms["room_type"]."</td>
			<td align=center>".$rooms["room_view"]."</td>
			<td align=center>".$rooms["floor"]."</td>
			<td align=center>".$rooms["room_price"]."€</td>
			<td align=center><input type='checkbox' name='room_id' value=".$rooms["room_id"]." /></td>
		 </tr>";
}
echo"
	<tr><td></td></tr> 
		 <tr> 
		 	<input type='hidden' name='check_in' value='".$check_in."' />
		 	<input type='hidden' name='check_out' value='".$check_out."' />
            <td align=center><input type='submit' value='Κράτηση'/></td>
         </tr>

        </table> 	

	</form>
		

	</body>
</html>";
include("footer.php");
?>