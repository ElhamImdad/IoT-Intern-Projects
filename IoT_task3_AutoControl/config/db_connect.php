<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Elham', '0538223673','auto_control');

    //check connection
    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    } 
?>