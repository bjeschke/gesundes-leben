<?php

class Detail extends App {  
	
	function __construct()
	{
		$this->productModel = new Products();
	}  
  	
  
  public function display($productUrl) 
  { 
  	parent::getValues();
  	
  	$values = $this->values;
		$values["product"] = $this->productModel->getProductData($productUrl);
		
		$values["category"] = $this->productModel->getCategory($values["product"]["category"],$this->navigation); 	
		$values["longtext"] = $this->productModel->getProductLongText($productUrl);
		$values["navCategory"] = $this->getNavCategory($values["category"]);
		
		$values["siteTitle"] = $values["product"]["siteTitle"];
		$values["siteDescription"] =  $values["product"]["siteDescription"];				
		$this->values = $values;		

		$this->renderTbl('detail');
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
