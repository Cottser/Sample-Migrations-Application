<?php
/* Ingredient Test cases generated on: 2010-01-12 17:01:32 : 1263312512*/
App::import('Model', 'Ingredient');

class IngredientTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredient', 'app.recipe', 'app.user', 'app.ingredients_recipe');

	function startTest() {
		$this->Ingredient =& ClassRegistry::init('Ingredient');
	}

	function endTest() {
		unset($this->Ingredient);
		ClassRegistry::flush();
	}

}
?>