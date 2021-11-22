<?php include 'cartcode.php'; ?>
<?php include 'conn.php' ; ?>
<?php include 'header.php'; ?>
<body>
	<a href="index.php">Home</a>
 <h3>Order Details.</h3>
        <div class="table-responsive">
        	<table class="table table-bordered">
        		<tr>
        			<th width="40%">Item Name</th>
        			<th width="10%">Quantity</th>
        			<th width="20%">Price</th>
						
        			<th width="15%">Total</th>
        			<th width="5%">Action</th>
        		</tr>
            <tr>         

            <?php 
                $total = 0;
            ?>
                  			<td > <?php echo ["item_name"]; ?></td>
                  			<td><?php echo ["item_quantity"]; ?></td>
                  			<td>$<?php echo ["item_price"]; ?></td>
                  			<td>$<?php echo ["item_price"]; ?></td>
                  			<td><a href="cart.php?action = delete&id=<?php echo $value["item_id"]; ?>" name="action" id="delete"> <span class="text-danger">Remove</span></a>
											 </td>
                  		</tr>
                  		<?php

                  		$total =  $total + ($row["item_price"] * $row["item_quantity"]);
											
										
                  	?>
										
                  	<tr>
                  		<td colspan="3" align="right">Total</td>
                  		<td align="right">$ <?php  
											echo number_format($total,2);

											?></td>
                  	</tr>
										<!-- number_format($total,2) -->
                  	<?php
												 
                  
								
						
         		?>
        		
        	</table>


</div>
</body>
</html>