<?php include 'conn.php'; ?>
<?php include 'process.php'; ?>
<?php include 'links.php'; ?>
<?php include 'updatecode.php'; ?>
<!-- <?php include 'conn.php'; ?> -->
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
<?php 

if(isset($_SESSION['message'])):

?>
<div class="alert alert-<?=$_SESSION['msg_type']?>">
 <?php 
echo $_SESSION['message'];
unset($_SESSION['message']);
 ?>

</div>
<?php endif ?>
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
      <li><a href="index.php">Home</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Purchases</a></li>
        <li><a href="#">Stock</a></li>
        <li><a href="#">Update</a></li>
        <li><a href="new.php">New Products</a></li>
        <li><a href="adminupload.php">Upload a Product</a></li>
      </ul>
    </div>
   
    <div class="col-md-5">
    <div class="row justify-content-center">
    <h2>Update:</h2>
      <table class="table table-primary">
        <thead>
          <tr>
          <th>ID</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            
            <th colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
        <?php 

$sql = "SELECT *FROM products ORDER BY id ASC";
$result =mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_array($result)){

?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['pname']; ?></td>

<td><?php echo $row['category']; ?></td>
<td><?php echo "$ " .$row['price']; ?></td>
<td> <a href="process.php?delete=<?php echo $row['id']; ?> "class="btn btn-danger"  >Delete</a>
 <a href="update.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Edit</a></td>
</tr>

<?php 
  }
}
?>
        </tbody>
      </table>
    </div>
    </div>
    <div class="col-md-5">
    
    </div>
  </div>
</body>