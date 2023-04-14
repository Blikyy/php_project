<?php
session_start();
include_once("MySQL_Driver.php");

$id = $_SESSION["id"];

$data = file_get_contents("data/data_" . $id . ".json");

$data = json_decode($data, true);

$name = $data["name"];

if(isset($_POST["sub_message"])){
    $db = new MySQL();
    $conn = $db->connect("localhost","root","","my_website");
    $message = $_POST["u_post"];
    $date = date('Y-m-d');
    $id = $_SESSION["id"];

    $db->insert("INSERT INTO `message`(`id`, `message`, `date`, `id_user`) VALUES (NULL,'$message','$date',(SELECT name FROM user WHERE id=$id))");

    header("location: main_page.php");
}
?>