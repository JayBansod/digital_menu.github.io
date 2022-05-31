

<header class="header">

   <div class="flex">

      <a href="http://localhost/restaurant/products.php" class="logo">foodies</a>

      >

      <?php
      $name_='';
      if(isset($_GET['nam'])){
        
         $name_=$_GET['nam'];
        
      }

      $select_rows = mysqli_query($conn, "SELECT * FROM `cart` WHERE table_number ='$name_'") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php?nam=<?php echo $name_;?>" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>