<?php

session_start();

$id = $_SESSION["id"];

$data = file_get_contents("data/data_" . $id . ".json");

$data = json_decode($data, true);

$name = $data["name"];

$data["age"] = 18; 

$json = json_encode($data);

file_put_contents("data/data_" . $id . ".json", $json);



?>