<html>
	<head>
		<title>Set questions</title>
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

					<div class="conainer" style="margin-left: 20%">
					<form method="post">
					<input type="text" class="form-control" placeholder="enter topic name" style="display:inline-block; width:30%;">
					<input type="text" class="form-control" placeholder="enter subject name" style="display:inline-block; width:30%;">
					Year<select >
						<option>First</option>
						<option>Second</option>
						<option>Third</option>
						<option>Fourth</option>
					</select>
					<div class="form-group">
					  <label>Question:</label>
					  <input type="text" class="form-control" name="qus">
					</div>
					<div class="form-group">
					  <label >Option 1:</label>
					  <input type="text" class="form-control" name="op1">
					</div>
					<div class="form-group">
					  <label>option 2:</label>
					  <input type="text" class="form-control" name="op2">
					</div>
					<div class="form-group">
					  <label >Option 3:</label>
					  <input type="text" class="form-control" name="op3">
					</div>
					<div class="form-group">
					  <label >Option 4:</label>
					  <input type="text" class="form-control" name="op3">
					</div>
					<div class="form-group">
					  <label >Answer:</label>
					  <input type="text" class="form-control" name="op3">
					</div>
					<input type="button" value="save and next">
					<input type="button" value ="Done">

				</form>
			</div>
				</section>
			
		</main>
	</body>
</html>