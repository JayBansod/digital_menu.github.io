<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        table{
            display: flex;
            align-content: center;
            justify-content: center;
        }
        img{
            border-radius: 50%;
            width: 150px;
        }
        

        table th {
            border: 1px solid #347e87;
            width: 150px;
            height: 30px;
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
        .add_button{
            /* display:flex; */
        }
        
        body{
            background: url(image/bg.webp);
            background-size: 100%;
            /* margin-top: 18%; */
        }
        </style>
</head>
<body>
<div class="name">
            <h3>Foodies</h3>
            
        </div>
        <div class="add_button">
        <button>
                <link rel="stylesheet" href=""><a href="http://localhost/restaurant/admin_menu_add_main_course.php" target="#" s>Add Main course</a></link>
            </button>
        </div>
 
        <table>
            <thead>
                <tr>
                <!-- <th scope="col">Sl no</th> -->
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Prise</th>
                <th scope="col">Operation</th>
                </tr>

                <?php
                    $sql="select * from `main_course`";
                    $result=mysqli_query($con,$sql);

                    if($result){
                        
                        
                        while($row=mysqli_fetch_assoc($result)){
                            // $id=$row['srno'];
                            $id=$row['id'];
                            $name=$row['name'];
                            $prise=$row['prise'];
                            $image=$row['image'];
                            
                            ;
                            echo '
                            <tr>

                            <th scope="col"><img src="image/'.$image.'" width="300px">
                            <th scope="col">'.$name.'</th>
                            <th scope="col">'.$prise.'</th>
                            <th>
                            <button><a href="admin_menu_update_main_course.php? updateid='.$id.'">Update</a></button>
                            <button><a href="admin_menu_delete_main_course.php? deleteid='.$id.'">Delete</a></button>
                        </th>
                            

                            </tr>
                            
                            ';
                        }
                        
                    }
                    
                    ?>
            </thead>
            


        </table>

</body>
</html>