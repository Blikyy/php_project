<?php
    /*define('ROOT_DIR', __DIR__);*/
    $path = $_SERVER['DOCUMENT_ROOT'] . "/php_project/login";
    $path = str_replace($_SERVER['DOCUMENT_ROOT'], '', $path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo $path ?>/image/login.svg" alt="">
</body>
</html>