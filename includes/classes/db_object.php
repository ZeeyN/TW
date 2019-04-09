<?php 

class Db_object{

	public static function find_all(){
		return static::find_by_query("SELECT * FROM ".static::$db_table);
	}


	public static function find_by_query($sql){
		global $database;

		$result_set 	= $database->query($sql);
		$object_array 	= array();

		while($row = mysqli_fetch_array($result_set)){
			$object_array[] = static::instantiation($row);
		}

		return $object_array;
	}


    public static function find_by_id($id){
        $the_result_array = static::find_by_query("SELECT * FROM ".static::$db_table." WHERE id= $id LIMIT 1");

        return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }


	public static function instantiation($record){
		$calling_class	= get_called_class();
		$object 		= new $calling_class;

		foreach($record as $attribute => $value){
			if($object->has_attribute($attribute)){
				$object->$attribute = $value;
			}
		}
		return $object;
	}


	private function has_attribute($attribute){
		$object_props = get_object_vars($this);
		return array_key_exists($attribute, $object_props);
	}
}//END
?>