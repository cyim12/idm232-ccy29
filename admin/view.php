<?php
$page_title = 'SAVORY | View Recipe';
include_once '../_global/header.php';

$sql = 'SELECT * FROM recipes';
$db_results = mysqli_query($connection, $sql);

?>

<htmL>
    <?php
        if ($db_results && $db_results->num_rows > 0) {
            include '../_components/recipe_details.php';
        } else {
            echo '<p>There are currently no recipes in the database</p>';
        }
    ?>
</html>