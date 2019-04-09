<?php 

class Requests extends Db_object{

	protected static $db_table = "requests";
	protected static $db_table_fields = array('offer_id', 'price', 'count', 'operator_id');

	public $id;
	public $offer_id;
	public $price;
	public $count;
	public $operator_id;
}//END
?>