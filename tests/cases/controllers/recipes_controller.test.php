<?php
/* Recipes Test cases generated on: 2010-01-12 17:01:12 : 1263314352*/
App::import('Controller', 'Recipes');

class TestRecipesController extends RecipesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecipesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.recipe', 'app.user', 'app.category', 'app.ingredient', 'app.ingredients_recipe');

	function startTest() {
		$this->Recipes =& new TestRecipesController();
		$this->Recipes->constructClasses();
	}

	function endTest() {
		unset($this->Recipes);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>