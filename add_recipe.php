<?php

include "db_connect.php";
$new_recipe_name = $_GET["new_recipe_name"];
$new_meal_type = $_GET["new_meal_type"];
$new_completion_time = $_GET["new_completion_time"];

echo "<h2>Trying to add new recipe: $new_recipe_name, $new_meal_type, $new_completion_time</h2>";
$sql = "INSERT INTO recipes (recipeID, recipe_name, meal_type, completion_time)
		VALUES (NULL, '$new_recipe_name', '$new_meal_type', '$new_completion_time')";
$result = $mysqli->query($sql);

include "search_all_recipes.php";

?>

<a href="index.php">Return to main page</a>