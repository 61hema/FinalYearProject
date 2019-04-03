<?php
include("../config/database.php");
$fn=$_FILES['att']['name'];
$tfn=$_FILES['att']['tmp_name'];
$arr=explode('.',$fn);
$ext=end($arr);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Information Portal</title>
	    <script src="js/bootsrap.min.js" ></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	  <main>
    		<header>
				<?php include("navbar.php") ;?>
			</header>
			<aside class="col-sm-2">
			    <?php include("sidebar.php"); ?>
			</aside>
			<section class="col-sm-10">
                 <div class="container" style="margin-left: 20%;">
                 	<h1>ADD INFORMATION</h1>
                 	<form method="post" enctype="multipart/form-data">
                 	<div class="form-group">
                 		 <label style="font-size: 30px">Information</label>
                 	   <input type="text" name="info" class="form-control">
                 	</div>
                 	<div class="form-group">
                   	   <input type="file" name="att" class="form-control">
                 	</div>
                     <input type="submit" name="sub" value="Done">
                 </form>
                 </div>
            </section>
        </main>

</body>
</html>