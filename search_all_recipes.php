<?php

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

// retrieves and displays all data in the database
$sql = "SELECT recipeID, recipe_name, meal_type, completion_time FROM recipes";
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