<?php
 include 'dbcon.php';

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