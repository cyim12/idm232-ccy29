<table class="editbox">
    <thead >
      <tr>
        <th> ID </th>
        <th> Title </th>
        <th> Description </th>
      </tr>
    </thead>

    <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($db_results)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['title'] . '</td>';
              echo '<td>' . $row['description'] . '</td>';
              echo '<td><a href="admin/all_recipes.php?id=' . $row['id'] . '">' . $row['title'] .'</a></td>';
              echo '</td>';
          }
        ?>
    </tbody>
  </table>