<?php
session_start();
?>

<?php
include 'dbcon.php';
$email = $password  = '';
$email = $_POST['email'];
$password = $_POST['Pass'];

$sql = "SELECT * FROM newregisteration WHERE email='$email' AND password ='$password' ";
$query = mysqli_query($con , $sql);

if(mysqli_num_rows($query)>0)
{
   while ($row = mysqli_fetch_assoc($query))
   {
      $id = $row["ID"];
      $email = $row["email"];
      session_start();
      $_SESSION['id'] = $id;
      $_SESSION['email'] =$email;
   }
   header("location:myprofile.html");
}else
{
echo "INVALID EMAIL AND PASSWORD";
}

// if(isset($_POST['log'])){
//    $email = $_POST['email'];
//    $password = $_POST['Pass'];

//    $email_search = " select * from newregisteration where email='$email' ";
//    $query= mysqli_query($con,$email_search);

//    $email_count = mysqli_num_rows($query);

//    if($email_count){
//       $email_pass = mysqli_fetch_assoc($query);

//       $dppass = $email_pass['password'];

//       $pass_decode = password_verify($password, $dppass );

//       if($pass_decode){
//          echo "login success";
//          header('location:index.html');
//       }
//       else{

//       echo"password incorrect";}

// }else{
//       echo"invalid email";
//    }
// }
?>