<!-- <?php
$status = "";
if(isset($_POST['send'])) {
   $subject = $_POST['subject'];
   $email = $_POST['email'];
   $complain = $_POST['complain'];


   $csql = "INSERT INTO complains(a_subject,email,complain)
                        VALUES ("$subject","$email","$complain")";
                if($conn->query($csql) == TRUE) {
                    $status = "Message sent";
                }
}


?> -->