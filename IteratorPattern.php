<?php
class NameIterator {
	function __construct() {
		$this->names = ['Robert', 'John',' Julie', 'Lora'];
		$this->index = -1;
	}
	
	public function hasNext() {
		if($this->index < sizeof($this->names)) {
			return true;
		}
		
		return false;
	}
	
	public function next() {
		if($this->hasNext()) {
			return $this->names[++$this->index];
		}
		
		return null;
	}
}

$nameIterator = new NameIterator();
echo $nameIterator->hasNext() . '<br/>';
echo $nameIterator->next() . '<br/>';
echo $nameIterator->next();
?>