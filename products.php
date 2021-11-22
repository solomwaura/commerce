<?php include 'conn.php'; ?>
<?php include 'process.php'; ?>
<?php include 'links.php'; ?>



<?php



   	$result = $categoryErr ="";
	if (isset($_POST['submit'])) {
	
		$image ='new/'.$_FILES['image']['name'];
		$image = mysqli_real_escape_string($conn,$image);
    $pname = $_POST['name'];
		$category = $_POST['category'];
    $price = $_POST['price'];
		$description = $_POST['description'];
		$merchant = $_SESSION['merchant'];

		if(empty($_POST['category'])) {
			$categoryErr = "please select the category";
		}


		if (preg_match("!image!", $_FILES['image']['type'])) {
			if (copy($_FILES['image']['tmp_name'], $image)) {
				$sql = "INSERT INTO latest(pname,category_id,price,image,merchant,description) VALUES ('$pname','$category','$price','$image','$merchant','$description')";
				if (mysqli_query($conn,$sql)) {
					$result1 ="image successfully uploaded";
				}
				else {
					$result1 = "failed to upload the image";
				}
			}
			else {
				$result1 ="Image upload failed";
			}
		}
		else {
			$result1 ="only upload jpg png and gif images";
		}
	}

mysqli_close($conn);

?>


<head>
  <title>

  </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="seller.php" style="padding: 4px; background-color:aqua">Home</a>
<div class="row">
<div class="col-md-1">
 
 </div>
  <div class="col-md-5">

  <form action="products.php" method="POST" enctype="multipart/form-data">
	<p><?php echo $_SESSION['merchant']; ?></p>
  <label> Product Name:</label>
  
  <br>
<input type="text" name="name"  class="form-control" placeholder="product name"/>
<br>
<p style="color: red;"><?php echo $categoryErr; ?></p>
<label>Product Category:</label>
<br>
<select name="category" id="category" class="form-control">
	<option value=""></option>
	<option value="1">Electronics & Computing Devices</option>
	<option value="2">Clothing</option>
	<option value="3">Foods & Drinks</option>
	<option value="4">Furnitures & Housing</option>
	
</select>

<label>Price:</label>
<br>

<input type="text" name="price"  class="form-control" placeholder="product price"/>

<br>
<label>Image:</label>
<br>

<input type="file" name="image"  class="form-control"/>
<br>
<!-- <label>Merchant:</label>
<br>

<input type="text" name="merchant"  class="form-control" required/>
<br> -->
<label>Product description:</label>
<br>
<textarea class="form-control" name="description"></textarea>
<br>
<br>
<input type="submit" value="Upload" name="submit" class="form-control btn btn-primary"/>
</form>
  </div>
  <div class="col-md-5">
 
	<div class="col-md-1">
 
 </div>
</div>
</body>