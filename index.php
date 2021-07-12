<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@700&family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <title>Basic Banking System</title>
</head>

<body>
  <div class="header" style="background-image: url('images/bank.jpg')" ;>
    <?php
      include 'navbar.php';
    ?>
    <div class="content">
      <h2>THE BANK</h2>
      <p>You can specify background images<br>
        for any visible HTML element.<br>
        In this example, the background image</p>
    </div>
  </div>
  <div class="brief-intro">
    <main class="grid">
      <article>
        <img src="images\wallet.jpg">
        <div class="text">
          <h3>Register Now</h3>
          <p>You can take advantage of our services
            by being a member of The Bank family.</p>
          <a href="newuser.php"><button>Add User</button></a>
        </div>
      </article>
      <article>
        <img src="images\creditcards.png">
        <div class="text">
          <h3>Make Transaction</h3>
          <p>You can transfer money from anywhere with ease and in
            no time just on tap.</p>
          <a href="customerdetails.php"><button>Details</button></a>
        </div>
      </article>
      <article>
        <img src="images\moneytransaction.jpg">
        <div class="text">
          <h3>Previous Transaction</h3>
          <p>We keep our users updated with each and every records
            of their from anywhere.</p>
          <a href="transactionrecord.php"><button>Records</button></a>
        </div>
      </article>
    </main>
  </div>
  <div class="horizontal-dots">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <section class="policy">
    <div class="policy-heading">
      <h3>Our Policy</h3>
      <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br>
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
    </div>
    <div class="policy-wrapper">
      <div class="policy-image">
        <img src="images\policy.png">
      </div>
      <div class="policy-content">
        <h5>Lorem ipsum dolor sit amet</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident,
          sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </section>
  <?php
    include 'footer.php';
  ?>
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/65c37f4835.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
