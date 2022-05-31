<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `starters` where id=$id";
    $result=mysqli_query($con,$sql);

    if($result){
        // echo "Deleted successfully";
        echo"<script =rel> alert ('Deleted successfully')</script>";
        header('location:admin_menu_display_starters.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>