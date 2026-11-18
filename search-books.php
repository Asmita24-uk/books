<h1>Search results</h1>
<?php

  // Connect to database and run SQL query
  include("db.php");

  // Read value from form
  $keywords = $_POST['keywords'];  

  // Run SQL query
  $sql = "SELECT * FROM books 
          WHERE book_name LIKE '%{$keywords}%' 
          ORDER BY Date_of_release";
          
  $results = mysqli_query($mysqli, $sql);
?>

<table>
  <?php while($a_row = mysqli_fetch_assoc($results)):?>
    <tr>
      <td><a href="book-details.php?id=<?=$a_row['book_id']?>"><?=$a_row['book_name']?></a></td>
      <td><?=$a_row['price']?></td>
    </tr>
  <?php endwhile;?>
</table>
