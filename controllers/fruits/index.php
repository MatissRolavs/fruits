<?php

require "Database.php";
$config = require("config.php");

$database = new Database($config);

$query = "SELECT * FROM fruits";
$params = [];

$fruits = $database->execute($query, $params)->fetchAll();

$title = "Fruits";


require "views/fruits/index.view.php";