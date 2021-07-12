<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Create User</title>
</head>

<body>
  <div class="containr" style="background-image: url('images/createuser.jpg')">
    <?php
      include 'navbar.php';
    ?>
    <div class="formWrapper">
      <div class="formDiv">
        <h2> Create Account </h2>
        <form action="insertdata.php" method="post">
          <div class="formGroup">
            <input type="text" name="name" class="fontfa" placeholder="&#xf007;  name"><br>
          </div>
          <div class="formGroup">
            <input type="email" name="email" class="fontfa" placeholder="&#xf0e0;  email"><br>
          </div>
          <div class="formGroup">
            <input type="text" name="balance" class="fontfa" placeholder="&#xf156;  balance"><br>
          </div>
          <div class="formGroup">
            <input type="text" name="phone" class="fontfa" placeholder="&#xf098;  phone"><br>
          </div>
          <button class="bttn" name="submit" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- fontawesome -->
  <script src="https://use.fontawesome.com/65c37f4835.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
