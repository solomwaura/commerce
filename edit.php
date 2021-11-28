<?php include 'updatecode.php'; ?>
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
  <div class="col-md-6">
  <form action="update.php" method="POST" enctype="multipart/form-data">
  <label>Name:</label>
  
  <br>
<input type="text" name="name"  class="form-control" placeholder="product name" value=" <?php echo $name ?>"/>
<br>
<label>Product Category:</label>
<br>
<select name="category" id="category" class="form-control">
	<option value="all">All</option>
	<option value="electronics">Electronics</option>
	<option value="clothing">Clothes</option>
	<option value="textiles">Textiles</option>
	<option value="drinks">Drinks</option>
	<option value="furnitures">Furnitures</option>
	<option value="computing">Computing Devices</option>
	<option value="Motors">Motors</option>
</select>

<label>Price:</label>
<br>

<input type="text" name="price"   value="<?php echo $price ?>" class="form-control" />

<br>
<label>Image:</label>
<br>

<input type="file" name="image"  class="form-control"/>
<br>
<br>
<input type="submit" value="Update" name="update" class="form-control btn btn-primary"/>
</form>
  </div>
  <div class="col-md-3">
 
  </div>
</div>
</body>
<?php
  
  ?>