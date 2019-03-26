
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="register.css" rel="stylesheet">
        <script src="js/bootstrap.min.js" type="text/javascript"  ></script>
			<script>
                function subject()
            {
                if(document.getElementById('teacher').checked){
                    document.getElementById('subject').style.display = 'inline-block';
                }
                else {
                       document.getElementById('subject').style.display = 'none';
                }
            }
          
            </script>
   </head>
   <body>
   <header class="col-lg-12">
    <div class="container">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                     <li><a href="#">SERVICES</a></li>
                     <li><a href="#">COURSES</a></li>
                     <li><a href="#">REGISTER</a></li>
                     <li><a href="#">LOGIN</a></li>
                     <li><a href="#">ABOUT</a></li>
                 </div>
       </div>
   </header>
   <table>
   
       
        <div class="container">
          <div class="box">
            <h1 class="text-center"> REGISTER YOURSELF</h1>
            <form method="post" action="register_write_to_db.php" >
             <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="un" class="form-control" required>
              </div>
              <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="em" class="form-control" required>
              </div>
              <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" required>
              </div>
              <div class="form-group">
                        <label>Mobile no.</label>
                        <input type="number" name="mno" class="form-control" required>

               </div>
               <div class="form-group">
                        <label>Department</label>
                        <select name="dept" class="form-control">
                        <option>Agricultural Engineering and Technology</option>
                        <option>Information Technology</option>
                        <option>Computer Science And Engineering</option>
                        <option>Bio-Technology</option>
                        <option>Electronics Communication And Engineering</option>
                        </select>
               </div>
               <div class="form-group">
                        <label>Year</label> (if you are student)
                        <select name="year" class="form-control">
                        <option>First Year</option>
                        <option>Second Year</option>
                        <option>Third Year</option>
                        <option>Fourth Year</option>
                        </select>
                        </div>
                      
               <div class="form-group">
                        
                        <input type="radio"  id="teacher" name="profession" onclick="javascript:subject();" value="teacher"><label id="tech">Teacher</label>
                         <input type="radio"  id="student" name="profession" onclick="javascript:subject();" value="student"><label id="stu">Student</label>
                         <span id="subject" class="input-group" style="display: none;">
                            <input type="text" name="sub1" placeholder="Enter subject you teach" class="form-control">
                            <input type="text" name="sub2" placeholder="Enter subject you teach" class="form-control">
                            <input type="text" name="sub3"placeholder="Enter subject you teach" class="form-control" >
                            <input type="text" name="sub4" placeholder="Enter subject you teach" class="form-control" >
                         </span>
                         
             </div>
          
             <input type="submit" id="sub" name="sub" value="REGISTER">
             Already have an account? <label><a href="#">Login</a></label>
             </form>
            </div>
          </div>
         </body>
</html>