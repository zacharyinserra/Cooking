CREATE DATABASE Recipes;

CREATE TABLE recipes (
	recipeID int PRIMARY KEY,
	completionTime int,
	ingredient1 varchar(255),
	ingredient2 varchar(255),
	ingredient3 varchar(255),
	ingredient4 varchar(255),
	ingredient5 varchar(255),
	ingredient6 varchar(255),
	ingredient7 varchar(255),
	ingredient8 varchar(255),
	ingredient9 varchar(255)
);

BACKUP DATABASE Recipes 
TO DISK = "C:\Users\zmi94\Desktop\CookingProject\SQLfiles"
WITH DIFFERENTIAL;