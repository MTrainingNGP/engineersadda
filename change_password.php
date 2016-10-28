<?php
// print_r($_SESSION);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("includes/config.php");
if (!isset($_SESSION['reg_id'])) {
        # code...
        session_destroy();
        header('location:login.php');
    }
   /* else
    {
        echo "hello";
      header('location:login.php');  
    }*/
    // $vald = $_SESSION['reg_id'];
    // print_r($_SESSION['reg_id']);
    // exit();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>EngineersAdda</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- include header -->
    <?php require_once("includes/header.php"); ?>
<!-- start container -->
    <div class="container">

        <div class="modal-dialog">
         <div class="modal-content">
        <div class="modal-header">
          <h1 class="text-center">Change Password</h1>
        </div>
         <div class="modal-body">
             <div class="form-group" id="idopassword">
                 <input type="password" class="form-control input-lg" placeholder="Old Password" id="idfop" onblur="validateoPassword()" />
                 <input type="text" name="sess" id="sessvar" hidden value="<?php echo $_SESSION['reg_id'] ;?>" >
                 <span class="help-block" id="iderropassword"></span>
             </div>

             <div class="form-group" id="idnpassword">
                 <input type="password" class="form-control input-lg" placeholder="New Password" id="idfnp" onblur="validatenPassword()" />
                 <span class="help-block" id="iderrnpassword"></span>
             </div>

             <div class="form-group" id="idcnpassword">
                 <input type="password" class="form-control input-lg" placeholder="Confirm New Password" id="idfcnp" onblur="validatecnPassword()" />
                 <span class="help-block" id="iderrcnpassword"></span>
             </div>

             <div class="form-group" >
                 <input type="button" class="btn  btn-primary" value="Change Password" id="subbutton" onclick="changepassword()" />

                 <a href="profile.php"><input type="button" class="btn pull-right  btn-warning" value="Cancel" id="cancel"  /></a>
                 
             </div>
         </div>
    </div>
 </div>

    </div>

<!-- /.End container -->
 <?php require_once("includes/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/changepassword.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
