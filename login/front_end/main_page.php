<?php
require_once("../back_end/back_main_page.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="main page">
    <link rel="stylesheet" href="../style.css">
    <title>Main Page</title>
</head>
<body>
    <h1>Ahoj</h1>
    <?php
    echo $name;
    ?>
    <br>

    <form action="../back_end/send_manager.php" method="post">
        <input type="text" name="u_post">
        <input type="hidden" name="page" value="main_page">
        <button type="submit" name="sub_message">OK</button>
    </form>
</body>
</html>