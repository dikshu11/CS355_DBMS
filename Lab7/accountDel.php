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
  $password = $_POST["password"];

  $sql="DELETE FROM account WHERE AccountNo='$account_no' AND Password='$password'";
  
  $result=mysqli_query($conn,$sql);

  if($result){
    echo "Deleted Successfully";
  }else{
    echo "Deletion Failed";
  }
  
  $conn->close();
?>
