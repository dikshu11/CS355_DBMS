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
  $type = $_POST["acc_type"];
  $balance = $_POST["acc_bal"];

  $sql="INSERT INTO account VALUES ('$account_no', '$password', '$type', '$balance')";
  
  $result=mysqli_query($conn,$sql);

  if($result){
    echo "Inserted Successfully";
  }else{
    echo "Insertion Failed";
  }
  
  $conn->close();
?>
