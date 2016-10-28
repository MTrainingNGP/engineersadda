<?php
SESSION_START();
if (isset($_SESSION['reg_id'])) {
	# code...
	// unset($_SESSION());
	// session_start();
	SESSION_UNSET('reg_id');
	SESSION_DESTROY();

	header("location:login.php");
}
// else
// {
// 	print_r($_SESSION);
// }
// // print_r($_SESSION['auth']['reg_id']);


?>