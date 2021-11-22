<?php include 'conn.php'; ?>
<?php
 
 session_start();

if(isset($_GET['delete'])) {

  $id = $_GET['delete'];

  
  
$dsql = "DELETE FROM products  WHERE id=$id";

$result = mysqli_query($conn,$dsql);

if(mysqli_num_rows($result) == TRUE) {

  $msg = "successfully deleted";
  $_SESSION['message'] = "Record has been deleted";
  $_SESSION['msg_type'] = "danger";

  header("location:admin.php");
}



}

if(isset($_GET['edit'])) {
  $id = $_GET['edit'];

  $esql =("SELECT *FROM products WHERE id= $id") or die($mysqli->error());
  $result = mysqli_query($conn,$esql);
  if($row = mysqli_num_rows($result) ==1) {
    $row = $result->fetch_array();
    $name = $row['pname'];
    $price = $row['price'];
  }
}
$msg = "";
if(isset($_POST['update'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];

  $usql = "UPDATE products SET  pname='$name' price='$price' WHERE id=$id";
 
  if(mysqli_query($conn,$usql)) {
    $msg = "Data updated successfully";
  }
  else {
    $msg = "failed to update:" . mysqli_error($conn);
  }

  header('location: admin.php');
  
}
?>

