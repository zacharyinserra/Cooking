<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

// shows recipes that involve keyword
echo "<h2>Show all recipes that contain the keyword: $keywordfromform</h2>";
$sql = "SELECT recipeID, recipe_name, meal_type, completion_time FROM recipes WHERE 
		recipe_name LIKE '%" . $keywordfromform . "%' OR
		meal_type LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Recipe ID: " . $row["recipeID"]. " Recipe: " . $row["recipe_name"]. " Meal Type: " . $row["meal_type"]. " Completion Time: " . $row["completion_time"]. "<br>";
    }
} else {
    echo "0 results";
}

?>