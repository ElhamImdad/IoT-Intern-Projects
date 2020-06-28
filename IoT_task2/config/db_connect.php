<?php
    //connect to database
    $conn = mysqli_connect('localhost', 'Elham', '0538223673','manual_control');

    //check connection
    if(!$conn){
        echo 'Connection error: '.mysqli_connect_error();
    } 
?>