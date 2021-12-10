<?php
$page_title = 'Savory | Update Recipe';
$body_class = 'add_recipe';

include_once __DIR__ . '../_global/adminheader.php';


if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];
    // Make sure GET ID == post ID
    if ($_GET['id'] != $recipe_id) {
        redirectTo('update_recipe.php?id=' . $_GET['id'] . '&error=User ID does not match current user.');
    }
    //  Parse Data
    $title = mysqli_real_escape_string($connection, $_POST['recipeTitle']);
    $recipeDescription = mysqli_real_escape_string($connection, $_POST['recipeDescription']);
    $recipeIngredients = mysqli_real_escape_string($connection, $_POST['recipeIngredients']);
    $recipeDirections = mysqli_real_escape_string($connection, $_POST['recipeDirections']);

    // Build Query
    $sql = 'UPDATE recipes SET ';
    $sql .= "Title = '{$title}', ";
    $sql .= "Description = '{$recipeDescription}', ";
    $sql .= "Ingredients = '{$recipeIngredients}', ";
    $sql .= "Directions = '{$recipeDirections}' ";
    $sql .= "WHERE id = {$recipe_id}";

    // Execute Query
    $db_results = mysqli_query($connection, $sql);

    if ($db_results) {
        // Success
        redirectTo('all_recipes.php?success=');
    } else {
        // Error
        redirectTo('all_recipes.php?id=' . $recipe_id . '&error=' . mysqli_error($connection));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    // Build Query
    $sql = 'SELECT * ';
    $sql .= 'FROM recipes ';
    $sql .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($connection, $sql);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('all_recipes.php?error=' . mysqli_error($connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('all_recipes.php');
}
?>

<html>
<body>
    <div class="header">
      <h2 id="add_heading">Update Recipe</h2>
    </div>
    <br>
    <form action="" enctype="multipart/form-data" id="addRecipe" method="POST">

        <label for="Title">Title:</label>
        <input type="text" id="title" name="recipeTitle" value="<?php echo $user['Title']; ?>">
        <br>

        <label for="description">Description</label>
        <textarea name="recipeDescription" id="recipeDescription" class="add-text"><?php echo $user['Description']; ?></textarea>
        <br>

        <label for="ingredients">Ingredients:</label>
        <textarea class="add-text" name="recipeIngredients" id="ingredientList"><?php echo $user['Ingredients']; ?></textarea>
        <br>

        <label for="directions">Directions:</label>
        <textarea class="add-text" name="recipeDirections" id="recipeDirections"><?php echo $user['Directions']; ?></textarea>
        <br>
        <input type="hidden" value="<?php echo $user['id']; ?>" name="recipe_id">
        <button type="submit" value="Submit" name="update" class="btn">Update</button>
        <br>
    </form>