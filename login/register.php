<?php
include_once("register_back.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="register page">
    <link rel="stylesheet" href="./style.css">
    <title>Register</title>
</head>
<body>
    <form method="post" action="register_back.php">
    <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p> 
        <?php } ?>
        <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="password1">
        <input type="text" placeholder="Password again" name="password2">
        <input type="text" placeholder="email" name="email">
        <input type="submit" name="register">
        <a href="index.php">back</a>
    </form>
</body>
</html>