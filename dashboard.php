<?php 
        session_start();
        $userid=$_SESSION['userid'];
        $name=$_SESSION['name'];
        echo "hello". $name;
     
?>