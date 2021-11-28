<?php include '../conn.php'; ?>
<?php include '../process.php'; ?>
<?php include '../links.php'; ?>
<?php include '../updatecode.php'; ?>

<div class="row justify-content-center">
    <h2>New Products:</h2>
      <table class="table table-primary">
        <thead>
          <tr>
          <th>ID</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Image</th>
            <th>Description</th>
            
            
          </tr>
        </thead>
        <tbody>
        <?php 

$sql = "SELECT *FROM latest ORDER BY id ASC";
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
<td><?php echo $row['a_image']; ?></td>
<td><?php echo  $row['a_description']; ?></td>

</tr>

<?php 
  }
}
?>
        </tbody>
      </table>
    </div>