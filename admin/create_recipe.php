<?php

include_once '../_includes/database.php';
include_once '../_includes/helper.php';

// Form has been submitted
if (isset($_POST['submit'])) {
    //  Parse Data
    $title = mysqli_real_escape_string($connection, $_POST['recipeTitle']);
    $description = mysqli_real_escape_string($connection, $_POST['recipeDescription']);
    $ingredients = mysqli_real_escape_string($connection, $_POST['recipeIngredients']);
    $directions = mysqli_real_escape_string($connection, $_POST['recipeDirections']);

    // Build Query
    $sql = "INSERT INTO `recipes` (`title`, `description`, `ingredients`, `directions`)
    VALUES ('$title', '$description', '$ingredients', '$directions');";

    // Execute Query
    $db_results = mysqli_query($connection, $sql);
    if ($db_results) {
        // Success
        redirectTo('all_recipes.php');
    } else {
        // Error
        // echo 'Error';
        redirectTo('all_recipes.php?error=' . mysqli_error($connection));
    }
}
?>