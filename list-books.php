<!doctype html>
<html lang="en">
  <body>
    <h1>List of ALL my books!!!</h1>
    <?php
      // Connect to database
      include("db.php");
	
      // Run SQL query
      $sql = "SELECT * FROM books ORDER BY date_of_release";
      $results = mysqli_query($mysqli, $sql);
    ?>
	
<form action="search-games.php" method="post">
  <input type="text" name="keywords" placeholder="Search">
  <input type="submit" value="Go!">
</form>

    <table>
      <?php while($a_row = mysqli_fetch_assoc($results)):?>
        <tr>
          <td><a href="book-details.php?id=<?=$a_row['book_id']?>"><?=$a_row['book_name']?></a></td>
          <td><?=$a_row['price']?></td>
         </tr>
      <?php endwhile;?>
    </table>
  </body>
</html>
