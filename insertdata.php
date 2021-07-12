<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "thebank_data";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
  if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['balance'])&& !empty($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $phone = $_POST['phone'];

    $query = "insert into usertable(name, email, balance, phone) values ('$name', '$email', '$balance', '$phone')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if ($run) {
      echo "<script> window.location='customerdetails.php';
        alert('Successfully inserted the user in thebank_data database');
        </script>";
    }else {
      echo "Error occured, try again";
    }
  }
}
?>
