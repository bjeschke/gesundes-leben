<?php

class Site extends App {  
	
	function __construct(){
		$this->productModel = new Products();
		$this->siteModel = new siteModel();
	}  
  	
  
  public function display($url) 
  { 
		parent::getValues(); 	
  	$values = $this->values;
	
		$values["longtext"] = $this->productModel->getProductLongText($url);
		
		//$values["activeNavItem"] = '';
		//$values["activeNavItemURL"] = '';
		
		$values['siteTitle'] = '';
  	$values['siteDescription'] = '';
  	$values['siteName'] = ucfirst($url);
		
		$this->values = $values;			
		$this->renderTbl('site');				
  }  
}    
?>
