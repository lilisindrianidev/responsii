<?php

include("connection.php");

		$check_in=$_POST["check_in"];
		$check_out=$_POST["check_out"];
		$room_id=$_POST["room_id"];
		
echo "Check In " .$check_in;
echo "Check Out ".$check_out;
echo "Room  ID ".$room_id;


echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />

</head>
<body>
        <h4>Επιλέξατε το δωμάτιο: <?php echo $room_id; ?></h4>
        
        <h3>Παρακαλούμε εισάγετε τα στοιχεία σας και πατήστε επόμενο...</h3>
        
        <table>
            <form action='reservation-submit.php' method='post'>
                <tr>
                    <td>Αριθμός Ταυτότητας/Διαβατηρίου:</td>
                    <td align='right'><input type='text' name='id' required /></td>
                </tr>
                <tr>
                    <td>Όνομα:</td>
                    <td align='right'><input type='text' name='name' required /></td>
                </tr>
                <tr>
                    <td>Επώνυμο:</td>
                    <td align='right'><input type='text' name='surname' required /></td>
                </tr>
                <tr>
                    <td>E-mail:</td>
                    <td align='right'><input type='email' name='email'  required /></td> 
                </tr>

                <tr>
                    <td>Κωδικός:</td>
                    <td align='right'><input type='password' name='password' required></td>
                </tr>
                <tr>
                    <td>Επιβεβαίωση Κωδικού:</td>
                    <td align='right'><input type='password' name='confirmpassword' required /></td>
                </tr>
                <tr>
                    <td><label>Χώρα</label></td>
                    <td align='right'>
                        <select name='country'>
                            <option value='Ελλάδα'>Ελλάδα</option>
                            <option value='Κύπρος'>Κύπρος</option>
                            <option value='Γερμανία'>Γερμανία</option>
                            <option value='Ηνωμένο Βασίλειο'>Ηνωμένο Βασίλειο</option>
                            <option value='ΗΠΑ'>ΗΠΑ</option>
                            <option value='Γαλλία'>Γαλλία</option>
                            <option value='Αυστραλία'>Αυστραλία</option>
                            <option value='Ρωσσία'>Ρωσσία</option>
                            <option value='Βουλγαρία'>Βουλγαρία</option>
                            <option value='Ρουμανία'>Ρουμανία</option>
                            <option value='Τσεχία'>Τσεχία</option>
                            <option value='Άλλο'>Άλλο</option>
                      </select>
                    </td>
                </tr>
              
                <tr>
                    <td>Τηλέφωνο Επικοινωνίας:</td>
                    <td align='right'><input type='tel' name='phone' required></td>
                </tr>
                


              	<input type='submit' value='Επόμενο'/>
        </table>


    </body>
</html>";


?>
