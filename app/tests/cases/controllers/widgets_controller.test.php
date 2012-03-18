<?php
/* Widgets Test cases generated on: 2012-03-14 20:57:41 : 1331726261*/
App::import('Controller', 'Widgets');

class TestWidgetsController extends WidgetsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WidgetsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.widget');

	function startTest() {
		$this->Widgets =& new TestWidgetsController();
		$this->Widgets->constructClasses();
	}

	function endTest() {
		unset($this->Widgets);
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
