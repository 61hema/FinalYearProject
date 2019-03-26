<nav class="navbar navbar-inverse"><!-- class navbar gives the navigation bar and navbar-inverse is the design-->
				  <div class="container-fluid">
					<div class="navbar-header">
					  <a class="navbar-brand" href="#">WebSiteName</a>
					</div>
					<ul class="nav navbar-nav">
					  <li class="active"><a href="dashboard.php">Home</a></li>
					  <li><a href="#">Change Password</a></li>
					  
					</ul>
					<ul class="nav navbar-nav navbar-right">
					  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome : <?=$admin?></a></li>
					  <li><a href="logout.php" onclick="return confirm('Do You Want To Logout ?')"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					  <!--class glyphicon are used to place small icons in for logout,login-->
					</ul>
				  </div>
				</nav>