<?php
include_once("back_end/login_back.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="login page">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
    <form class="loginForm" method="post" action="back_end/login_back.php">
        <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="password">
        <input type="submit" name="ok">
        <a href="front_end/register.php">Register</a>
    </form>
</body>
</html>

