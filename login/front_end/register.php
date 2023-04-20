<?php
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
    <title>Register</title>
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

        <input class="formBox" type="text" placeholder="Email" name="email" required>
        <input class="formBox" type="text" placeholder="Username" name="username" required>
        <input class="formBox" type="text" placeholder="Password" name="password1" required>
        <input class="formBox" type="text" placeholder="Confirm Password" name="password2" required>
        <input class="formSubmit" type="submit" name="register">
        <a href="./login.php">Registered already?</a>
    </form>
</body>

</html>