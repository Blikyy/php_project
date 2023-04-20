<?php
require_once("back_end/back_main_page.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="main page">
    <link rel="stylesheet" href="style.css">
    <title>Main Page</title>
</head>

<body>

    <?php 
        if($status == "false"){
            echo '<form action="back_end/back_main_page.php" method="post">
            <button type="submit" name="login">Login</button>
            </form>';
        }
        else{
            echo '    <form action="back_end/back_main_page.php" method="post">
            <button type="submit" name="logout">Logout</button>
            </form><br>';
        }
        
    ?>
    <h1>Ahoj</h1>

   <?php 
    if($status == "true"){
        echo "<h1>" . $data->name . "</h1>";
    }
   ?>

    <a href="front_end/general.php">General</a>
    <a href="front_end/leaks.php">Leaks</a>
    <a href="front_end/piracy.php">Piracy</a>
    <a href="front_end/support.php">Support</a>
    <a href="front_end/tools.php">Tools</a>
</body>
</html>