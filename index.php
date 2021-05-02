<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  min-height: 60px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 16px;
  text-decoration: none;
}


li a:hover {
  background-color: #111;
}


  </style>
</head>
<body>
  <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="buy.php">Buy Book</a></li>
  <li><a href="sell.php">Sell Book</a></li>
  <li><a href="viewmybook.php">My Books</a></li>
  <li style="float:right"><a  href="index.php?logout='1'">Logout</a></li>
  <li style="float:right"><a><?php if (isset($_SESSION['username'])) : ?>
      <p><?php echo $_SESSION['username']; ?></p>
    <?php endif ?></a></li>
    <li style="float:right">  <a href="cart.php">My Cart</a></li> 
</ul>

<div id="topmid">
<h1>Welcome to <br>Second-hand Books Portal for Students</h1>
</div>
<div>
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    
</div>
    
</body>
</html>