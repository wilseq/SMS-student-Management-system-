<?php
 $con = mysqli_connect('localhost','root','','sms');
 if($con == false)
 {
 	echo "Connection Fail";
 }
 else
 {
 	echo "Connection Sucessfull";
 }

?>