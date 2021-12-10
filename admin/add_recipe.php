<?php 
    $page_title = 'Savory | Add Recipe';
    $body_class = 'add_recipe';

    include_once __DIR__ . '/../_global/adminheader.php'; 

?>

<html>
<body>
    <div class="header">
      <h2 id="add_heading">New Recipe</h2>
    </div>
    <br>
    <form action="create_recipe.php" enctype="multipart/form-data" id="addRecipe" method="POST">

        <label for="Title">Title:</label>
        <br>
        <textarea name="recipeTitle" id="recipeTitle" class="add-text"></textarea>
        <br>
        <br>

        <label for="">Image</label>
        <br>
        <input type="file" value="" name="image">
        <br>
        <br>

        <label for="description">Description</label>
        <br>
        <textarea name="recipeDescription" id="recipeDescription" class="add-text"></textarea>
        <br>
        <br>

        <label for="ingredients">Ingredients:</label>
        <br>
        <textarea class="add-text" name="recipeIngredients" id="ingredientList" placeholder="Ingredient 1"></textarea>
        <br>
        <br>

        <label for="directions">Directions:</label>
        <br>
        <textarea class="add-text" name="recipeDirections" id="recipeDirections" placeholder="Step 1:"></textarea>
        <br>
        <br>

        <button type="submit" value="Submit" name="submit" class="btn">Submit</button>
        <br>
    </form>

<?php include '../_global/footer.php'; ?>