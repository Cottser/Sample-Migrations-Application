<?php
/* Ingredients Test cases generated on: 2010-01-12 17:01:32 : 1263312512*/
App::import('Controller', 'Ingredients');

class TestIngredientsController extends IngredientsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class IngredientsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ingredient', 'app.recipe', 'app.user', 'app.ingredients_recipe');

	function startTest() {
		$this->Ingredients =& new TestIngredientsController();
		$this->Ingredients->constructClasses();
	}

	function endTest() {
		unset($this->Ingredients);
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