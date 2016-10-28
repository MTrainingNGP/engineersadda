<?php
require_once("includes/config.php");
extract($_POST);
// print_r($_POST);



$query="SELECT * from users where email = '$email' and password = md5('$password') ";
$row = mysql_fetch_assoc(mysql_query($query));

// print_r($row);
if(isset($row))
{
$_SESSION['reg_id'] = $row['reg_id'];
echo "true";
}
else
{
	echo "false";
	// session_unset();
	// session_destroy();
}

?>