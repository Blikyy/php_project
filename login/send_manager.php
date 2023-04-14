<?php
include_once("MySQL_Driver.php");
session_start();

if(isset($_POST["sub_message"])){
    $db = new MySQL();
    $conn = $db->connect("localhost","root","","my_website");
    $message = $_POST["u_post"];
    $date = date('Y-m-d');
    $id = $_SESSION["id"];
    $topic = $_POST['page'];

    $db->insert("INSERT INTO `message`(`id`, `message`, `date`, `id_user`,`topic`) VALUES (NULL,'$message','$date',(SELECT `name` FROM `user` WHERE `id`=$id), '$topic')");

    header("location: " . $topic . ".php");

    
}

?>