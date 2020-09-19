<?php
  require_once('./auth.php');
  $adminname = $_SESSION['SESS_MEMBER_NAME'];
  $adminid = $_SESSION['SESS_MEMBER_ID'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Page - UIM</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="./template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./template/css/font-awesome/css/font-awesome.min.css">
    
  <link rel="shortcut icon" href="../images/logo.png">
  
    <link rel="stylesheet" href="./template/css/AdminLTE.min.css">
    <link rel="stylesheet" href="./template/css/skins/_all-skins.css">
  <link rel="stylesheet" href="./template/css/alertify.min.css"/>
  <link rel="stylesheet" href="./template/css/design.css"/>
  <link rel="stylesheet" href="./template/css/themes/default.min.css"/>
  <link rel="stylesheet" href="./template/css/themes/semantic.min.css"/>
  <link rel="stylesheet" href="./template/css/themes/bootstrap.min.css"/>
  
  <link rel="stylesheet" href="./template/css/pure-min.css">
  
  <link rel="stylesheet" href="./template/css/balloon.min.css">
  <link rel="stylesheet" href="./template/css/bootstrap-select.css">
  
  <script src="./template/js/Chart.min.js"></script>
  
  </head>
  
  <body class="sidebar-mini wysihtml5-supported skin-green-light">
    <div class="wrapper">
      <header class="main-header">
        <a href="./home.php" class="logo">
          <span class="logo-mini"><b>UIM</b></span>
          <span class="logo-lg"><b>UIM </b>College</span>
        </a>

        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" id="sidebar" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
      
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../images/vik.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrator Page</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="../images/vik.jpg" alt="User Image">
           <p>
                      Time : <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("h:i:s a"); ?><br>
            Date : <?php echo date("d-m-Y"); ?><br>
                    </p>
           </li>
          
                  <li class="user-footer">
           <div class="pull-right">
                      <a href="#" class="btn btn-warning " id="logoutBut"><font color="white">Logout  <i class="fa fa-sign-out"></i></font></a>
           </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <?php
              if(file_exists('../images/users/'.$adminid.'.jpg'))
              {
               echo "<img src='../images/users/".$adminid.".jpg' class='img-circle' alt='User Image'>"; 
              }
              else
              {
                echo "<img src='../images/vik.jpg' class='img-circle' alt='User Image'>"; 
              }

              ?>
            </div>
            <div class="pull-left info">
              <p><?php echo $adminname ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
    
          <ul class="sidebar-menu">
            <li class="header">ADMIN AREA</li>
            <li class="active">
              <a href="./home.php">
                <i class="fa fa-pie-chart"></i> <span>Statistics</span>
              </a>
            </li>
            <li class="active">
              <a href="./add.php">
                <i class="fa fa-edit"></i> <span>Add New Book</span>
              </a>
            </li>
             <li class="active">
              <a href="./managebook.php">
                <i class="fa fa-fw fa-list-alt"></i> <span>Manage Books</span>
              </a>
            </li>
            <li class="active">
              <a href="./upcomingbk.php">
                <i class="fa fa-fw fa-list-alt"></i> <span>Manage Upcoming Books</span>
              </a>
            </li>
            <li class="active">
              <a href="./addebook.php">
                <i class="fa fa-fw fa-cloud-upload"></i> <span>Upload New E-Books</span>
              </a>
            </li>
            <li class="active">
              <a href="./addepaper.php">
                <i class="fa fa-fw fa-cloud-upload"></i> <span>Upload New E-Paper</span>
              </a>
            </li>
            
       <li><br><br><hr>
      </li>
          </ul>
        </section>
    
      </aside>

      <div class="content-wrapper">
       
        <section class="content">
    <div id='adminpage'></div>
    <div id="desktopTest" class="hidden-xs"></div>