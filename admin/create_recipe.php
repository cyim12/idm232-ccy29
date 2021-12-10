<?php

include_once __DIR__ . '/../_includes/database.php';
include_once __DIR__ . '/../_includes/helper.php';
require_once __DIR__ . '/../config.php';

// Form has been submitted. First upload image first then upload service
if (isset($_POST['submit'])) {
    // Parse Data
    $title = mysqli_real_escape_string($connection, $_POST['recipeTitle']);
    $description = mysqli_real_escape_string($connection, $_POST['recipeDescription']);
    $ingredients = mysqli_real_escape_string($connection, $_POST['recipeIngredients']);
    $directions = mysqli_real_escape_string($connection, $_POST['recipeDirections']);

    $files_array = explode('.', $_FILES['image']['name']);
    $file_title = slugify ($files_array[0]);
    $extension = end($files_array);
    $final_file_name = $file_title . '.' . $extension;
    $temp_name = $_FILES['image']['tmp_name'];

    $file_path = $app['asset_url'] . $final_file_name;
    $file_destination = __DIR__ . '/../' . $file_path;

    if(move_uploaded_file($temp_name, $file_destination)) {
        //Build Query
        $sql = "INSERT INTO `recipes`(`title`, `file_path`, `description`, `ingredients`, `directions`)
        VALUES ('$title', '$file_path', '$description', '$ingredients', '$directions');";

        //Execute Query
        $db_results = mysqli_query($connection, $sql);
        $new_uploaded_file_id = null;

            if ($db_results) {
                //Success
                redirectTo('all_recipes.php');
            }
            else {
                //Error
                redirectTo('all_recipes.php?error=' . mysqli_error($connection));
            }
        } else {
            //Image Did not move
            redirectTo('all_recipes.php?error=Error moving file');
        }
    }
?>