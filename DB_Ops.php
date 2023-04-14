<?php

 
$localhost="localhost";
$username="root";
$password="";
$dbname="data";


@$conn=mysqli_connect($localhost,$username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$username=$_POST["uname"];
$fullname=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];
$birth=$_POST["birth"];
$address=$_POST["address"];

if(isset($_POST['submit'])){
    $sql= " INSERT INTO users(Full_name,User_name,birthday,phone,address,password,email) VALUES ('$fullname','$username','$birth',
    '$phone','$address','$password','$email')";
        
    //isset mean that i press the button



    if($conn->query($sql) === TRUE){
        echo "record added susccessfully";
    }else{
        echo "error".$sql.$conn->error;
    }

$conn->close();
}



?>