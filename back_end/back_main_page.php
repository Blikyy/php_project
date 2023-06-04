<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once("MySQL_Driver.php");
$button = '<div class="navButtons">
<a href="/php_project/front_end/login.php">
<div class="navButton">
    <img class="navLoginSVG" src="/php_project/image/login.svg" alt="" srcset="">
    <p>Login</p>
</div>
</a>
<a href="/php_project/front_end/register.php">
<div class="navButton">
    <img class="navLoginSVG" src="/php_project/image/register.svg" alt="">
    <p>Register</p>
</div>
</a>
</div>';
/*$button = '<form action="back_end/back_main_page.php" method="post">
<button type="submit" name="login">Login</button>
</form>';*/

if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];

    $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/php_project" . "/data/data_" . $id . ".json");
    $data = json_decode($data);
    $status = $data->status;

    if ($status == "false") {
        $button = /*'<form action="back_end/back_main_page.php" method="post">
<button type="submit" name="login">Login</button>
</form>'*/'<div class="navButtons">
            <a href="/php_project/front_end/login.php">
            <div class="navButton">
                <img class="navLoginSVG" src="/php_project/image/login.svg" alt="" srcset="">
                <p>Login</p>
            </div>
        </a>
        <a href="/php_project/front_end/register.php">
            <div class="navButton">
                <img class="navLoginSVG" src="/php_project/image/register.svg" alt="">
                <p>Register</p>
            </div>
        </a>
    </div>';
    }
    if ($status == "true") {
        $button = /*'<form action="/php_project/back_end/back_main_page.php" method="post">
                        <button type="submit" name="logout">Logout</button>
                    </form><br><br>';*/
                    /*$button .= "<h1>" . $data->name . "</h1>";*/


            '<div class="navButtons">
                <form action="/php_project/back_end/back_main_page.php" method="post">
                    <button type="submit" name="logout">
                        <div class="navButton">
                            <img class="navLoginSVG" src="/php_project/image/logout.svg" alt="">
                            <p>Logout</p>
                        </div>
                    </button>    
                </form>
            </div>';
    }
    if (isset($_POST["logout"])) {
        $data = file_get_contents("../data/data_" . $id . ".json");
        $data = json_decode($data);
        $data->status = "false";
        $data = json_encode($data);
        file_put_contents("../data/data_" . $id . ".json", $data);
        header("location: ../index.php");
        session_destroy();
    }
    /*if (isset($_POST["login"])) {
        header("location: ../front_end/login.php");
    }*/
}
?>