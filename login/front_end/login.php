<?php
include_once("../back_end/login_back.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="login page">
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <div class="navName">
            <p>Placeholder name</p>
        </div>
        <div class="navButtons">
            <div class="navButton">
                <img class="navLoginSVG" src="../image/login.svg" alt="" srcset="">
                <a href="../index.php">
                    <p>Login</p>
                </a>
            </div>
            <div class="navButton"></div>
        </div>
    </header>
    <form class="Form" method="post" action="../back_end/login_back.php">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <input class="formBox" type="text" placeholder="Username" name="username" required>
        <input class="formBox" type="text" placeholder="Password" name="password" required>
        <input class="formSubmit" type="submit" name="ok">
        <a href="../front_end/register.php">Not registered yet?</a>
    </form>
</body>

</html>