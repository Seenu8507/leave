<?php
     session_start();
     $db_hostname="127.0.0.1";
     $db_username="root";
     $db_password="";
     $db_name="test";

     $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
     if(!$conn){
        echo "connection failed".mysqli_connect_error();
        exit;
     }
    
     $username=$_POST['username'];
     $password=$_POST['password'];

     $sql="SELECT *FROM register WHERE username='$username' AND password='$password'";

     $result=mysqli_query($conn,$sql);
     if(!$result){
        echo "ERROR".mysqli_error($conn);
        exit;
     }
     $row=mysqli_fetch_assoc($result);
    if($row){
      echo  "hello" .  $row['name'] . "<br/>";   
    $_SESSION['username']=$row['username'];
    $_SESSION['name']=$row['name'];
    setcookie("username",$row['username'],time()+3600);
    setcookie("name",$row['name'],time()+3600);
        ?>
        <style>
            .h2{
                justify-content:center;
                display:flex;
                align-items:center;
                margin-top: 200px;
                left: -20px;
                
            }
            .loading{
                justify-content:center;
                display:flex;
                align-items:center;
                position:relative;
                margin-top: 90px;
                left:620px;
                border:4px solid orange;
                width:100px;
                height:100px;
                border-radius:50%;
                border-right-color:transparent;
                animation:rot 1s linear infinite;
            }

            @keyframes rot{
                100%{
                transform:rotate(360deg);
                }

            }
          
        </style>
        <a class="h2"   href="mainweb.html">GO</a>

        <div class="loading" ></div>
        <?php
    }
    else{
        echo "login failed/>";

    }
    mysqli_close($conn);
?>


