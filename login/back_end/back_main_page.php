<?php
session_start();
include_once("MySQL_Driver.php");

$id = $_SESSION["id"];

$data = file_get_contents("../data/data_" . $id . ".json");

$data = json_decode($data, true);

$name = $data["name"];


?>