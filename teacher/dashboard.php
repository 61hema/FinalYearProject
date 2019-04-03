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
                    <div class="container">
				<h2>Welcome To Dashboard</h2>
               <div class="row">
                   <div class="col-sm-3">
                    <a href="information.php"><div class="flex" id="flex1">
                        <img src="images/info.jpg" class="img.thumbnail">
                        <label>INFORMATION</label>
                    </div></a>
                    </div>
                    <div class="col-sm-3">
                    <a href="notes.php"><div class="flex" id="flex2">
                      <img src="images/notes.jpg" class="img.thumbnail">
                        <label>NOTES</label>
                    </div></a>
                     </div>
                    <div class="col-sm-3">
                    <a href="query.php"><div class="flex" id="flex3">
                        <img src="images/query.jpg" class="img.thumbnail">
                        <label>QUERY</label>
                    </div></a>
                    </div>
                </div>
                 </div>
                </section>
                </div>
            </main>
    
    </body>
</html>