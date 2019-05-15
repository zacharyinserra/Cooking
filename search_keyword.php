<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#accordion" ).accordion();
	} );
	</script>
	
	<style>
		* {
			font-family:Arial, Helvetica, sans-serrif;
		
		}
	</style>
	
	
</head>

<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

// shows recipes that involve keyword
echo "<h1>Show all recipes that contain the keyword: <em>$keywordfromform</em></h1>";
$sql = "SELECT recipeID, recipe_name, meal_type, completion_time FROM recipes WHERE 
		recipe_name LIKE '%" . $keywordfromform . "%' OR
		meal_type LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);
//echo "Select returned $res->num_rows rows of data<br>";

?>

<div id="accordion">

<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Recipe ID: " . $row["recipeID"]. " Recipe: " . $row["recipe_name"] . " Meal Type: " . $row["meal_type"] . " Completion Time: " . $row["completion_time"] . "<br>";
		echo "<h3>$row[recipe_name]</h3>";
		echo "<div><p>$row[meal_type]<br>$row[completion_time]</p></div>";
	}
} else {
    echo "0 results";
}

?>

</div>
