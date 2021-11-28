<?php include 'conn.php'; ?>
<?php include 'links.php'; ?>
<?php include 'sellerlogincode.php';?>
<!-- <?php include 'sellerregistercode.php';?> -->
<body>
  <h3>Jumbo Merchant:</h3>
  <div class="row">
    <div class="col-md-2">
      
      <a href="products.php" class="btn btn-success">Upload product</a>
    </div>
    <div class="col-md-8">
    <h2>All Your Produtcs:</h2>
      <table class="table table-primary">
        <thead>
          <tr>
          
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Description</th>
            
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 

          $merchant = $_SESSION['merchant'];
$sql = "SELECT *FROM latest WHERE merchant = '$merchant' ORDER BY id ASC";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result)){

?>

<tr>

<td><?php echo $row['pname']; ?></td>

<td><?php echo $row['category_id']; ?></td>
<td><?php echo "$ " .$row['price']; ?></td>
<td><?php echo  $row['a_description']; ?></td>
<td>
  <a href="new.php"class="btn btn-danger"  >Delete</a>
  
 </td>
</tr>

<?php 
  }
}
?>
        </tbody>
      </table>
    </div>
    <div class="col-md-2">
      <?php 
      if(empty($_SESSION['merchant'])) {

        header('location: sellerlogin.php');
      }
      ?>
      <p><?php echo $_SESSION['merchant']; ?></p>
      <h3><a href="index.php">Logout</a></h3>
    </div>
  </div>
</body>