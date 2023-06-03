<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/php_project/login". "/back_end/back_main_page.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <title>Leaks</title>
</head>

<body>
    <header>
        <div class="navName">
            <p>
                Nikri
            </p>
        </div>
        <?php
        echo $button
            ?>
    </header>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    } else {
    require_once("../back_end/MySQL_Driver.php");
    $id = $_SESSION["id"];
    $db = new MySQL();
    $conn = $db->connect("localhost", "root", "", "my_website");
    $status = $db->status_check($id);
    if ($status == "true") {
        echo '<div class="comment"><form action="../back_end/send_manager.php" method="post">
            <input type="text" name="u_post">
            <input type="hidden" name="page" value="leaks">
            <button type="submit" name="sub_message">OK</button>
        </form></div>';
    }} ?>
    
    <div class="posts">
        <?php
        $message = $db->topic_select("leaks");
        ?>
    </div>
</body>

</html>