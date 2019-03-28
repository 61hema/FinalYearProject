<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] , input[type=option] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  
}

button:hover {
  opacity: 0.8;
}





.container {
  padding: 16px;
}

span.psw {
  float: center;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 align="">Login Form</h2>

<form action="login_code.php" method="POST">
  
  <div class="container" >
      <label for="uname"><b>Email</b></label></br>
    <input type="text" placeholder="Enter Username" name="email" required></br>

    <label for="psw"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="password" required></br>
   
        
    <button type="submit">Login</button>
    <label>
    
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
