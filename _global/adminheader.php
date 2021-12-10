<?php

include '../_includes/database.php';
include '../_includes/helper.php';

// Set Page Class
if (isset($body_class)) {
    $body_class = $body_class ;
} else {
    $body_class = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savory</title>
    <link rel="normalize" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><h1><a href="../index.php" class="name">SAVORY</a></h1></div> 
        <!-- NAVIGATION MENU -->
        <br>
        <div class="navigation">
        <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
          <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label>
          <!-- NAVIGATION MENUS -->
          <div class="menu">
            <li><a href="../category_listing.php">Categories</a></li>
            <li><a href="">Search</a></li>
            <li><a href="../admin.php">Admin</a></li>
          </div>
        </ul>
        </div>
      </div>
      </nav>