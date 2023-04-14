<?php
require_once("MySQL_Driver.php");

$db = new MySQL();
$conn = $db->connect("localhost", "root", "", "my_website");

if(isset($_POST["register"])){

    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $email = $_POST["email"];

    $name_count = $db->select_fetch("SELECT COUNT(`name`) AS `pocet` FROM `user` WHERE `name`='$username'");

    foreach($name_count as $count){
        $count = $count["pocet"];
    }
    if($count == 0){
        
        if($password1 === $password2){

            $password = password_hash($password1, PASSWORD_BCRYPT);
            $insert = $db->insert("INSERT INTO `user`(`id`, `name`, `password`, `email`) VALUES (NULL,'$username','$password','$email')");

            $ids = $db->select_fetch("SELECT `id` FROM `user` WHERE `name`='$username'");
            foreach($ids as $id){
                $id = $id["id"];
            }
            $data = array(
                "name" => $username
            );
            $json = json_encode($data);
            file_put_contents("../data/data_".$id.".json", $json);
            header("location: ../front_end/register.php?success=successfully registered");
        }
        else{
            header("location: ../front_end/register.php?error=Password doent match the secound password");
        }
    }
    else{
        header("location: ../front_end/register.php?error=Username already used");
    }

}


?>