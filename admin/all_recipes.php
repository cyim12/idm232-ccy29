<?php
    $page_title = 'All Recipes';

    include_once __DIR__ . '/../_global/adminheader.php';

    $sql = 'SELECT *';
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
    <button><a href="add_recipe.php">Add Recipe</a></button>
    </div>
</body>
</html>