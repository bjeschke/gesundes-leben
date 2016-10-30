<?php
require_once(dirname(dirname(__FILE__))."/model/dbHandler.php");


class Products {
	
	function __construct(){
		$this->dbHandler = new dbHandler();
	}
	
	public function getProductData($productUrl){
	
		$values = $this->dbHandler->getProductData($productUrl);
		
		return $values[0];
	}
	
	public function getProducts($categories,$page, $productsPerPage){
			
		$values = $this->dbHandler->getCategoryData($categories,$page,$productsPerPage);
	
		return $values;
	}
	
	public function getDataCount($categories){
			
		return $this->dbHandler->getDataCount($categories);	
	}

	public function getProductLongText($url){
	
		try{
			$file = file_get_contents('../app/view/text/'.$url.'.html', false);
		
			if($file)
				return $file;
		}
		catch(Exception $e) 
		{	
			return '';
		}
	}
	
	public function insertProduct($category, $name, $url, $image, $productinfo1, $productinfo2, $productinfo3, $shopurl)
	{
		return $this->dbHandler->insertProduct($category, $name, $url, $image, $productinfo1, $productinfo2, $productinfo3, $shopurl);
	}
	
	public function getCategory($category,$navigation){
				
		foreach($navigation as $nav){
			if($nav["url"] == $category)
				return $nav["name"];	
		}
		
		return 'Produkt';
	}
	
}
