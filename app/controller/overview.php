<?php

class Overview extends App {  

	function __construct(){
		$this->urlModel = new UrlData();
		$this->productModel = new Products();
		$this->siteModel = new siteModel();
		$this->ProductsPerPage = 10;
	}  
  
  public function display($topcategory, $category = "",$page = 1) 
  { 
  	parent::getValues();
  	$values = $this->values;
  
  	$products = array();	
  	
  	$urlData = $this->urlModel->getUrlData($topcategory);
  		
		$values["activeNavItem"] = $this->getActiveNavItem($values["topnav"],$topcategory,"name");
		$values["activeNavItemURL"] = $this->getActiveNavItem($values["topnav"],$topcategory,"url");
		 	
  	$categories = array(0 => $topcategory);
  	array_push($products, $this->productModel->getProducts($categories,$page, $this->ProductsPerPage));
  	$values["longtext"] = $this->productModel->getProductLongText($topcategory);  	
  	$values['dataCount'] = $this->productModel->getDataCount($categories);
  	
  	$values['siteTitle'] = $this->siteModel->getSiteTitle($topcategory);
  	$values['siteDescription'] = $this->siteModel->getSiteDescription($topcategory);
  	
		$values['products'] = $products[0];
		
		$this->values = $values;			
		$this->renderTbl('overview');				
  } 
  
  
  public function getActiveNavItem($navigation,$topcategory,$type="name")
  {
  	foreach($navigation as $nav)
		{
  		if($nav['url'] == $topcategory)
			{
					return $nav[$type];
  		}
  	}
		return '';
  } 

} 
?>
