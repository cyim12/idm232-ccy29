<?php

include_once '../includes/database.php';
include_once '../includes/helper.php';

// Form has been submitted
if (isset($_POST['submit'])) {

    //  Parse Data
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeDescription = mysqli_real_escape_string($con, $_POST['recipeDescription']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeDirections = mysqli_real_escape_string($con, $_POST['recipeDirections']);


    // Build Query
    $sql = "INSERT INTO `recipes`(`Title`, `Description`, `Ingredients`, `Directions) 
    VALUES ('$title','$recipeDescription','$recipeIngredients','$recipeDirections');";

    // Execute Query
    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        // Success
        redirectTo('all_recipes.php');
    } else {
        // Error
        redirectTo('all_recipes.php?error=' . mysqli_error($con));
    }
}
?>