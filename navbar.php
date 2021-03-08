<?php 
/*if($_GET['logout']==1) {
session_destroy(); 
header("location:home.php");
}*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if(isset($_SESSION['id'])){?>
      <nav class="nav-bar">
    <h1>ToDo</h1>
    <ul class="nav-lists">
    <li><a href="home.php">Home</li></a>
    <li><a href="add.php">List</li></a>
    <li><a href="logout.php">Log out</li></a>
    </ul>
    </nav>


    <?php } else { ?>
        <nav class="nav-bar">
    <h1>ToDo</h1>
    <ul class="nav-lists">
    <li><a href="home.php">Home</li></a>
    <li><a href="login.php">Login</li></a>
    <li><a href="signup.php">Sign up</li></a>
    </ul>
    </nav>
<?php }
?>
</body>
</html>