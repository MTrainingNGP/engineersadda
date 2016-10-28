<?php 
//connection with server
$conn = mysql_connect("localhost","root","root") or die("could not connect with server");

//select of database
mysql_select_db("engineersadda",$conn) or die("could not connect with database");

// require_once("includes/validate.php");

//start session
SESSION_START();

//assign session name
// SESSION_NAME("auth");
?>