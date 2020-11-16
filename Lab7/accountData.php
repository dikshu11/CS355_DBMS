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
  $sql="SELECT * FROM account WHERE AccountNo='$account_no' AND Password='$password'";

  $result = mysqli_query($conn, $sql);
  $rowcount = mysqli_num_rows($result);
  if($rowcount > 0){
    $row=mysqli_fetch_assoc($result);
    echo "Account No ". $row["AccountNo"] . "<br>";
    echo "Type " . $row["Type"] . <
    echo "Balance ". $row["Balance"] . "<br>"; 
  }else{
    echo "Account does not exist";
  }

  $conn->close();
?>
