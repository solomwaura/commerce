<?php include 'conn.php'; ?>
<?php 
session_start();
 $message = $fnameErr =  $lnameErr = $emailErr = $pass2Err = $passErr = $confirm = $success = $Err ="";
if(isset($_POST['register'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];

  $_SESSION['user'] = $fname;

  if(empty($_POST['fname'])) {
    $Err = "Please fill out the required fields";
  }
  if(empty($_POST['lname'])) {
    $Err = "Please fill out the required fields";
  }
  if(empty($_POST['email'])) {
    $Err = "Please fill out the required fields";
  }
  if(empty($_POST['pass'])) {
    $Err = "Please fill out the required fields";
  }
  if(empty($_POST['pass2'])) {
    $Err = "Please fill out the required fields";
  }
  if(empty($_POST['pass2'])){
    $confirm = "Please confirm your password";
  }
  if(!empty($pass) && empty($pass2)) {
    $confirm = "please confirm your password";
  }
  if($pass != $pass2) {
    $confirm = "The two password do not match";
  }
  if(!empty($Err) ) {
    $Err = "Please fill out the required fields";
  }
 
  

  $hashed = hash('sha512',$pass);
  $salted = "jdfhjwfdfjsh".$hashed."hdhjdkjddsk";

  $sql = "INSERT INTO users(fname,lname,email,a_password)
   VALUES('$fname','$lname','$email','$salted')";

   if($conn->query($sql) == TRUE) {

    header('location:index.php');
   }
   else {
     $message ="Failed to register";
   }

}

?>