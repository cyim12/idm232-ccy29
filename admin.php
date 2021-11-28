<?php 
    $page_title = 'Savory | Admin';
    include_once 'global/header.php'; 
?>

<html>
<div class="my_recipes">
  <div class="my_recipes_heading">
    <h2 id="food_categories">My Recipes</h2><div class="divider" id="divider7"></div></div><br>
        <div class="my_recipes_container">
            <div class="categoryitem"><a href="" class="categorylink"><img src="./images/skillet_caramel_apple_autumn2.jpg" class="food"><p class="p_category">Baked Goods</p></a>
                <div class="adminOptions">
                  <div class="btn_secondary">  
                    <a class="btn" href="/admin/edit_recipe.php" id="edit_btn">Edit</a>
                  </div>
                  <br>
                  <div class="btn_secondary">
                    <a class="btn" href="">Delete</a>
                  </div>
                </div>  
            </div>
            <div class="categoryitem"><a href="" class="categorylink"><img src="./images/caprese_salad_category1.jpg" class="food"><p class="p_category">Salads</p></a>
                <div class="adminOptions">
                  <div class="btn_secondary">  
                    <a class="btn" href="/admin/edit_recipe.php" id="edit_btn">Edit</a>
                  </div>
                  <br>
                  <div class="btn_secondary">
                    <a href="" class="btn">Delete</a>
                  </div>
                </div>
            </div>
            <div class="categoryitem"><a href="" class="categorylink"><img src="./images/sweet_salty_shrimp.jpg" class="food"><p class="p_category">Date Night Dinners</p></a></div>
            <div class="categoryitem"><a href="" class="categorylink"><img src="./images/blackened_fish_popular4.jpg" class="food"><p class="p_category">Seafood Dishes</p></a></div>
        </div>
        
        <div class="add_recipe_button">
          <a href="/admin/add_recipe.php" class="add_btn">Create Recipe</a>
        </div>
  </div>
    <div class="saved_recipes">
  <div class="saved_recipes_heading">
    <h2 id="saved_heading">Saved Recipes</h2><div class="divider" id="divider6"></div></div><br>
        <div class="saved_recipes_container">
            <div class="recipeitem"><a href="" class="categorylink"><img src="./images/caprese_salad.jpg" class="food"><p class="p_category">Classic Caprese Salad</p></a></div>
            <div class="recipeitem"><a href="" class="categorylink"><img src="./images/mango_lime_cheesecake.jpg" class="food"><p class="p_category">No-Bake Mango Lime Cheesecake</p></a></div>
            <div class="recipeitem"><a href="" class="categorylink"><img src="./images/sheet_pan_shrimp_popular6.jpg" class="food"><p class="p_category">Sheet-Pan Shrimp Gratin</p></a></div>
            <div class="recipeitem"><a href="" class="categorylink"><img src="./images/skillet_caramel_apple_autumn2.jpg" class="food"><p class="p_category">Skillet Apple-Caramel Crisp</p></a></div>
        </div>
        <div class="view_more_button">
          <a href="" class="view_more_btn">View More</a>
        </div>
  </div>
</html>

<?php
    include_once 'global/footer.php';
?>