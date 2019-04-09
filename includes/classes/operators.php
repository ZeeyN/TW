<?php 

class Operators extends Db_object{

	protected static $db_table = "operators";
	protected static $db_table_fields = array('name', 'fio');

	public $id;
	public $name;
	public $fio;

	public function __toString(){
		return $this->fio;
	}
}//END
?>