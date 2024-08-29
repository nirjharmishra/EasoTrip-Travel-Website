<?php
$servername="localhost";
$username="root";
$password="";
$database="user_auth";

//create connection
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
else{
    if(isset($_POST['btn'])){
        $first=$_POST['first'];
        $second=$_POST['second'];
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
    $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$first', '$second', '$mail', '$pass');"; 
if(mysqli_query( $conn,$sql)){  
  echo "Record Inserted successfully.";  
}else{  
echo "Sorry, record insertion failed ".mysqli_error($conn);  
}  
}
}
?>

