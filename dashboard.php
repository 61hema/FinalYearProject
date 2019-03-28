<html>
    <head>
    <title>Dashboard</title>
        <script src="js/bootsrap.min.js" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="dashboard.css" rel="stylesheet">
    </head>
    <body>
    <main>
    		<header>
				<?php include("navbar.php") ?>
			</header>
			
			<div>
				<aside class="col-sm-2">
				    <?php include("sidebar.php"); ?>
				</aside>
				
				<section class="col-sm-10">
				<h2>Welcome To Dashboard</h2>
               <div class="row">
                   <div class="col-sm-3">
                    <a href=""><div class="flex" id="flex1">
                        <img src="images/bg1.jpg" class="img.thumbnail">
                        <label>STUDENTS</label>
                    </div></a>
                    </div>
                    <div class="col-sm-3">
                    <a href="department.php"><div class="flex" id="flex2">
                      <img src="images/lib.jpg" class="img.thumbnail">
                        <label>DEPARTMENTS</label>
                    </div></a>
                     </div>
                    <div class="col-sm-3">
                    <a href=""><div class="flex" id="flex3">
                        <img src="images/bg1.jpg" class="img.thumbnail">
                        <label>TEACHERS</label>
                    </div></a>
                    </div>
                </div>
  
                </section>
                </div>
            </main>
    
    </body>
</html>