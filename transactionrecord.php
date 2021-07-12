<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Money Transfer</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php
       include 'insertdata.php';
       $sql = "SELECT * FROM  transactiontable";
       $sqldata = mysqli_query($conn, $sql) or die('error retrieving the data');
    ?>
  <div class="containr" style="background-image: url('images/createuser.jpg')">
    <?php
        include 'navbar.php';
      ?>
    <div class="tableWrapper">
      <div class="tableDiv">
        <h2> Transaction Record </h2>
        <table class="customer-table">
          <thead>
            <th>Transaction No.</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
          </thead>
          <tbody>
            <?php
              while ($row = mysqli_fetch_assoc($sqldata)) {
            ?>
            <tr>
              <td class="customerdata" data-label="Transaction No."><?php echo $row['sno'] ?></td>
              <td class="customerdata" data-label="Sender"><?php echo $row['sender'] ?></td>
              <td class="customerdata" data-label="Receiver"><?php echo $row['receiver'] ?></td>
              <td class="customerdata" data-label="Amount"><?php echo $row['balance'] ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
