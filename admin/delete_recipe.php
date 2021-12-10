<?php
$page_title = 'Delete Recipe';
$body_class = 'add_recipe';
include_once __DIR__ . '../_global/adminheader.php';

if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($connection, "DELETE FROM recipes WHERE id=$recipe_id") or die($sql->error());

    $db_results = mysqli_query($connection, $sql);
    if ($db_results) {
        // Success
        redirectTo('all_recipes.php');
    } else {
        // Error
        redirectTo('all_recipes.php?error=' . mysqli_error($connection));
    }
}
?>