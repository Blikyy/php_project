<?php
    session_start();
    include_once("MySQL_Driver.php");

    $db = new MySQL();
    $conn = $db->connect("localhost","root","","my_website");

    if(isset($_POST["ok"])){

        $username = $_POST["username"];
        $password = $_POST["password"];
        

        $user_select = $db->select("SELECT * FROM `user` WHERE `name`='$username'");
        $password_select = $db->select_fetch("SELECT * FROM `user` WHERE `name`='$username'");

        foreach($password_select as $pass){
            $pswrd = $pass["password"];
        }
        if($user_select->num_rows > 0){
            if(password_verify($password, $pswrd)){

                $ids = $db->select_fetch("SELECT `id` FROM `user` WHERE `name`='$username'");
                foreach($ids as $id){
                    $id = $id["id"];
                }
                $_SESSION["id"] = $id;
                header("location: main_page.php");
                
            }
            else{
                header("location: index.php?error=Wrong password");
            }
        }
        else{
            header("location: index.php?error=Wrong username");
        }
    }
?>