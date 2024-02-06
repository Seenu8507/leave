<?php
     $db_hostname="127.0.0.1";
     $db_username="root";
     $db_password="";
     $db_name="test";

     $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
     if(!$conn){
        echo "connection failed".mysqli_connect_error();
        exit;
     }

     $name=$_POST['name'];
     $username=$_POST['username'];
     $password=$_POST['password'];

     $sql="INSERT INTO register(name,username,password)values('$name','$username','$password')";

     $result=mysqli_query($conn,$sql);
     if(!$result){
        echo "ERROR".mysqli_error($conn);
        exit;

   
     }
     echo "register succefully!!!";
     mysqli_close($conn);
?>
