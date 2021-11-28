<?php

include_once '../includes/database.php';
include_once '../includes/helper.php';

$query = "INSERT INTO `recipes`(`Title`, `Description`, `Ingredients`, `Directions`); 
VALUES ('Pancakes','Breakfast food','ingredients','step 1');";

$connection->query($query);