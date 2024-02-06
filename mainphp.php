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

     $year=$_POST['year'];
     $department=$_POST['department'];
     $day=$_POST['day'];
     $date=$_POST['date'];
     $reason=$_POST['reason'];

     $sql="INSERT INTO leave(year,depatment,day,date,reason)values('$year','$department','$day','$date','$reason')";

     $result=mysqli_query($conn,$sql);
     if(!$result){
        echo "ERROR".mysqli_error($conn);
        exit;

   
     }
     echo "THANK YOU";
     mysqli_close($conn);
?>
