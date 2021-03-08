<?php
session_start();
$mysql= new mysqli("localhost","root","","list") or die (mysqli_connect_error());

if(isset($_POST['submit'])){
    $username = $_POST["email"];
    $pas = $_POST["pass"];

    $sql="SELECT * from users where email='$username' and password='$pas'";
    $result = $mysql->query($sql);

    if($result->num_rows >0){
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $username;
        $_SESSION['id'] = $row['uid'];
        header("location:add.php");
        die;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js">
    </script>
    <title>Login</title>
</head>
<body>
<?php include 'navbar.php';?>
<div class="ldiv">
<center>
<H1>LOGIN</H1>
<form class="lform" name="loginform" method="post">
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="pass" placeholder="Password"><br>
    <input id="lbtn" type="submit" name="submit" value="Login"><br>
</form>
</center>
</div>
</body>
</html>

