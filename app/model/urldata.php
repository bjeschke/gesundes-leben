<?php
require_once(dirname(dirname(__FILE__))."/model/dbHandler.php");


class UrlData {
	
	function __construct(){
		$this->dbHandler = new dbHandler();
	}
	
	public function getUrlData($topcategory, $category = ""){
	
		$values = $this->dbHandler->getUrlData($topcategory, $category);
				
		//if($value[0] != "")
			return $values[0];
			
			
		return false;
	}		
}