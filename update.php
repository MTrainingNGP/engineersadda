<?php
require_once("includes/config.php");
extract($_POST);
// print_r($_POST);
$update = "update users set
			first_name 	= '$first_name',
			last_name 	= '$last_name',
			father_name = '$father_name',
			mother_name = '$mother_name',
			dob 		= '$dob',
			
			pincode 	= $pincode,
			nationality = '$nationality',
			religion	= '$religion',
			phone_no	= $phone_no,
			mobile_no 	= $mobile_no,
			email 		= '$email',
			education 	= '$education',
			year_of_passing	= '$year_of_passing',
			board_university	= '$board_university',
			
			modified 	=now()";
if(mysql_query($update))
{
echo "true";
}
else
{
	echo "false";
}

?>