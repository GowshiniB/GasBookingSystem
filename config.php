<?php
//database connection code
$con=new mysqli("localhost","root","password","gas_booking");
if($con->connect_error){
    die("Error in connection:".$con->connect_error);
}
?>
