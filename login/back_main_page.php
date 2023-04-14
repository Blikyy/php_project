<?php
session_start();
include_once("MySQL_Driver.php");

$id = $_SESSION["id"];

$data = file_get_contents("data/data_" . $id . ".json");

$data = json_decode($data, true);

$name = $data["name"];

<<<<<<< HEAD
=======
if(isset($_POST["sub_message"])){
    $db = new MySQL();
    $conn = $db->connect("localhost","root","","my_website");
    $message = $_POST["u_post"];
    $date = date('Y-m-d');
    $id = $_SESSION["id"];

    $db->insert("INSERT INTO `message`(`id`, `message`, `date`, `id_user`) VALUES (NULL,'$message','$date',(SELECT name FROM user WHERE id=$id))");
>>>>>>> a78d0e19d058ed703bef4ac66cac7ffae62f46c3

    header("location: main_page.php");
}
?>