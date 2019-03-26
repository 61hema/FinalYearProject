<html>
<head>
	<title>set questions</title>
	   <link href="css/bootstrap.min.css" rel="stylesheet">
	   <link href="onlinequs.css" rel="stylesheet">
	   <script src="js/bootstrap.min.js" type="text/javascript"  ></script>
</head>
<body>
	<main>
	<header>
		<?php include ("../admin/navbar.php");?>
	</header>
	<div class="row">
	<aside class="col-sm-3">
		<?php include("sidebar.php");?>
		
	</aside>
	
	<section class="col-sm-9">
		<div class="flex-container">

			<form class="form-horizontal" method="post">
				<div id="sec1">
				<label>Enter subject code</label>
				<input type="text" name="subject">
				<label>Enter topic name</label>
				<input type="text" name="topic">

			     </div>
                <div class="form-group">
                 	<label >Question :</label>
                       <div >
                          <textarea class="form-control" id="qus1"></textarea>
                       </div>

                 </div>
                  <div class="form-group">
                 	<label >option 1:</label>
                       <div >
                          <input type="text" class="form-control" id="op1"></textarea>
                       </div>
                  </div>
                  <div class="form-group">
                 	<label >option 2:</label>
                       <div >
                          <input type="text" class="form-control" id="op2"></textarea>
                       </div>
                  </div>
                  <div class="form-group">
                 	<label >option 3:</label>
                       <div >
                          <input type="text" class="form-control" id="op3"></textarea>
                       </div>
                  </div>
                  <div class="form-group">
                 	<label >option 4:</label>
                       <div >
                          <input type="text" class="form-control" id="op4"></textarea>
                       </div>
                  </div>
                  <div class="form-group">
                  	<label>Answer:</label>
                  	<input type="number" class="form-control" id="ans1">
                  	<input type="submit" value ="save" name="save" id="save">
                  	
			</form>
	     </div>
	</section>
</div>
</main>
</body>
</html>