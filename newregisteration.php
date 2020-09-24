<?php
 include 'dbcon.php';

 if(isset($_POST['submit'])){
   $email=mysqli_real_escape_string($con, $_POST['Email']);
   $password=mysqli_real_escape_string($con, $_POST['Pass']);
   $cpassword=mysqli_real_escape_string($con, $_POST['Pass-confirm']);

  $emailquery = "select * from newregisteration where email='$email' ";
  $query = mysqli_query($con, $emailquery );

   $emailcount = mysqli_num_rows($query);

   if($emailcount>0){
     echo "email already exists";
   }
   else{
     if ($password === $cpassword) {

      $insertquery = ("insert into newregisteration(email,password,cpassword) VALUES('$email','$password','$cpassword')");
      $iquery = mysqli_query($con, $insertquery);
      if($iquery){
        ?>
          <script >
                alert("Register Succesfully Now you can login...please go back and login");
          </script>
 
      <?php
       }else{
       ?>
       <script >
       alert("No inserted Succesful");      
      </script>
      <?php
     }
    }
    else{
       echo "password are not matching";
    }
  }

 }

?>    