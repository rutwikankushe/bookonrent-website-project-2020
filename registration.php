<?php

include '';
if(isset($_POST['submit'])){
  $email=mysqli_real_escape_string($con, $_POST['Email']);
  $password=mysqli_real_escape_string($con, $_POST['Pass']);
  $cpassword=mysqli_real_escape_string($con, $_POST['Pass-confirm']);


  $emailquery = "select * from registeration where email='$email' ";
  $query = mysqli_query($con, $emailquery );

  $emailcount = mysqli_num_rows($query);

  if($emailcount>0){
    echo "email already exists";
  }
  else{
    if ($password === $cpassword) {

      $insertquery = "insert into egisteration ( email , password , cpassword ) VALUES ('$email','$password','$cpassword')";

      $iquery = mysqli_query($con, $insertquery);

      if($iquery){
        ?>
         <script >
               alert("Inserted Succesful");
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