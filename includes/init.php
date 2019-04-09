<?php 
/**************************CUSTOM CONSTANTS*****************************/
	defined('DS')			? null : define('DS', DIRECTORY_SEPARATOR);
	defined('SITE_ROOT') 	? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'testworkktraf');
	defined('INCLUDES_DIR')	? null : define('INCLUDES_DIR', SITE_ROOT.DS.'includes');
	defined('CLASSES_DIR')	? null : define('CLASSES_DIR', INCLUDES_DIR.DS.'classes');
/**********************************************************************/

	


	require_once(INCLUDES_DIR.DS.'functions.php');
	require_once(INCLUDES_DIR.DS.'config'.DS.'config.php');
	require_once(CLASSES_DIR.DS.'database.php');
	require_once(CLASSES_DIR.DS.'db_object.php');
	require_once(CLASSES_DIR.DS.'offers.php');
	require_once(CLASSES_DIR.DS.'operators.php');
	require_once(CLASSES_DIR.DS.'requests.php');




	$database = new Database; 


 ?>