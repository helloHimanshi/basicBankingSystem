<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Details</title>
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <?php
      include('insertdata.php');
      $sqlget = "SELECT * FROM usertable";
      $sqldata = mysqli_query($conn, $sqlget) or die('error retrieving the data');
    ?>
  <div class="containr" style="background-image: url('images/createuser.jpg')">
    <?php
        include 'navbar.php';
      ?>
    <div class="tableWrapper">
      <div class="tableDiv">
        <h2> Customer Data </h2>
        <table class="customer-table">
          <thead>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Balance</th>
            <th>Phone No.</th>
            <th>Make Transaction</th>
          </thead>
          <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($sqldata)) {
              ?>
            <tr>
              <td class="customerdata" data-label="Customer ID"><?php echo $row['id'] ?></td>
              <td class="customerdata" data-label="Customer Name"><?php echo $row['name'] ?></td>
              <td class="customerdata" data-label="Customer Email"><?php echo $row['email'] ?></td>
              <td class="customerdata" data-label="Balance"><?php echo $row['balance'] ?></td>
              <td class="customerdata" data-label="Phone No."><?php echo $row['phone'] ?></td>
              <td data-label="Make Transaction"><a href="moneytransferrecord.php?id= <?php echo $row['id'] ;?>">
                  <button type="button" class="trnsferbtn">Select</button></a></td>
            </tr>
            <?php
              }
              ?>
          </tbody>
        </table>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
