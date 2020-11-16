<?php 
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="mysql";
  $dbname="bank";

  $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
  if(!$conn){
    die("Connection Failed: " . $conn->connect_error . "\n");
  }

  $account_no = $_POST["acc_no"];
  $old_password = $_POST["oldPassword"];
  $new_password = $_POST["newPassword"];

  $sql="UPDATE account SET Password='$new_password' WHERE AccountNo='$account_no' AND Password='$old_password'";
  
  $result=mysqli_query($conn,$sql);

  if($result){
    echo "Updated Successfully";
  }else{
    echo "Update Failed";
  }
  
  $conn->close();
?>
