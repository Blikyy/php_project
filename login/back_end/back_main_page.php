<?php
session_start();
require_once("MySQL_Driver.php");

if(isset($_SESSION["id"])){
    $id = $_SESSION["id"];
  
    $data = file_get_contents("data/data_" . $id . ".json");
    $data = json_decode($data);
    $status = $data->status;
  }
  

if(isset($_POST["logout"])){
    $data = file_get_contents("../data/data_" . $id . ".json");
    $data = json_decode($data);
    $data->status = "false";
    $data = json_encode($data);
    file_put_contents("../data/data_" . $id . ".json", $data);
    header("location: ../index.php");
    }
if(isset($_POST["login"])){
    header("location: ../front_end/login.php");
}
?>