<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">EngineersAdda</a>
        </div>

        
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="#">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <?php if(!empty($_SESSION['reg_id'])){ ?>

          <div>
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Profile<span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <li><a href="edit.php"><span class="glyphicon glyphicon-log-in"></span> Edit Profile</a></li>
        <li><a href="change_password.php"><span class="glyphicon glyphicon-log-in"></span> Change Password</a></li>
        </ul>
        </li>
        </ul>
        </div>

        <?php } else { ?>

          <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="registration.php"><span class="glyphicon glyphicon-log-in"></span> Registration</a></li>

      </ul>

      <?php  } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>