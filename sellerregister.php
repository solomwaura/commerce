<?php include 'sellerregistercode.php' ?>
<?php include 'links.php'; ?>
<head>
  <title>register</title>
</head>
<body>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" id="reg">
      <form action="sellerregister.php" method="POST">
<center>
  <h4>Register.</h4>
  <p style="color: red;"><span><?php echo $message ?></span></p>
  </center>
  <p style="color: red;"><?php echo $Err ; ?></p>
  <p style="color: greenyellow;"><?php echo $success ; ?></p>
  
  <label>First name:</label>
  <br>
  <input type="text" name="fname" placeholder="Enter your first name" class="form-control" />
<br>

<label>Last name:</label>
  <br>
  <input type="text" name="lname" placeholder="Enter your last name" class="form-control"/>
<br>

<label>Email:</label>
  <br>
  <input type="email" name="email" placeholder="Enter your email" class="form-control" />
<br>

<label>Enter Your password:</label>
  <br>
  <input type="password" name="pass" placeholder="Enter your password" class="form-control" />
<br>
<p style="color: red;"><?php echo $confirm ; ?></p>
<label>Confirm Your Password:</label>
  <br>
  <input type="password" name="pass2" placeholder="Confirm your password" class="form-control"  />
<br>
<input type="submit" name="register"  class="form-control btn btn-success" value="Register" id="submit"/>
<br>
<p>Already have an account <a href="sellerlogin.php">Login?</a></p>

<p><a href="index.php">Back</a></p>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>