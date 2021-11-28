<?php include 'links.php'; ?>
<?php include 'sellerlogincode.php'; ?>
<head>
  <title>login</title>
</head>
<body>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" id="reg">
      <form action="sellerlogin.php" method="POST">
<center>
  <h4>Login.</h4>
  <p style="color: red;"><?php echo $message ; ?></p>
  </center>
 <h5 style="color: red;"><?php echo $erre ; ?></h5>
<label>Enter your Email:</label>
  <br>
  <input type="email" name="email" placeholder="Enter your email" class="form-control"/>
<br>
<h5 style="color: red;"><?php echo $errp ; ?></h5>
<label>Enter Your password:</label>
  <br>
  <input type="password" name="pass" placeholder="Enter your password" class="form-control"/>
<br>

<input type="submit" name="login"  class="form-control btn btn-success" value="Login" id="submit"/>
<br>
<p>Don't have an account <a href="sellerregister.php">Register?</a></p>   
<div class="input-group">
  <div class="form-outline">
   
</div>
<p><a href="index.php">Back</a></p>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>