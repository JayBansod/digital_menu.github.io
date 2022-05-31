<?php

$con=new mysqli('localhost','root','','Restaurant');

if(!$con){
    
    die(mysqli_error($con));
}

?>