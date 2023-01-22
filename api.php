<?php

$ingredients = $_POST['ingredients'];
$request = new HttpRequest();
$request->setUrl('https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByIngredients');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData([
	'ingredients' => $ingredients,
	'number' => '5',
	'ignorePantry' => 'true',
	'ranking' => '1'
]);

$request->setHeaders([
	'X-RapidAPI-Key' => 'SIGN-UP-FOR-KEY',
	'X-RapidAPI-Host' => 'spoonacular-recipe-food-nutrition-v1.p.rapidapi.com'
]);

try {
	$response = $request->send();

	echo $response->getBody();
} catch (HttpException $ex) {
	echo $ex;
}
?>