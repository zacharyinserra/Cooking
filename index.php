<html>

<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
<h1>Recipes</h1>
</body>

<?php

include "db_connect.php";
// include "search_all_recipes.php";

?>

<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a recipe</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Input</label>
  <div class="col-md-4">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. chicken, pasta, spaghetti..." class="form-control input-md" required="">
    <p class="help-block">Enter a word to search for in the recipe databse</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">Search</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add a recipe</legend>

<!-- Text input-->
<div class="form-group" action="add_recipe.php">
  <label class="col-md-4 control-label" for="new_recipe_name">Recipe Name</label>  
  <div class="col-md-4">
  <input id="new_recipe_name" name="new_recipe_name" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter recipe name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_meal_type">Meal Type</label>  
  <div class="col-md-4">
  <input id="new_meal_type" name="new_meal_type" type="text" placeholder="e.g. dinner, lunch, snack, dessert..." class="form-control input-md" required="">
  <span class="help-block">Enter meal type</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_completion_time">Completion Time</label>  
  <div class="col-md-4">
  <input id="new_completion_time" name="new_completion_time" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter time to complete recipe</span>  
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectmultiple">Select Multiple</label>
  <div class="col-md-4">
    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
      <option value="3">three</option>
      <option value="4">four</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="directions">Directions</label>  
  <div class="col-md-8">
  <input id="directions" name="directions" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter recipe directions</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>

<?php

// include "search_keyword.php";

$mysqli->close();

?>

</html>
