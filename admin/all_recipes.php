<?php
    $page_title = 'All Recipes';

    include_once '../_global/header.php';

    $sql = 'SELECT id, Title ';
    $sql .= 'FROM recipes';
    $db_results = mysqli_query($connection,$sql);

?>

<html>
<body>
    <div class="content">
        <?php

        if ($db_results && $db_results->num_rows >0) {
            include '../_components/card.php';
        } else {
            echo '<p>There are currently no recipes in the database</p>';
        }
        ?>
    <button><a href="/admin/add_recipe.php">Add Recipe</a></button>
    </div>
</body>
</html>