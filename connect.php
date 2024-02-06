<?php
 
    $email=$_POST['email'];
    $password=$_POST['password']
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed :'.$conn->connection_error);
    }else{
        $stmt=$conn->conn->prepare("insert into signup(username,password)values(?,?)");
        $stmt->bind_param("ss",$username,$passwword);
        $stmt->execute();
        echo "signup successfully...";
        $stmt->close();
        $conn->close();

    }
?>

    