<?php
include_once("MySQL_Driver.php");
session_start();

if(isset($_POST["sub_message"])){
    $db = new MySQL();
    $conn = $db->connect("localhost","root","","my_website");
    $message = $_POST["u_post"];
    $id = $_SESSION["id"];
    $topic = $_POST['page'];

    $db->insert("INSERT INTO `message`(`id`, `message`, `date`, `topic`,`author_name`) VALUES (NULL,'$message',CURDATE(),'$topic',(SELECT `name` FROM `user` WHERE `id`=$id))");

    header("location: ../front_end/" . $topic . ".php");

    
}

?>