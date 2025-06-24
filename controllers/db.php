<?php

$config = require("config.php");
require "Database.php";



$db = new Database($config);

// $transactions = $db->query('select * from transactions')->fetch();
$transactions = $db->query('insert into transactions(Date, No, Description, Amount) values("2000-12-02", 1, "Transaction 1", 150.34 )');

var_dump($transactions);