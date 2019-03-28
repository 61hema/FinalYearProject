<?php

$conn = new mysqli("localhost", "root", "", "project");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_POST["sub"])){
        
        
     $name = $_POST["Username"];
     $email = $_POST["Email"];
     $password = $_POST["Pass"];
    $mobile = $_POST["Mob_no"];
    $dept = $_POST["dept"];
    $year = $_POST["year"];
    $sub1 = $_POST["Sub1"];
    $sub2 = $_POST["Sub2"];
    $sub3 = $_POST["Sub3"];
    $sub4 = $_POST["Sub4"];
    
    $tablename = $_POST["profession"];
    if($tablename === 'teacher'){
        echo $tablename;
      $id=  insertIntoUsers($name,$email, $password, $tablename, $conn);
    
    $sql = "INSERT INTO teacher (id,Mobile_no,Department,Sub1,Sub2,Sub3,Sub4)";
    
$sql.= "VALUES ('$id','$mobile','$dept','$sub1','$sub2','$sub3','$sub4')";
    }
    else{
        $id=  insertIntoUsers($name,$email, $password, $tablename, $conn);
        $sql = "INSERT INTO student  (id,Mobile_no,Department,Year)";
    
$sql.= "VALUES ('$id','$mobile','$dept','$year')";
    }
if ($conn->query($sql) === TRUE) {
    
    
    
    echo "inserted succesfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

        
        
    }
    }
   
    
 //This function is to insert new user into the users table in db   
function insertIntoUsers($username,$email,$password,$role,$con){
     $sql = "INSERT INTO users  (username,email,password,role)";
    
$sql.= "VALUES ('$username','$email','$password','$role')";
   if ($con->query($sql) === TRUE) {
        $last_id = $con->insert_id;
        return  $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

}



    
    
    
    


?>