<?php

@session_start();
$user = $_SESSION['email'];
 
if(empty($admin))
{
	header("location:index.php");
	
}

?>

<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">PLANET EDUCATION</a>
					</div>
					<ul class="nav navbar-nav">
					  <li class="active"><a href="dashboard.php">Home</a></li>
					  <li><a href="#">Change Password</a></li>
					  
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$user?></a></li>
					  <li><a href="logout.php" onclick="return confirm('Do You Want To Logout ?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

					</ul>
				  </div>
				</nav>