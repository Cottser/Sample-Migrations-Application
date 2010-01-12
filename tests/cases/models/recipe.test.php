<?php
/* Recipe Test cases generated on: 2010-01-12 17:01:23 : 1263312503*/
App::import('Model', 'Recipe');

class RecipeTestCase extends CakeTestCase {
	var $fixtures = array('app.recipe', 'app.user', 'app.ingredient', 'app.ingredients_recipe');

	function startTest() {
		$this->Recipe =& ClassRegistry::init('Recipe');
	}

	function endTest() {
		unset($this->Recipe);
		ClassRegistry::flush();
	}

}
?>