<?php
require_once("../back_end/back_main_page.php");
include_once("../back_end/register_back.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="register page">
    <link rel="stylesheet" href="../style.css">
    <meta name="description" content="Register page">
    <title>Register</title>
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
    <form class="Form" method="post" action="../back_end/register_back.php">
        <h1>Register</h1>
        <?php if (isset($_GET['success'])) { ?>
            <div class="message">
                <p class="success">
                    <b>
                        <?php echo $_GET['success']; ?>
                    </b>
                </p>
            </div>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
            <div class="message">
                <p class="error">
                    <b>
                        <?php echo $_GET['error']; ?>
                    </b>
                </p>
            </div>
        <?php } ?>
        </div>

        <input class="formBox" type="email" placeholder="Email" name="email" required>
        <input class="formBox" type="text" placeholder="Username" name="username" required>
        <input class="formBox" type="password" placeholder="Password" name="password1" required>
        <input class="formBox" type="password" placeholder="Confirm Password" name="password2" required>
        <input class="formSubmit" type="submit" name="register">
        <a href="./login.php">Already have an account?</a>
    </form>
    <footer>
        <p>Made with ❤ by Kordy & Blikyy ©2023</p>
    </footer>
</body>

</html>