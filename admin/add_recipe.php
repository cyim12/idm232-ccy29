<?php 
    $page_title = 'Savory | Add Recipe';
    $body_class = 'add_recipe';

    include_once '../_global/header.php'; 
?>

<html>
<body>
    <div class="header">
      <h2 id="add_heading">New Recipe</h2>
    </div>
    <br>
    <form action="/admin/create_recipe.php" enctype="multipart/form-data" id="addRecipe" method="POST">

        <label for="Title">Title:</label>
        <input type="text" id="title" name="recipeTitle">
        <br>

        <label for="description">Description</label>
        <textarea name="recipeDescription" id="recipeDescription" class="add-text"></textarea>
        <br>

        <label for="ingredients">Ingredients:</label>
        <textarea class="add-text" name="recipeIngredients" id="ingredientList" placeholder="Ingredient 1"></textarea>
        <br>

        <label for="directions">Directions:</label>
        <textarea class="add-text" name="recipeDirections" id="directionList" placeholder="Step 1:"></textarea>
        <br>

        <button type="submit" value="Submit" name="submit">Submit</button>
        <br>
    </form>

<?php include '../_global/footer.php'; ?>