<?php
/* Category Test cases generated on: 2010-01-12 17:01:00 : 1263314280*/
App::import('Model', 'Category');

class CategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.category', 'app.recipe', 'app.user', 'app.ingredient', 'app.ingredients_recipe');

	function startTest() {
		$this->Category =& ClassRegistry::init('Category');
	}

	function endTest() {
		unset($this->Category);
		ClassRegistry::flush();
	}

}
?>