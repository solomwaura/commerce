<?php include 'customerregistercode.php'; ?>
<?php include 'customerlogincode.php'; ?>


<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>jumbo.com</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" href="style.css">
   <style>
     
#account ul li {
list-style: none;
padding: 4px;
}
#account ul li a {
  text-decoration: none;
}

#account .account {
  display: none;
  position: relative;
}

#account ul li:hover .account {
  display: block;
}
#category {
  padding: 10px;
  background-color: orangered;
}
#category a {
  text-decoration: none;
  color: white;
  font-size:18px;
  letter-spacing: 2px;
  padding:10px;
  border-radius:3px;
}
#category a:hover{
  background-color:white;
  color:orangered;
}
#category a:active {
  background-color:black;
}
   </style>
 </head>
 <body>
   

    <div class="cont">

      <div class="row">
        <div class="col-md-2">
          <h4>Jumbo</h4>
        </div>
        <div class="col-md-3">
          <a href="#mail" id="link">
            <img src="./svgs/envelope-open-solid.svg" width="30px" class="svg"/>
           solomonmicro@gmail.com</a> <br>
          <a href="#phone" id="link"> 
          <img src="./svgs/phone-square-solid.svg" width="30px" class="svg"/>  
          +25474790215</a>
        </div>
        <div class="col-md-2">
          <a href="sellerlogin.php" id="link">
            Sell on Mini
          </a>
        </div>
        <div class="col-md-1" id="guide">
          <a href="guide.php">Guide</a>
        </div>
        <div class="col-md-2" id="account">
          <ul>
            <li>  <a href="#">Login</a> | 
          <a href="#">Join us</a>
            <div class="account">
              <center>
              <ul>
                <li>  <a href="customerlogin.php">Customer</a></li>
                <li><a href="sellerlogin.php">Merchant</a></li>
              </ul>
              </center>
            </div>
        </li>
          </ul>
        
        </div>
        <div class="col-md-2" id="cart">
          <a href="cart.php">
          <img src="./svgs/shopping-cart-solid.svg" class="svg" width="30px"/>  
          My Cart
          </a>
          
        </div>
      </div>
       </div>
        <div class="row" id="category"> 
        <div class="col-sm-1">
       
        </div>
        <div class="col-sm-1">
        <a href="index.php">Home</a>
        </div>
        <div class="col-md-3">
        <a href="electronics.php">Electronics & Computing </a>
            </div>
            <div class="col-sm-1">
            <a href="clothing.php">Clothing</a>
            </div>
            <div class="col-md-2">
        <a href="drinks.php">Food & Drinks</a>
            </div>
            <div class="col-sm-3">
            <a href="furnitures.php">Housing & Funitures</a>
            </div>
            <div class="col-sm-1">
        
        </div>
        </div>
      
 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>