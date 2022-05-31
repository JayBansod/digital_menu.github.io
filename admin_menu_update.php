<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `starters` where id=$id ";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$prise=$row['prise'];
$image=$row['image'];




if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $prise=$_POST['prise'];
  $image=$_POST['image'];
  

  $sql="update `starters` set id=$id,name='$name',prise='$prise',image='$image' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data successfully updated";
    // header('loaction:CRUD/display.php');


    header('location:admin_menu_display_starters.php');
    
  }
  else{
    die(mysqli_error($con));
  }
}

?>







<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <title>Update</title>
  <style>

  
    body{
            background: url(image/bg.webp);
            background-size: 100%;
            margin-top: 14%;
            text-align: center;
            font-size: xx-large;
        }
      
  </style>
</head>


  <div class="conatiner mr-5">
      <div class="form">

        <form method="post">
          <h3>Update Starters</h3>
          
          Name : 
          <input type="text" name="name" id="name1" placeholder="Enter name" required value="<?php echo $name ;?>">
          <br>
          Price : 
          <input type="text" name="prise" id="" placeholder="Enter prise" value="<?php echo $prise ;?>">
          <br>
          Image : 
          <input type="file" name="image" id="" accept=".jpg, .jpeg, .png" placeholder="chose image" value="<?php echo $image ;?>">
          <br>
          <button type="submit" class="" name="submit">Update</button>
        </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>