<?php
include 'insertdata.php';

if(isset($_POST['submit'])) {
  $from = $_GET['id'];
  $to = $_POST['to'];
  $amount = $_POST['amount'];

  $sqlget = "SELECT * from usertable where id = $from";
  $query = mysqli_query($conn, $sqlget);
  $sql1 = mysqli_fetch_array($query);

  $sqlpost = "SELECT * from usertable where id = $to";
  $query = mysqli_query($conn, $sqlpost);
  $sql2 = mysqli_fetch_array($query);

  if ($amount > $sql1['balance']) {
    echo "<script type='text/javascript'>
              window.location='customerdetails.php';";
    echo "alert('Insufficient Balance!')";
    echo "</script>";
  }elseif ($amount <= $sql1['balance']) {
    if ($amount > 0) {
      $newbalance = $sql1['balance'] - $amount;
      $sqlget = "UPDATE usertable set balance = $newbalance where id = $from";
      mysqli_query($conn, $sqlget);

      $addedbalance = $sql2['balance'] + $amount;
      $sqlpost = "UPDATE usertable set balance = $addedbalance where id = $to";
      mysqli_query($conn, $sqlpost);

      $sender = $sql1['name'];
      $receiver = $sql2['name'];
      $sql = "INSERT into transactiontable(`sender`, `receiver`, `balance`) VALUES ('$sender', '$receiver', '$amount')";
      $run = mysqli_query($conn, $sql) or die(mysqli_error());

      if ($run) {
        echo "<script> window.location='transactionrecord.php';
          alert('Successfully inserted the user in the transactiontable in thebank_data database');
          </script>";
      }else {
        echo "Error occured, try again";
      }
    }else if($amount <= 0){
      echo "<script type='text/javascript'>";
      echo "alert('Error occured, try again');";
      echo "</script>";
    }
    $newbalance = 0;
    $addedbalance = 0;
    $amount = 0;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Money Transfer</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php
        include 'insertdata.php';
        $sid = $_GET['id'];
        $sql = "SELECT * FROM  usertable where id=$sid";
        $query = mysqli_query($conn, $sql) or die('error retrieving the data');
        $row = mysqli_fetch_assoc($query);
     ?>

  <div class="containr" style="background-image: url('images/createuser.jpg')">
    <?php
         include 'navbar.php';
       ?>
    <div class="tableWrapper">
      <div class="tableDiv">
        <h2> Customer Data </h2>
        <form method="POST">
          <table class="customer-table">
            <thead>
              <th>Customer ID</th>
              <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Balance</th>
              <th>Phone No.</th>
            </thead>
            <tbody>
              <tr>
                <td class="customerdata" data-label="Customer ID"><?php echo $row['id'] ?></td>
                <td class="customerdata" data-label="Customer Name"><?php echo $row['name'] ?></td>
                <td class="customerdata" data-label="Customer Email"><?php echo $row['email'] ?></td>
                <td class="customerdata" data-label="Balance"><?php echo $row['balance'] ?></td>
                <td class="customerdata" data-label="Phone No."><?php echo $row['phone'] ?></td>
              </tr>
            </tbody>
          </table>
          <div class="transfer">
            <div class="row">
              <div class="col-md-6 receiver-details">
                <label>Money credited to</label>
                <select name="to" required>
                  <option value="" disabled selected>Select a user </option>
                  <?php
                       include 'insertdata.php';
                       $sid = $_GET['id'];
                       $query = "SELECT * from usertable where id != $sid";
                       $run = mysqli_query($conn, $query) or die('Error in retreiving data.');
                       while ($row = mysqli_fetch_assoc($run)) {
                     ?>
                  <option class="table" value="<?php echo $row['id'];?>">
                    <?php echo $row['name'] ;?> ( Balance :
                    <?php echo $row['balance'] ;?> )
                  </option>
                  <?php
                     }
                  ?>
                </select>
              </div>
              <div class="col-md-6 receiver-details">
                <label>Amount To be transfered</label>
                <input name="amount" type="number" required>
              </div>
            </div>
          </div>
          <button name="submit" class="bttn" type="submit">Transfer</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
