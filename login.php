<?php
if (isset($_POST['user'])) {
$server = "localhost";
$username = "root";
$password = "";
$dbname = "register";
$conn = mysqli_connect($server, $username, $password, $dbname);
$pass = $_POST['pass'];
  $name = $_POST['user'];
  $sql = "SELECT * FROM `registers`";
  $result = mysqli_query($conn, $sql);
  while ($row = mysqli_fetch_array($result)) {
    if ($name == $row['Username'] && $pass == $row['Password']) {
      header("Location: http://localhost/project/Project.home.html#");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login Form | Yukesh</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="Project.home.html">ALL IN ONE STORE</a>
        </div>
  
      <ul class="nav navbar-nav">
        <li class="active"><a href="Project.home.html">HOME</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
  
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        </ul>
  </nav>
  
    <div class="center">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <div class="txt_field">
          <input type="text" name = "user" required autocomplete='off'>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name = "pass" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.html">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>