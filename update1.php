<!DOCTYPE html>    
<html>    
<head>    
    <title>book on rent</title>    
    <link rel="stylesheet" type="text/css" href="submitprofile.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,531;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,531;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>    
<body>
<header>
  <nav>
    <div class="row" clearfix>
      <img src="images/logo.png" class="logo">

      <ul class="main-nav" id="check-class" >
        <li><a href="index.html">HOME</a></li>
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
      
    </div>
  </nav>
  <div class="main-content">
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
  <div class="profile">
    <center>
  <h1 class="reder-profile">MY PROFILE</h1>  </center> 

<?php
 include 'dbcon.php';

 $ids = $_GET['id'];

 $showquery = "select * from myprofile where id={$ids}";

 $showdata = mysqli_query($con,$showquery);

 $arrdata = mysqli_fetch_array($showdata);

 if(isset($_POST['submit'])){
   $name=mysqli_real_escape_string($con, $_POST['name']);
   $phone=mysqli_real_escape_string($con, $_POST['phone']);
   $adhar=mysqli_real_escape_string($con, $_POST['adhar']);
   $city=mysqli_real_escape_string($con, $_POST['city']);
   $pincode=mysqli_real_escape_string($con, $_POST['pincode']);
   $home=mysqli_real_escape_string($con, $_POST['home-add']);
   $office=mysqli_real_escape_string($con, $_POST['off-add']);

  $adharquery = "select * from myprofile where adhar='$adhar' ";
  $query = mysqli_query($con, $adharquery );

  $adharcount = mysqli_num_rows($query);

   if($adharcount>0){
     echo "adhar number already exists";
           }
   else{ $insertquery = ("insert into myprofile( `name`, `phone`, `adhar`, `city`, `pincode`, `home`, `office`) VALUES ('$name','$phone','$adhar','$city','$pincode','$home','$office')");
      // INSERT INTO `myprofile`(`id`, `name`, `phone`, `adhar`, `city`, `pincode`, `home`, `office`) VALUES ('$name','$phone','$adhar','$city','$pincode','$home','$office')

      $iquery = mysqli_query($con, $insertquery);
      if($iquery){
        ?>
          <script >
                alert("Your details submitted Succesfully");
          </script>
 
      <?php
       }
     
       else{
       ?>
       <script >
       alert("Your details not submitted try again..");      
      </script>
      <?php
           }
    }

 }

?>     
    <form id="profile" method="POST" action="display.php">    
        <label><b>Name     
        </b>    
        </label>    
        <input type="name" name="name" id="name" placeholder="Name*" value="<?php echo $arrdata['name']?>" required>    
        <br><br>    
        <label><b>Phone     
        </b>    
        </label>    
        <input type="number" name="phone" id="phone" placeholder="phone*" value="<?php echo $arrdata['phone']?>" required>    
        <br><br>
        <label><b>Adhar Number     
        </b>    
        </label>     
        <input type="number" name="adhar" id="adhar" placeholder="Adhar Number*" value="<?php echo $arrdata['adhar']?>" required>    
        <br><br>
        <label> <b>City 
        </b> </label>
        <select id="city" name="city" value="<?php echo $arrdata['city']?>" >
        <option value="Pimpari">Pimpari</option>
        <option value="Alandi">Alandi</option>
        <option value="Moshi">Moshi</option>
        <option value="Bhosari">Bhosari</option>
        <option value="Akurdi">Akurdi</option>
        </select>
        <br><br>
        <label> <b>Pincode 
        </b> </label>
        <select id="pincode" name="pincode" value="<?php echo $arrdata['pincode']?>" >
        <option value="412303">412303</option>
        <option value="412105">412105</option>
        <option value="410506">410506</option>
        <option value="411026">411026</option>
        <option value="411035">411035</option>
        </select>
        <br><br>
        <label><b>Home Address    
        </b>    
        </label><br>     
        <textarea type="text" name="home-add" id="home-add" placeholder="Home address*" value="<?php echo $arrdata['home-add']?>" required></textarea>    
        <br>
        <label><b>Office Address
        </b>    
        </label><br>     
        <textarea type="text" name="off-add" id="off-add" placeholder="Office address (optional)" 
        value="<?php echo $arrdata['off-add']?>"></textarea>    
        <br><br>
        <div class="from-log"> 
        <input type="submit" name="submit" id="reg" class="button reg" value="Update">       
        <br><br> 
      </form>     
</div>    



</header>    
    
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