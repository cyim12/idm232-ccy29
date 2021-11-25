<?php 
    $page_title = 'Savory | Add Recipe';
    $body_class = 'add_recipe';

    include_once '../global/header.php'; 
?>

<html>
<body>
    <div class="header">
      <h2 id="add_heading">New Recipe</h2>
    </div>
    <br>
    <form method="POST" id="addRecipe" action="create.php" enctype="multipart/form-data">
        <label for="Title">Title:</label>
        <input type="text" id="title" name="recipeTitle">
        <div>
            <label for="description">Description</label>
            <textarea name="recipeNotes" id="recipeNotes" class="add-text"></textarea>
        </div>
        <div>
            <label for="ingredients">Ingredients:</label>
            <p>Use the</p>
            <div>
                <textarea class="add-text" name="recipeIngredients" id="ingredientList" placeholder="Ingredient 1"></textarea>
        </div>
        <div>
            <label for="directions">Directions:</label>
            <p>Use the</p>
            <div>
                <textarea class="add-text" name="recipeDirections" id="directionList" placeholder="Step 1"></textarea>
            </div>
        </div>
        <button type="submit" value="Submit" name="submit">Submit</button>
    </form>

<?php include '../global/footer.php'; ?>