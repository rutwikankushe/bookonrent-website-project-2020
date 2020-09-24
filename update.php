<?php
  include 'dbcon.php';
  session_start();

// include("includes/header.php");
// include("includes/nav.php");
  $id = $_SESSION['id'];
if(login()) {//you can do if($id){}  
    $query="SELECT * FROM myprofile WHERE id='$id' LIMIT 1";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
?>

 <!-- $id=$_SESSION['id'];
 $query=mysqli_query($con,"SELECT * FROM myprofile where id='$id'")or die(mysqli_error());
 $row=mysqli_fetch_array($query);
 ?> -->
<?php
      if(isset($_POST['submit'])){
        // $fullname = $_POST['fname'];
        // $gender = $_POST['gender'];
        // $age = $_POST['age'];
        // $address = $_POST['address'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $adhar= $_POST['adhar'];
        $city= $_POST['city'];
        $pincode= $_POST['pincode'];
        $home=$_POST['home-add'];
        $office= $_POST['off-add'];
        
     $query = "UPDATE myprofile SET name  = '".$name."',phone = '".$phone."', adhar = '".$adhar."', city = '".$city."', pincode = '".$pincode."' , home ='".$home."' , office = '".$office."' WHERE id='".$_SESSION['id']."'"; 
       }
      
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                 ?>  
          <script>
                alert("Your details submitted Succesfully");
        </script>
        <?php
        }              
?>