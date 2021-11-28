<?php include 'conn.php'; ?>

<?php

$message = $message2 ="";
if(isset($_POST['pay'])) {
    $payee = $_POST['payee'];
    $phone = $_POST['phone'];
    $total = $_POST['total'];
    $invoice = $_POST['invoice'];
    $date = getdate();
  
    


    $psql = "INSERT INTO invoices (invoice_no,c_name,account,total,a_date) 
             VALUES('$invoice','$payee','$phone','$total','$date')";


if($conn->query($psql)== TRUE) {

    $message = "Payment was succesfully";
}
else {
    $message2 = "Failed to complete the payment";
}
}

?>