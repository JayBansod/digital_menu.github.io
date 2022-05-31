<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    
  $name=$_POST['name'];
  $prise=$_POST['prise'];
  $img=$_POST['img'];

  $sql="insert into `starters` (name,prise,image) values ('$name','$prise','$img')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo"<script =rel> alert('Image inserted')</script>";
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
    <title>Add</title>
    <style>
        .name {
            background-color: black;
            height: 10vh;
            border-radius: 10px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: aqua;
        }

        .center {
   
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border: 5px solid purple;
            margin-left: 40%;
            margin-right: 40%;
            border-radius: 20%;
            height: 50vh;            
        }

        input {
            margin: 10px;
            height: 5vh;
        }

        button {
            margin: 10px;
            width: 5vw;
            height: 5vh;

        }

        h1{
            text-align: center;
            font-size:xx-large;
            color: blueviolet;
            font: bolder;
            font-family: serif
        }

        .form{
            border: 2px solid red;


        }

        .input{
            color:black;
        }

        h2{
            color: purple;
        }

        body{
            background: url(image/bg.webp) !important;
            background-size: 100% !important;

        }
    </style>
</head>

<body style="background: url(image/BG.jpg);">
    <form method="post">
        <div class="name">
            <h1>ADMIN'S CONSOLE</h1>
        </div>
        <form action="" method="post">

            <div class="center">

                <h2>STARTERS</h2>

               <input type="text" name="name" id="name1" placeholder="Enter Name" required>


                <input type="text" name="prise" id="" placeholder="Enter Price">


                <input type="file" name="img" id="" accept=".jpg, .jpeg, .png" placeholder="chose image" class="input">



                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
</body>


</html>