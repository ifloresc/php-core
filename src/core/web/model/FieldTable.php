<?php 

class FieldTable {
	
	public $name;	
	public $key;
	public $type;
	public $length;
	public $validate;
	public $list;
	
	function __construct($name, $key) {
		$this->name = $name;
		$this->key = $key;
	}
	
}

?>