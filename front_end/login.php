<?php
require_once("../back_end/back_main_page.php");
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
    <meta name="description" content="Login page">
    <title>Login</title>
</head>

<body>
    <header>
        <a href="/php_project/index.php">
            <div class="navName">
                <p>
                    Nikri
                </p>
            </div>
        </a>
        <?php
        echo $button
            ?>
    </header>
    <form class="Form" method="post" action="../back_end/login_back.php">
        <h1>Login</h1>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <input class="formBox" type="text" placeholder="Username" name="username" required>
        <input class="formBox" type="password" placeholder="Password" name="password" required>
        <input class="formSubmit" type="submit" name="ok">
        <a href="../front_end/register.php">Not registered yet?</a>
    </form>
    <footer>
        <p>Made with ❤ by Kordy & Blikyy ©2023</p>
    </footer>
</body>

</html>