<?php
require_once("includes/config.php");
extract($_POST);
// print_r($_POST);



$query="SELECT * from users where reg_id = '$reg_id' and password = md5('$password') ";
$row = mysql_fetch_assoc(mysql_query($query));

// print_r($row);
if(isset($row))
{
// $_SESSION['reg_id'] = $row['reg_id'];
	$update = "update users set
	password = md5('$npassword') where reg_id = $reg_id";
	if (mysql_query($update)) {
		# code...
		SESSION_UNSET('reg_id');
		// SESSION_DESTROY();
		echo "true";
	}
	else
	{
		echo "false";
	}

}
else
{
	echo "false";
	// session_unset();
	// session_destroy();
}

?>