<?php 
    $page_title = 'Savory | Admin';

    include_once 'global/header.php'; 
?>

    <br>
    <div>
      <a href="admin/add_recipe.php" class="admin_btn" id="new_btn">New</a>
    </div>
    <br>
    <div class="adminRecipes">
    <div class="adminRecipe">
        <div class="recImage"><img src="/images/banana_cream_pie.jpg"></div>
        <br>
        <div class="adminOptions">
          <a href="/admin/edit_recipe.php" class="admin_btn" id="edit_btn">Edit</a>
          <a href="/admin/delete_recipe.php" class="admin_btn" id="delete_btn">Delete</a>
        </div>
    </div>
    </div>
</body>
</html>

<?php
    include_once '/global/footer.php';
?>