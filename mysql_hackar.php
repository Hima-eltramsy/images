<?php
    $host = "localhost";
    $name = "root";
    $pass = "";
    $user = "date";
    
    

    $con= new mysqli(
            $host,
            $name,
            $pass,
            $user);

    
    
    if($con->connect_errno){
        echo' failed'.$con->connect_errno;
    }else{
        echo'connected';
    }
    

    
    
?>