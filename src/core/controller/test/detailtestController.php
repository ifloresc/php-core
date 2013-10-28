<?php 

class detailtestController extends DetailController {
	
	protected  function getTitle() {
		return "TITLE_ADD";
	}
	
	protected function setFields() {
		$this->addFieldDetail('input', "INIT_NAME");
		$this->addFieldDetail('text', "INIT_DESCRIPTION");
		$this->addFieldDetail('number', "INIT_NUMBER");
		$this->addFieldDetail('select', "INIT_NUMBER");
	}
	
	protected function loadData() {
		$test = new Test();
		$test->id = 1;
		$test->input = "Input";
		$test->text = "Text";
		$test->number = 123;
		$test->select = 1;

		return $test;
	}
	
	protected function accessControl() {
		return false;
	}
	
}

?>