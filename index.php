<html>

<head>
</head>

<body>
<h1>Recipes</h1>
</body>

<?php

include "db_connect.php";
// include "search_all_recipes.php";

?>

<form action="search_keyword.php">
  Enter keyword...:<br>
  <input type="text" name="keyword"><br>
  <input type="submit" value="Submit"><br>
</form>

<hr>
<h2>Add recipe</h2>
<form action="add_recipe.php">
  Enter recipe name:<br>
  <input type="text" name="new_recipe_name"><br>
  Enter meal type:<br>
  <input type="text" name="new_meal_type"><br>
  Enter completion time:<br>
  <input type="text" name="new_completion_time"><br>
  <input type="submit" value="Submit"><br>
</form>

<?php

// include "search_keyword.php";

$mysqli->close();

?>

</html>