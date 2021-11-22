<?php include 'conn.php'; ?>
 <?php include 'header.php'; ?>
 
<div class="row">

<?php

$sql = "SELECT *FROM furnitures ORDER BY id ASC";
$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result)){
    ?>
<div class="col-md-3" style="margin: 10px 0;">
<form method="post" action="cart.php?action=add&id=<?php echo $row['id']; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["image"]; ?>" class="img-responsive"  style="height: 200px;"/><br />

						<h4 class="text-info"><?php echo $row["pname"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

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
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 </body>
 <?php include 'footer.php'; ?>
 </html>