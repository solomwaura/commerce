<?php include 'checkout.php'; ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: green;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  border-radius:10px;
  /* position: fixed; */
  /* bottom: 100px;
  right: 50%px; */
  width: 100%;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 50px;
  /* right: 15px; */
  /* border: 3px solid #f1f1f1; */
  z-index: 9;
 
}

/* Add styles to the form container */
.form-container {
  max-width: 90%;
  padding: 10px;
  background-color: aqua;
  border-radius: 15px;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius: 10px;
}
.form-container label {
  float:left;
}
.form-container p {
  float:left;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: orangered;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>


<button class="open-button" onclick="openForm()">Checkout</button>

<center>
<div class="form-popup" id="myForm">
  <form action="cart.php" class="form-container" method="post">
  <p style="color:green;"><?php echo $message; ?></p>
  <p style="color:red;"><?php echo $message2; ?></p>
    <h1>Jumbo Checkout</h1>
      
<p>
Your subtotal:
$ <?php echo number_format($total, 2); ?>
</p>
<br>

<br>
    <label for="text"><b>Name:</b></label>
    <input type="text" placeholder="Enter Your Name" name="payee" required>

    <label for="psw"><b>Phone/Account Number:</b></label>
    <input type="text" placeholder="Enter Phone/Account Number" name="phone" required>
    
    <input type="hidden" placeholder="" name="total" required value="$ <?php echo number_format($total, 2); ?>">

   
    <input type="hidden" placeholder="" name="invoice" required value="<?php echo $invoice ; ?>"> 

    <button type="submit" class="btn" name="pay">Pay</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</center>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>