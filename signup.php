<?php
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
</head>
<body>
<?php include 'navbar.php';?>
<br><br>

<div class="body2">
    <div class="div1">
<form class="form1" name="signupform" action="signupdb.php" method="POST">
    <input class="form1-text" type="text" name="fname" placeholder="First name"><br>
    <input class="form1-text" type="text" name="lname" placeholder="Last name"><br>
    <input class="form1-text" type="text" name="email" placeholder="Email"><br>
    <input class="form1-text" type="text" name="passw" placeholder="Password"><br>
    <input class="form1-text" type="text" name="rpassword" placeholder="Re-enter password"><br>
    <input class="form1-text" type="submit" name="submit" value="Sign up" onClick="signup1()">
</form>
</div>

<div class="div2">
<h3>Lorem Ipsum
"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
</h3>
</div>
</div>
</body>
</html>