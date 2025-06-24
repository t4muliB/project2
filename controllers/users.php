<?php


$data = "";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // echo "This is a get request<br>";
    if (isset($_GET['name'])) {
        $data = $_GET['name'];
    }
} else if($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Hello, {$_POST}";
}
  

require "views/users.view.php";





//     if(isset($_GET['foo'])) {
// //     $user = $_GET["name"];

// //     echo "Hello $user";
//         echo ($_GET['foo']);

//     }else {
//         echo "String doesn't exist";
//     }
    








