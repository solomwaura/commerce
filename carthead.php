<?php include 'links.php'; ?>

<style>

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
    <a href="test.php" id="link">
      Sell on Mini
    </a>
  </div>
  <div class="col-md-1" id="guide">
    <a href="./Admin/admin.php">Guide</a>
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
    <!-- <a href="cart.php">
    <img src="./svgs/shopping-cart-solid.svg" class="svg" width="30px"/>  
    My Cart
    </a> -->
    
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