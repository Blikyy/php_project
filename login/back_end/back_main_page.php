<?php
session_start();
require_once("MySQL_Driver.php");

$button = '<form action="back_end/back_main_page.php" method="post">
        <button type="submit" name="login">Login</button>
        </form>';

if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];

    $data = file_get_contents("./data/data_" . $id . ".json");
    $data = json_decode($data);
    $status = $data->status;

    if ($status == "false") {
        $button = /*'<form action="back_end/back_main_page.php" method="post">
          <button type="submit" name="login">Login</button>
          </form>'*/'<div class="navButtons">
            <a href="./front_end/login.php">
            <div class="navButton">
                <img class="navLoginSVG" src="./image/login.svg" alt="" srcset="">
                <p>Login</p>
            </div>
        </a>
        <a href="./front_end/register.php">
            <div class="navButton">
                <img class="navLoginSVG" src="./image/register.svg" alt="">
                <p>Register</p>
            </div>
        </a>
    </div>';
    }
    if ($status == "true") {
        $button = /*'<form action="back_end/back_main_page.php" method="post">
          <button type="submit" name="logout">Logout</button>
          </form><br> <br>'*/

          /*Source toho obrazku bude bouchat mimo index.php protoze vymrdane tecky. Je treba udelat root directory pathing jak rikal Razer*/
          '<div class="navButtons">
            <a href="">
            <div class="navButton">
                <img class="navLoginSVG" src="./image/logout.svg" alt="">
                <p>Logout</p>
            </div>
        </a>
    </div>';
        /*$button .= "<h1>" . $data->name . "</h1>";*/
    }
    if (isset($_POST["logout"])) {
        $data = file_get_contents("../data/data_" . $id . ".json");
        $data = json_decode($data);
        $data->status = "false";
        $data = json_encode($data);
        file_put_contents("../data/data_" . $id . ".json", $data);
        header("location: ../index.php");
    }
    if (isset($_POST["login"])) {
        header("location: ../front_end/login.php");
    }
}
?>