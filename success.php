<?php
include("header.html");

$reservation_id=$_GET["reservation_id"];

echo "<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta charset='utf-8' />
		<link rel='stylesheet' href='mystyle.css'>
		</head>
			<body align='center'>


	<br />

		<h3 align='center'>Η κράτηση σας έγινε με επιτυχία!</h3>
		<p align='center'>Ο κωδικός κράτησης σας είναι: <u><b>".$reservation_id."</b></u> </p>
		
		<div align='center'>
			<img src='success.jpe' />
			<br /> <br /> <br />
			<a href='index.php'> <b>Πίσω στην Αρχική </b></а>
	    </div>



			</body>
	 </html>";
include("footer.php");

?>
