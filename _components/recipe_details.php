<?php
$recipe_id = $_GET['id'];

$sql = mysqli_query($connection, "SELECT * FROM recipes WHERE id='$recipe_id'");

while ($row = mysqli_fetch_assoc($sql)) {
    $recipeDescription = $row['Description'];
    $recipeIngredients = $row['Ingredients'];
    $recipeDirections = $row['Directions'];
    $recipeDescriptionExplode = explode("|", htmlspecialchars_decode($row['Description']));
    $recipeIngredientsExplode = explode("|", htmlspecialchars_decode($row['Ingredients']));
    $recipeDirectionsExplode = explode("|", htmlspecialchars_decode($row['Directions']));
?>

<div>
    <div>
        <h2><?php echo $row['Title']; ?></h2>
    </div>
</div>
<div>
    <div>
        <h2>Description</h2>
        <ul>
            <?php foreach($recipeDescriptionExplode as $value){
                echo "<li>$value</li";}; ?>
        </ul>
    </div>
    <div>
        <h2>Ingredients</h2>
        <ul>
            <?php foreach($recipeIngredientsExplode as $value){
                echo "<li>$value</li";}; ?>
        </ul>
    </div>
    <div>
        <h2>Directions</h2>
        <ul>
            <?php foreach($recipeDirectionsExplode as $value){
                echo "<li>$value</li";}; ?>
        </ul>
    </div>
</div>

<?php
}
?>