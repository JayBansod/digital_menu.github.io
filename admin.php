<?php
 $name_='';
 @include 'config.php';
 if(isset($_GET['nam'])){
   
    $name_=$_GET['nam'];
   
 };
 
 
 if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
    // header('location:cart.php');
    echo "<script>
    alert;windoes.location.assign('admin.php');
    </script>";
 };
 
 
 
?>
 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body{
            background: url(image/bg.webp);
            background-size: 100%;
        }

        .element {
            margin-top: 15px;
            border-radius: 10px;
            background-color: aqua;
            width: 28%;
            height: 80vh;
            /* display: block; */
            display: flex;
            justify-content: center;
            align-items: center;
            float: left;
        }

        .display {
            margin-top: 15px;
            border-radius: 10px;
            background-color: bisque;
            float: right;
            width: 70%;
            height: 80vh;

        }

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

        .item {

            /* margin-top: 55px; */
            /* margin-left: 30%; */
            padding: 10px;
            display: flex;
            flex-direction: column;
            width: 50%;
            justify-items: center;
        }

        .order {
            padding: 10px;
            height: 88vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        button {
            margin-top: 30px;
            width: 200px;
            height: 40px;
        }

        a {
            text-decoration: none;
        }
        .number{
            margin-left: 30px;
        }
        .display_order{         
            margin:4px, 4px; 
            padding:4px; 
            width: 100%; 
            height: 78%; 
            overflow-x: hidden; 
            overflow-y: auto; 
            text-align:justify; 
        }
        th{
            text-align:center;
            background-color: black;
            color: wheat;
            font-size:24px;
            position: relative;
            
        }
        td{
            text-align:center;
            border-bottom:1pt solid black;
        }
        
        
    </style>
</head>

<body>
    <div class="name">
        <h3>Foodies</h3>
    </div>
    <div class="element">
        <div class="item">
            
            <button>
                <link rel="stylesheet" href=""><a href="http://localhost/restaurant/admin_menu_display_starters.php" target="#" s>Add  or Delete or Update STARTERS </a></link>
            </button>
            
            <button>
                <link rel="stylesheet" href=""><a href="http://localhost/restaurant/admin_menu_display_main_course.php" target="#" s>Add or Delete or Update Main course</a></link>
            </button>
            
            
        </div>
    </div>
    <div class="display">
        <div class="order">
            <div class="display_order">
<table style="width: 100%;">

<thead>
    <th>Table no</th>
   <th>Image</th>
   <th>Name</th>
   <th>Quantity</th>
   <th>Total price</th>
   <th>Action</th>
</thead>

<tbody >

   <?php 
   
   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` where is_confirmed = 1 ORDER By table_number ");
   $grand_total = 0;
   if(mysqli_num_rows($select_cart) > 0){
      while($fetch_cart = mysqli_fetch_assoc($select_cart)){
   ?>

   <tr>
       <td><?php echo $fetch_cart['table_number']; ?></td>
      <td><img src="image/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
      <td><?php echo $fetch_cart['name']; ?></td>

      <td >
         <form action="" method="post">
            
            <?php echo $fetch_cart['quantity']; ?>
            
         </form>   
      </td>
      <td>$<?php echo $sub_total = number_format($fetch_cart['prise'] * $fetch_cart['quantity']); ?>/-</td>
      
      <td><a href="admin.php?remove=<?php echo $fetch_cart['id']; ?>"  class="delete-btn " style="background-color: #ea2f2f;color: white;border-radius: 3px;"> <i class="fas fa-trash "></i> Remove</a></td>
   </tr>
   <?php
     $grand_total += $sub_total;  
      };
   };
   ?>
   
   

</tbody>

</table>
            </div>
        </div>
    </div>
</body>

</html>