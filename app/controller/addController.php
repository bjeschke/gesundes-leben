<?php

class AddController{  

	function __construct(){
		$this->urlModel = new UrlData();
		$this->productModel = new Products();
		$this->navigation = Flight::get('navigation');
		$this->baseURL = Flight::get('baseURL');
	}  
  
  public function form() 
  { 
		$values = [];
		$values['baseURL'] = $this->baseURL;
		$values["topnav"] = $this->navigation;

		Flight::render('addnewitem.tpl', $values);

  } 
  
  public function formSubmit()
  {  	
  	$category = $_POST["category"];
  	$name  = $_POST["name"];
  	$url  = $_POST["url"];
  	$image = $_POST["image"];
  	$productinfo1 = $_POST["productinfo1"];
  	$productinfo2 = $_POST["productinfo2"];
  	$productinfo3 = $_POST["productinfo3"];
  	$shopurl = $_POST["shopurl"];
  
  
  	$state = $this->productModel->insertProduct($category, $name, $url, $image, $productinfo1, $productinfo2, $productinfo3, $shopurl);
  	
  	if($state)  
  		echo 'hinzugefuegt';
  	else
  		echo 'fehlgeschlagen';
  }
} 
?>
