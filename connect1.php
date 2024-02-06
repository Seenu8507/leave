<?php
    
    $year=$_POST['year'];
    $department=$_POST['department']
    $day=$_POST['day']
    $date=$_POST['date']
    $reason=$_POST['reason']
    $conn=new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection failed :'.$conn->connection_error);
    }else{
        $stmt=$conn->conn->prepare("insert into leave(year,department,day,date,reason)values(?,?,?,?,?)");
        $stmt->bind_param("ss",$year,$department,$day,$date,$reason);
        $stmt->execute();
        echo "submit successfully...";
        $stmt->close();
        $conn->close();

    }
?>