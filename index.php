<?php
require_once("./back_end/back_main_page.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="main page">
    <link rel="stylesheet" href="./style.css">
    <title>Main Page</title>
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
    <section>
        <h1>Nikri</h1>

        <div class="index_links_wrapper">
            <div class="index_links">
                <div class="index_link">
                    <a href="front_end/general.php">
                        <img src="./image/general.svg" alt="">
                        General
                    </a>
                </div>
                <div class="index_link">
                    <a href="front_end/leaks.php">
                        <img src="./image/leaks.svg" alt="">
                        Leaks
                    </a>
                </div>
                <div class="index_link">
                    <a href="front_end/piracy.php">
                        <img src="./image/pirate.svg" alt="">
                        Piracy
                    </a>
                </div>
                <div class="index_link">
                    <a href="front_end/support.php">
                        <img src="./image/support.svg" alt="">
                        Support
                    </a>
                </div>
                <div class="index_link">
                    <a href="front_end/tools.php">
                        <img src="./image/tools.svg" alt="">
                        Tools
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>Made with ❤ by Kordy & Blikyy ©2023</p>
    </footer>
</body>

</html>