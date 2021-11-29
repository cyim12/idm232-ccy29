<?php
while ($row = mysqli_fetch_assoc($db_results)) { ?>
    <div>
        <div>
            <a href="../admin/view.php?id=<?php echo $row['id']; ?>">
            <h2><?php echo $row['Title']; ?></h2></a>
        <div>
            <a href="../admin/update_recipe.php?id=<?php echo $row['id']; ?>">Edit</a>
        </div>
        <div>
            <a href="../admin/delete_recipe.php?id=<?php echo $row['id']; ?>">Delete</a>
        </div>
<?php
    }
?>