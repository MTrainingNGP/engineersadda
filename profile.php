<?php


// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
require_once("includes/config.php");

// print_r($_SESSION['reg_id']);

// print_r($_SESSION['reg_id']); //exit;
if (!isset($_SESSION['reg_id'])) {
        # code...
        session_destroy();
        header('location:login.php');
    }


$id = $_SESSION['reg_id'];
$query="SELECT * from users where reg_id='$id' ";
$row = mysql_fetch_assoc(mysql_query($query));
// print_r($row);
// exit();
$image = $row['image']
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
     <link href="css/profile.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


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
       <div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="images/<?php echo $row['image'];?>"  >
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="images/<?php echo $row['image'];?>">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $row["first_name"]." ".$row["last_name"];  ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">PERSONAL</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                <div class="hidden-xs">EDUCATIONAL</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                <div class="hidden-xs">CONTACT</div>
            </button>
        </div>
    </div>
    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
         <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td>Name:</td>
                      <td><?php echo $row["first_name"]." ".$row["last_name"];  ?></td>
                    </tr>
                    <tr>
                      <td>Father's Name:</td>
                      <td><?php echo $row["father_name"];  ?></td>
                    </tr>
                   <tr>
                      <td>Mother's Name:</td>
                      <td><?php echo $row["mother_name"];  ?></td>
                    </tr>
                    <tr>
                      <td>Date Of Birth:</td>
                      <td><?php echo $row["dob"];  ?></td>
                    </tr>
                    <tr>
                      <td>Gender:</td>
                      <td><?php echo $row["gender"];  ?></td>
                    </tr>
                  </tbody>
</table>

        </div>
        <div class="tab-pane fade in" id="tab2">
         <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td>Education:</td>
                      <td><?php echo $row["education"];  ?></td>
                    </tr>
                    <tr>
                      <td>Year of passing:</td>
                      <td><?php echo $row["year_of_passing"];  ?></td>
                    </tr>
                   <tr>
                      <td>Board/University:</td>
                      <td><?php echo $row["mother_name"];  ?></td>
                    </tr>
                    <tr>
                      <td>Physical Disability:</td>
                      <td><?php echo $row["phy_attr"];  ?></td>
                    </tr>
                    <tr>
                      <td>Image:</td>
                      <td><img class="card-bkimg" height="150" width="150" alt="" src="images/<?php echo $row['image'];?>"  ></td>
                    </tr>
                  </tbody>
</table>



        </div>
        <div class="tab-pane fade in" id="tab3">
          

          <table class="table table-hover">
                  
                  <tbody>
                    <tr>
                      <td>Email:</td>
                      <td><?php echo $row["email"];  ?></td>
                    </tr>
                    <tr>
                      <td>Mobile No:</td>
                      <td><?php echo $row["mobile_no"];  ?></td>
                    </tr>
                   <tr>
                      <td>Phone No:</td>
                      <td><?php echo $row["phone_no"];  ?></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><?php echo $row["city"].",".$row["state"].",".$row["country"]."-".$row["pincode"];  ?></td>
                    </tr><!-- 
                    <tr>
                      <td>Gender:</td>
                      <td><?php echo $row["gender"];  ?></td>
                    </tr> -->
                  </tbody>
</table>

        </div>
      </div>
    </div>
    
    </div>

   </div>

<!-- /.End container -->
 <?php require_once("includes/footer.php"); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script src="js/registration.js"></script>
    <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
