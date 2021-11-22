<?php include 'conn.php'; ?>
<!-- <?php include 'updatecode.php'; ?> -->
<?php include 'process.php'; ?>
<head>
  <title>

  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="admin.php" style="padding: 4px; background-color:aqua">Home</a>
<div class="row">
<div class="col-md-3">
 
 </div>
 <p><?php echo $msg ;?></p>
  <div class="col-md-6">
  <form action="process.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $id;?>"
  <label>Name:</label>
  
  <br>
<input type="text" name="name"  class="form-control" placeholder="product name "  value="<?php echo $name; ?>" />
<br>
<label>Price:</label>
<br>

<input type="text" name="price"  class="form-control" value="<?php echo $price; ?>" />

<br>

<br>
<input type="submit" value="Update" name="update" class="form-control btn btn-primary"/>
</form>
  </div>
  <div class="col-md-3">
 
  </div>
</div>
</body>
