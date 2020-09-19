<?php

session_start();	
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_MEMBER_USER']);
unset($_SESSION['SESS_MEMBER_PASS']);
unset($_SESSION['SESS_MEMBER_NAME']);

?>
<html>
<head>
	<title>Administrator Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="./template/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./template/css/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="../images/logossb.png">
    <link rel="stylesheet" href="./template/css/AdminLTE.min.css">
    <link rel="stylesheet" href="./template/css/skins/_all-skins.css">
	<link rel="stylesheet" href="./template/css/alertify.min.css"/>
	<link rel="stylesheet" href="./template/css/design.css"/>
	<link rel="stylesheet" href="./template/css/themes/default.min.css"/>
	<link rel="stylesheet" href="./template/css/themes/semantic.min.css"/>
	<link rel="stylesheet" href="./template/css/themes/bootstrap.min.css"/>
</head>

<body class="hold-transition bglogin">
    <div class="login-box">
      <div class="login-logo">
        <img src="../images/logossb.png" alt="E-Library Online" class="img-responsive">
      </div>
      <div class="login-box-body shadowlogin">
        <p class="login-box-msg">Sign in to Administrator Page</p>
		
        <form action="index.php" method="post">
          <div class="form-group has-feedback">
				<input type="text" class="form-control" id="userLogin" name="user" placeholder="admin" required="required" autofocus>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
				<div id="errUser"></div>
          </div>
          <div class="form-group has-feedback">
				<input type="password" class="form-control" id="passLogin" name="pass" placeholder="123" required="required">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				<div id="errPass"></div>
          </div>
		  
			<div class="box-footer">
				<input type="submit" class="btn btn-success pull-right" value="Log In" name="login">
				</form>
				<a href="../index.php" class="btn btn-default">Home</a>
			</div>


        

<?php
include '../config.php';

if(isset($_POST['login']))
{
	if(isset($_POST["user"]) && isset($_POST["pass"]))
	{
		$user = (isset($_POST["user"]) ? $_POST["user"] : null);
		$pass = (isset($_POST["pass"]) ? $_POST["pass"] : null);
			
		try
		{
			$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$stmt = $conn->prepare("SELECT USR_ID, USR_USERN, USR_PASS, USR_FNAME FROM USERS");

			$stmt->execute();
			
			while($result = $stmt->fetch(PDO::FETCH_ASSOC))
			{
				//store fetched data into variable
				$i = $result['USR_ID'];
				$u = $result['USR_USERN'];
				$p = $result['USR_PASS'];
				$f = $result['USR_FNAME'];
				
				if($user == $u && $pass == $p)
				{
					session_regenerate_id();
					$_SESSION['SESS_MEMBER_ID'] = $i;
					$_SESSION['SESS_MEMBER_USER'] = $u;
					$_SESSION['SESS_MEMBER_PASS'] = $p;
					$_SESSION['SESS_MEMBER_NAME'] = $f;
					session_write_close();
					header("location: home.php");
					exit();
				}
				else
				{
					$err = "Wrong username/password!";
				}
			}
			
		}
		catch(PDOException $e)
		{
			echo "Connection failed : " . $e->getMessage();
		}
	}

	if(isset($err))
	{
		echo "<center><font color='red'><p>$err</p></font></center>";
	}
}

	
?>

</div>
    </div>
</body>

<script src="./template/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script src="./template/scripts/script.js"></script>
</html>