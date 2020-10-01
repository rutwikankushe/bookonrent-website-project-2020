<?php
//start session
session_start();
require_once('component.php');
require_once('createdb.php');

// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){
    	// print_r($_SESSION['cart']);

         $item_array_id = array_column($_SESSION['cart'], "book_id");

        if(in_array($_POST['book_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'cart.php'</script>";
         }else{

             $count = count($_SESSION['cart']);
             $item_array = array(
                 'book_id' => $_POST['book_id']
             );

             $_SESSION['cart'][$count] = $item_array;
                  // print_r($_SESSION['cart']);

         }

    }else{

        $item_array = array(
                'book_id' => $_POST['book_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}



?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>book on rent</title> 
    <link rel="stylesheet" href="myprofile.css?v=<?php echo time(); ?>">   
   <!--  <link rel="stylesheet" type="text/css" href="myprofile.css">  -->
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

        <!-- <li><a href="#">LOGIN</a></li>
        <li><a href="#">REGISTER</a></li> -->
      </ul>
      <a href="#" class="mobile-icon"  onclick="slideshow()">
        <i class="fa fa-bars" ></i>

      </a>
      <ul class="sec-nav" id="check-newclass" >
        
        <a href="#" class="btn3 btn-new">CATEGORIES</a>
        <a href="#" class="btn3 btn-new">HOW IT WORKS</a>
        <a href="#" class="btn3 btn-new">PRIZE PLAN</a>
        <a href="readlist_cart.php"class="btn3 btn-new">MY READLIST 
        	<?php
        	if(isset($_SESSION['cart'])){
        		$count =count($_SESSION['cart']);
        		echo"<span id=\"cart_count\" >$count</span>";
        	}else{
        		echo"<span id=\"cart_count\" >0</span>";
        	}
        ?>
        	
        </a>
        </ul>
        
</div>
      
    </div>
  </nav>
 
  <!-- <div class="main-content">
    <h1><span class="bigfont"> RENT BOOKS </span> <br> <span class="colorchange">ONLINE HERE</span> </h1>

  </div>
  <div class="next-content">
  <p>
    Through this venture we intend to make reading books<br> 
a hassle free, cost effective and pleasurable experience.<br> 
All you have to do is just sign up, choose a prizing<br>
plan and order the books that you want to read. We deliver<br>
the books to your doorstep, afordable cost. After you finish<br>
reading, just inform us and we will deliver the next books<br> 
and do a free pick of the previous set of books.
  </p> </div>
  <div class="content-three">
    <p>
      RENTING BOOKS SAVES YOUR<br> 
      TIME , MONEY AND SHELF SPACE
    </p>
  </div>
  <div class="bgimage">
  <img src="images/bgimage.png"> </div> -->


  <div class="login">   
    <table  id="login" method="POST" action="login.php">

          <tr>
            <td>
        <input type="text" name="search" id="search" placeholder="Search Book Here..."></td> 
        <td><a href="#" ><i class="material-icons">search</i>
    </a> </td>   
        </tr>
    </table> 
</div>  

<div class="row">
  <h1 class="pop">Popular Books...</h1>

  <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['book_image'], $row['book_name'], $row['book_edition'], $row['book_price'], $row['book_id']);
                }
         
  ?>
 
<!-- <div class="column ">
    	
<div class="card">
	<form action="cart.php" method="POST">
	<center><img src="book1.jpg" alt="Denim Jeans" class="img-fluid card-img-top"></center>
  <center><h1 class="product">Rich Dad poor Dad  <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.60</p></center><br>
  <p><button type="submit" name="add">Add to Readlist</button></p>
</form>
</div>
</div> -->
<!-- <div class="column">
<div class="card">
	<form action="cart.php" method="post">
 <center><img src="book2.jpg" alt="Denim Jeans"></center>
  <center><h1 class="product">Chava Book <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.150</p></center><br>
  <p><button>Add to Readlist</button></p>
</div>
</div>
<div class="column">
<div class="card">
	<form action="cart.php" method="post">
 <center><img src="book3.jpg" alt="Denim Jeans"></center>
  <center><h1 class="product">Yugandhar book <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.100</p></center><br>
  <p><button>Add to Readlist</button></p>
  </form>
</div>
</div>
<div class="column">
<div class="card">
	<form action="cart.php" method="post">
 <center><img src="book4.jpg" alt="Denim Jeans"></center>
  <center><h1 class="product">Yayati Book <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.70</p></center><br>
  <p><button>Add to Readlist</button></p>
  </form>
</div>
</div>

<div class="column">
<div class="card">
	<form action="cart.php" method="post">
 <center><img src="book5.jpg" alt="Denim Jeans"></center>
  <center><h1 class="product">Mrutunjay Book <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.120</p></center><br>
  <p><button>Add to Readlist</button></p>
  </form>
</div>
</div>

<div class="column">
<div class="card">
	<form action="cart.php" method="post">
 <center><img src="book6.jpg" alt="Denim Jeans"></center>
  <center><h1 class="product">Goshti Mansanchya <br> (Marathi edition)</h1></center>
  <center><p class="price">Rs.30</p></center><br>
  <p><button>Add to Readlist</button></p>
  </form>
</div>
</div> -->


</div>



   
   

<script type="text/javascript">
  function slideshow(){
    var x = document.getElementById('check-class');
    if(x.style.display==="none"){
      (x.style.display="block")
    }
    else{
      (x.style.display="none")
    }

  }
</script>
  

</body>    
</html>     