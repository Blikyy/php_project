<?php
require_once("MySQL_Driver.php");

$db = new MySQL();
$conn = $db->connect("localhost", "root", "", "Website");

if(isset($_POST["register"])){

    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];

    $name_count = $db->select_fetch("SELECT COUNT(`name`) AS `pocet` FROM `User` WHERE `name`='$username'");

    foreach($name_count as $count){
        $count = $count["pocet"];
    }
    if($count == 0){
        
        if($password1 === $password2){

            $password = hash("sha256", $password1);
            $insert = $db->insert("INSERT INTO `User`(`id`, `name`, `password`, `email`) VALUES (NULL,'$username','$password','$email')");

            $ids = $db->select_fetch("SELECT `id` FROM `User` WHERE `name`='$username'");
            foreach($ids as $id){
                $id = $id["id"];
            }
            $data = array(
                "name" => $username
            );
            $json = json_encode($data);
            file_put_contents("data/data_".$id.".json", $json);
            header("location: register.php?success=successfully registered");
        }
        else{
            header("location: register.php?error=Password doent match the secound password");
        }
    }
    else{
        header("location: register.php?error=Username already used");
    }

}


?>