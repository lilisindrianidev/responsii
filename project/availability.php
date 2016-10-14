<?php

include("header.html");

echo "<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta charset='utf-8' />

		</head>
			<body>

	<br />
	<br />
	<br />

				<form action='availability-submit.php' method='post'>
	   				<table>
            	 		<tr>
              				<th>Ελέγξτε την διαθεσιμότητα </th>
               	 		</tr>
               	 		<tr>
               	 			<td>Από:</td>
                    		<td><input type='date' name='check_in' /></td>
               	 		</tr>
				 		<tr>
		        			<td>Έως:</td>
		        			<td><input type='date' name='check_out' /></td>
				 		</tr>
				 		<tr>
            	  			<td><input type='submit' value='Έλεγχος'/></td>
              			</tr>
        			</table>
				</form>

			</body>
	 </html>";

?>