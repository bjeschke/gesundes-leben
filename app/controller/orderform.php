<?php

class OrderForm extends App {  
	
	function __construct()
	{	
		//$this->productModel = new Products();
	}  
  	
  
  public function display() 
  { 
  	parent::getValues();
  	
  	$values = $this->values;

		$values["product"] = 'bla'; 	
		$values["category"] = 'bla'; 	
		$values["navCategory"] = 'bla';
		
		$values["siteTitle"] = "Warenkorb";
		$values["siteDescription"] =  "Warenkorb";
		$values["site"] = "orderform";
				
		$this->values = $values;		
		
		$this->renderTbl('orderform');
  }  
    
    
  private function getNavCategory($category)
  {
  	foreach($this->navigation as $nav)
		{
			if($nav['name'] == $category)
			{
				return $nav['url'];
			}
			else
			{
				return '';
			}
		}  
  }
}    
?>