<?php
$conn = new mysqli("localhost", "root", "", "project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SERVER['REQUEST_METHOD']=='POST'){
    
  if(!isset($_POST['email']) || !isset($_POST['password'])){
     $output = 'Please enter credentials!';
     die($output);
    }
     $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email;
     
   $sql="select role from users where email='".$email."' and password='".$password."'";
   $result = $conn->query($sql);
    $row = mysqli_fetch_array( $result );
   $role= $row['role'];
   if($result->num_rows ==1){
      
   } else{
       
   }
             
}         
  ?>