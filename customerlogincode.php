<?php include 'conn.php'; ?>

<?php

$erre = $errp = $message= "";
if(isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $_SESSION['user'] =$email;
  
  if(empty($_POST['email'])) {
    $erre = "please enter your email";
  }
  if(empty($_POST['pass'])) {
    $errp = "Please enter your password";
  }

  $query = mysqli_query($conn,"SELECT *FROM users WHERE email = '$email' 
 ");
  
        $num_rows=mysqli_num_rows($query);
        $row=mysqli_fetch_array($query);
  
        if($num_rows > 0) {
      

          header('location:index.php');
  }
  

else{
  $message = "No user found";

}
}
?>