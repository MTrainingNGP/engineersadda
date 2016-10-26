<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$_SESSION = array();
include("captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
// print_r($_SESSION['captcha']);
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
    <link rel="icon" href="favicon.ico">

    <title>EngineersAdda</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    
    <script src="js/registration.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="disbutton()">
  <!-- include header -->
    <?php require_once("includes/header.php"); ?>
<!-- start container -->
    <div class="container" >

      <div class="starter-template" style="border: solid 5px black; margin: 10px; padding: 2px">
        <h3 style="text-align: center">Registraton with EngineersAdda</h3>

        <form method="post" >


  <div class="form-group row" id="idfname">
  <label for="example-text-input" class="col-xs-3 col-form-label">First Name</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="First Name" id="idfiname" name="fname" onblur="validatefName()">
    <span id="iderrname" class="help-block"></span>
  </div>
</div>

 <div class="form-group row" id="idlname">
  <label for="example-text-input" class="col-xs-3 col-form-label">Last Name</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Last Name" id="idliname" name="lname" onblur="validatelName()">
    <span id="iderrlname" class="help-block"></span>
  </div>
</div>

 <div class="form-group row" id ="idfaname">
  <label for="example-text-input" class="col-xs-3 col-form-label">Father's Name</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Father's Name" id="idfainame" name="fathername" onblur="validatefaName()">
    <span id="iderrfaname" class="help-block"></span>
  </div>
</div>
 <div class="form-group row" id="idmoname">
  <label for="example-text-input" class="col-xs-3 col-form-label">Mother's Name</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Mother's Name" id="idmoiname"
    name="mothername" onblur="validatemoName()">
    <span id="iderrmoname" class="help-block"></span>
  </div>
</div>

<div class="form-group row" id="iddate">
  <label for="example-date-input" class="col-xs-3 col-form-label">Date of birth</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="2011-08-19" id="date" name="date" onblur="validateDate()">
    <span id="iderrdate" class="help-block"></span>
  </div>
</div>

<div class="control-group row">
        <label class="col-xs-3 col-form-label">Gender</label>
        <div class="col-xs-6">
  <div class="col-xs-5">
                <label >
                <input class="form-control" type="radio" name="gender" id="idmale" />
                male
            </label>
  </div>
  <div class="col-xs-5">
            <label >
                <input class="form-control" type="radio" name="gender" id="idfemale"  />
                female
            </label>
  </div>
  </div>
    </div>

<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Country</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Country" id="example-text-input"
    name="country" value="INDIA" disabled>
  </div>
</div>

<div class="form-group row" id="idstate">
  <label for="example-text-input" class="col-xs-3 col-form-label">State</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="State" id="idfstate"
    name="state" onblur="validateState()">
    <span id="iderrstate" class="help-block"></span>
  </div>
</div>


<div class="form-group row" id="iddistric">
  <label for="example-text-input" class="col-xs-3 col-form-label">Distric</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Distric" id="idfdistric"
    name="distric" onblur="validateDistric()">
    <span id="iderrdistric" class="help-block"></span>
  </div>
</div>

<div class="form-group row" id="idcity">
  <label for="example-text-input" class="col-xs-3 col-form-label">City</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="city" id="idfcity"
    name="city" onblur="validateCity()">
    <span id="iderrcity" class="help-block"></span>
  </div>
</div>

<div class="form-group row" id="idpincode">
  <label for="example-text-input" class="col-xs-3 col-form-label">Pincode</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="pincode" id="idfpincode"  name="pincode" onblur="validatePincode(this)">
    <span id="iderrpincode" class="help-block"></span>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Nationality</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" value="Indian" id="example-text-input"
    name="Nationality" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="example-text-input" class="col-xs-3 col-form-label">Religion</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="religion" id="example-text-input"
    name="religion">
  </div>
</div>


<div class="form-group row" id="idphone">
  <label for="phone" class="col-xs-3 col-form-label">Phone Number</label>
  <div class="col-xs-9">
    <input class="form-control " type="text" name="phone" placeholder="0712-000000"  id="idfphone" value="" onblur="validatePhone()">
    <span id="iderrphone" class="help-block"></span>
  </div>

</div>


<div class="form-group row" id="idmobile">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Mobile Number</label>
  <div class="col-xs-9">
    <input class="form-control" type="tel" placeholder="9999999999" id="idfmobile" onblur="validateMobile()">
    <span id="iderrmobile" class="help-block"></span>
  </div>
</div>

<div class="form-group row" id="idemail">
  <label for="example-email-input" class="col-xs-3 col-form-label">Email</label>
  <div class="col-xs-9">
    <input class="form-control" type="email" placeholder="abc@abc.com" id="idfemail" onblur="validateEmail()">
    <span id="iderremail" class="help-block"></span>
  </div>
</div>


<div class="form-group row" id="ideducation">
  <label for="example-url-input" class="col-xs-3 col-form-label">Education</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Education Qualification" id="idfeducation" onblur="validateEducation()">
    <span id="iderreducation" class="help-block"></span>
  </div>
</div>
<div class="form-group row" id="iduni">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Board / University</label>
  <div class="col-xs-9">
    <input class="form-control" type="text" placeholder="Board or University" id="idfuni" onblur="validateUniv()">
    <span id="iderruni" class="help-block"></span>
  </div>
</div>

<div class="form-group row">
  <label for="example-tel-input" class="col-xs-3 col-form-label">Physical Disability</label>
  <div class="col-xs-4">
  <div class="col-xs-5">
                <label >
                <input class="form-control" type="radio" name="disability" id="pdis1" onclick=" disinputyes()" />
                Yes
            </label>
  </div>
  <div class="col-xs-5">
            <label >
                <input class="form-control" type="radio" name="disability" id="pdis2" onclick="disinputno()" />
                NO
            </label>
  </div>
  </div>

  <div class="col-xs-5" id="iddisinput">
    <input class="form-control" type="tel" placeholder="Type of disability" id="pdisinput" onblur="typedis()" >
    <span id="iderrpdisinput" class="help-block"></span>
  </div>

</div>

<div class="form-group row" id="idpassword">
  <label for="example-password-input" class="col-xs-3 col-form-label">Password</label>
  <div class="col-xs-9">
    <input class="form-control" type="password" placeholder="Password" id="idfpassword" name="password" onblur="validatePassword()">
    <span id="iderrpassword" class="help-block"></span>
  </div>
</div>
<div class="form-group row" id="idconfirmpassword">
  <label for="example-password-input" class="col-xs-3 col-form-label"> Confirm Password</label>
  <div class="col-xs-9">
    <input class="form-control" type="password" placeholder="Confirm Password" id="idfconfirmpassword" onblur="validateConfirmPassword()">
    <span id="iderrconfirmpassword" class="help-block"></span>
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-3 col-form-label">Captcha</label>
  <div class="col-xs-9">
    <?php echo '<img src = "'.$_SESSION['captcha']['image_src'].'" height="50" width="50">';?>
  </div>
</div>

<!-- <div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label"></label>
  <div class="col-xs-6">
  <div class="col-xs-1">
    <input class="form-control" type="checkbox" placeholder="" id="termsaccpt" onclick="enabbutton()">
   
  </div>
  <div class="col-xs-6">
    
    <p>I Accept Terms And Condition</p>
  </div>
  </div>
</div> -->
<div class="form-group row">
  
  <div class="col-xs-10 col-xs-offset-3">
      <label class="checkbox-inline col-xs-1">
      <input type="checkbox" id="termsaccpt" onclick="regbutton()"></label>
      <p class="col-xs-8"> I Accept terms And Condition.</p>
  </div>
  
</div>


<div class="form-group row col-xs-offset-1" >

  <div class="col-xs-6">
    <input class="form-control btn-success" value="submit" type="button" placeholder="Register" name="submit"  id="subbutton" onclick="allfuctionv();">
  </div>
  <div class="col-xs-5">
    <input class="form-control btn-info" type="button" value="Back" placeholder="Back" >
  </div>
</div>
        </form>
        
      </div>

    </div>

<!-- /.End container -->
 <?php require_once("includes/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <script>
  $(function() {
    $( "#date" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
    dateFormat: 'yy/mm/dd', 
      onClose: function( selectedDate ) {
        $( "#date" ).datepicker( "option", "Date", selectedDate );
      }
    });
    
  });
  </script>
  </body>
</html>
