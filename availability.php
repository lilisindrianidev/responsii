<?php

include("header.html");


echo "<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta charset='utf-8' />
		<link rel='stylesheet' href='mystyle.css'>
		</head>
			<body id=resbg'>
			<div>

			</div>


	<br />
	<br />
	<br />

				<form action='availability-submit.php' method='post'>
	   				<div align='center'>
	   				
            	 		
              				Ελέγξτε την διαθεσιμότητα <br /><br />
               	 		
               	 			Από:&nbsp;&nbsp;</td>
                    		<input type='date' placeholder='yyyy-mm-dd' name='check_in' /> <br />
               	 		
				 		
		        			Έως:&nbsp;&nbsp;</td>
		        			<input type='date' placeholder='yyyy-mm-dd' name='check_out' />
				 		
				 		
            	  			<br /> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' value='Έλεγχος'/></td>
              			
        		
        			</div>
				</form>

			</body>
	 </html>";
include("footer.php");
?>