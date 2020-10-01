<?php
session_start();
require_once('component.php');
require_once('createdb.php');
$db = new CreateDb("Productdb", "Producttb");



?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>book on rent</title> 
    <link rel="stylesheet" href="readlist.css?v=<?php echo time(); ?>">     
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,531;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>    
<body>

  <nav>
    <div class="row" clearfix>
      <img src="images/logo.png" class="logo">

      <ul class="main-nav" id="check-class" >
        <li><a href="myprofile.html">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT</a></li>
        <a href="logout.php" class="btn1 btn-nav">LOGOUT</a>
        <a href="submitprofile.html" class="btn2 btn-full">MY PROFILE</a>
      </ul>
      
    </div>
  </nav>





 
  <div class="shopping-cart ">
  <!-- Title -->
  <div class="title">
    My Readlist

  </div>
  <?php
  if (isset($_SESSION['cart'])){
                        $id = array_column($_SESSION['cart'], 'book_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($id as $book_id){
                                if ($row['book_id'] == $book_id){
                                    cartElement($row['book_image'], $row['book_name'],$row['book_edition'],$row['book_price'],$row['book_id']);
                                    
                                }
                            }
                        }
                        }else{

                        echo "<h5 class=\"empty\">Cart is Empty</h5>";
                    }
                  

  ?>
 <!-- <form action="cart.php" method="get" class="item"> 
 
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
    <div class="image">
      <img src="book1.jpg" alt="" />
    </div>
 
    <div class="description">
      <span>Rich Dad Poor Dad</span>
      <span>Marathi edition</span>
      <span>Paperback</span>
    </div>
 
    <div class="quantity">  
      1
    </div>
 
    <div class="total-price">Rs.60</div>
  </div>
 

 </form> -->
  </div>
</div>

<div class="backpage"><a href="cart.php" class="previous">&laquo; back to previous page</a>
</div>

 


  

</body>    
</html>     