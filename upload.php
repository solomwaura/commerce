<?php include 'conn.php'; ?>
<?php
   	$result ="";
	if (isset($_POST['submit'])) {
	
		$image ='images/'.$_FILES['image']['name'];
		$image = mysqli_real_escape_string($conn,$image);
    $pname = $_POST['name'];
    $price = $_POST['price'];


		if (preg_match("!image!", $_FILES['image']['type'])) {
			if (copy($_FILES['image']['tmp_name'], $image)) {
				$sql = "INSERT INTO products(pname,price,image) VALUES ('$pname','$price','$image')";
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
  <a href="index.php" style="padding: 4px; background-color:aqua">Home</a>
<div class="row">
<div class="col-md-3">
 
 </div>
  <div class="col-md-6">
  <form action="upload.php" method="POST" enctype="multipart/form-data">
  <label>Name:</label>
  
  <br>
<input type="text" name="name"  class="form-control" placeholder="product name"/>
<br>

<label>Price:</label>
<br>

<input type="text" name="price"  class="form-control" placeholder="product price"/>

<br>
<label>Image:</label>
<br>

<input type="file" name="image"  class="form-control"/>
<br>
<br>
<input type="submit" value="Upload" name="submit" class="form-control btn btn-primary"/>
</form>
  </div>
  <div class="col-md-3">
 
  </div>
</div>
</body>