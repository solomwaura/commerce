 <?php include 'conn.php'; ?>
 <?php include 'header.php'; ?>
 <?php include 'searchform.php';?>



 <?php 
 
 ?>
 <div class="row">
 <div class= "col-md-3">
 <?php include 'search.php'; ?>
 </div>
 <hr>
 </div>
<div class="row">
	
<?php

		 
			
			$sql = "SELECT *FROM latest ORDER BY id ASC";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result)){
		
			?>
	

<div class="col-md-3" style="margin: 10px 0;">
<form method="post" action="cart.php?action=add&id=<?php echo $row['id']; ?>">
					<div style="border:none; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["a_image"]; ?>" class="img-responsive"  style="height: 200px;"/><br />

						<h4 class="text-info"><?php echo $row["pname"]; ?></h4>
					
						<h4 class="text-danger">
						<label>Price: </label>$ <?php echo $row["price"]; ?></h4>
						<label>Quantity:</label>
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
<?php
  }
}
 
?>

</div>
 </div>
 

 
  
 </body>
 <?php include 'footer.php'; ?>