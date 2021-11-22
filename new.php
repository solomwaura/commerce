<?php include 'conn.php'; ?>
<?php include 'process.php'; ?>
<?php include 'links.php'; ?>
<?php include 'updatecode.php'; ?>

<head>
<style>
    #admin {
      background-color: orange;
    }
 #dash {
   background-color: orangered;
   min-height: 100vh;
 }
#dash a {
text-decoration: none;
color: white;
font-size: 18px;
letter-spacing: 2px;
}
#dash h2 {
text-decoration: none;
letter-spacing: 2px;
border-bottom: 2px solid white;
}
#dash ul li {
text-decoration: none;
list-style: none;
border-bottom: 1px solid greenyellow;
}
  </style>
</head>

<body id="admin">
  <p > <?php echo $msg; ?></p>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
      <centre>
        <h3>Admin Hotspot</h3>
      </centre>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row">
    <div class="col-md-2" id="dash">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Purchases</a></li>
        <li><a href="#">Stock</a></li>
        <li><a href="#">Update</a></li>
        <li><a href="newcopy.php">New Products</a></li>
        <li><a href="products.php">Upload a Product</a></li>
        <li><a href="admin.php" class="btn btn-success form-control">Back</a></li>
      </ul>
    </div>
   
    <div class="col-md-10">
    <div class="row justify-content-center">
    <h2>New Products:</h2>
      <table class="table table-primary">
        <thead>
          <tr>
          <th>ID</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Merchant</th>
            <th>Description</th>
            
            <th colspan="3">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 

$sql = "SELECT *FROM new ORDER BY id ASC";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result)){

?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['pname']; ?></td>

<td><?php echo $row['category_id']; ?></td>
<td><?php echo "$ " .$row['price']; ?></td>
<td><?php echo "$ " .$row['merchant']; ?></td>
<td><?php echo  $row['description']; ?></td>
<td>
  <a href="new.php"class="btn btn-danger"  >Delete</a>
  <a href="new.php"class="btn btn-default"  >Reply</a>
 <a href="new.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Upload</a></td>
</tr>

<?php 
  }
}
?>
        </tbody>
      </table>
    </div>
    </div>
  </div>
</body>