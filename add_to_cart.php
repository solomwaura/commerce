<?php include 'conn.php'; ?>
<?php 
 if(isset($_POST['add_to_cart'])) {
  
  
    $pname = $_POST['hidden_name'];
    $price = $_POST['hidden_price'];
    $quantity = $_POST['quantity'];
    $total = $price*$quantity;
  
    
  
 

  $asql = "INSERT INTO cart (pname,price,quantity,total)
  VALUES ('$pname','$price','$quantity','$total')";

  if(mysqli_query($conn,$asql)) {
    $message = "Successfully added";
  }
  else {
    $message = "Failed to add to cart";
  }
 }



?>