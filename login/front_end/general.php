<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>General</title>
</head>
<body>

    <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require_once("../back_end/MySQL_Driver.php");
        $id = $_SESSION["id"];
        $db = new MySQL();
        $conn = $db->connect("localhost","root","","my_website");
        $status = $db->status_check($id);
        if($status == "true"){
            echo '    <form action="../back_end/send_manager.php" method="post">
            <input type="text" name="u_post">
            <input type="hidden" name="page" value="general">
            <button type="submit" name="sub_message">OK</button>
            </form>';
        }
        $message = $db->topic_select("general");

    ?>


</body>
</html>
