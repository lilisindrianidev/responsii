<?php

include("connection.php");
include("header.html");
		$check_in=$_POST["check_in"];
		$check_out=$_POST["check_out"];
		$room_id=$_POST["room_id"];
		
$sql=mysql_query("SELECT room_type FROM rooms WHERE room_id='".$room_id."' ");
$room=mysql_fetch_row($sql);
$sql1=mysql_query("SELECT room_price FROM rooms WHERE room_id='".$room_id."' ");
$room_price=mysql_fetch_row($sql1);

echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='mystyle.css'>
</head>
<body>
        <h4 align='center'>Επιλέξατε δωμάτιο ".$room[0]." για ".$room_price[0]."€ τη νύχτα !</h4>
        
        <h3 align='center'>Παρακαλούμε εισάγετε τα στοιχεία σας και πατήστε <u>Συνέχεια</u>...</h3>
        

 <form action='reservation-submit.php' method='post'>
        <table align='center'>
           
                <tr>
                    <td>Αρ.Ταυτότητας:</td>
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
                       
                <tr>
                        <input type='hidden' name='check_in' value='".$check_in."' />
                        <input type='hidden' name='check_out' value='".$check_out."' />
                        <input type='hidden' name='room_id' value='".$room_id."' />
              	     <td><br /><input type='submit' value='Συνέχεια'/   ></td>
                </tr>

        </table>
</form>

    </body>
</html>";
include("footer.php");
?>
