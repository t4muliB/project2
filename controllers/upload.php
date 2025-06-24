<?php

require "views/upload.view.php";

// var_dump($_FILES
$filepath = STORAGE_PATH . '/' . $_FILES['file']['name'];

// echo $filepath;

move_uploaded_file($_FILES['file']['tmp_name'], $filepath);

// dd($_FILES);
// dd($result);

header('location: /');
// exit();