<?php 

class Offers extends Db_object{

	protected static $db_table = "offers";
	protected static $db_table_fields = array('name');

	public $id;
	public $name;

	public function __toString(){
		return $this->name;
	}
}//END
?>