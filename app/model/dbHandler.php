<?php
require_once(dirname(dirname(__FILE__))."/database/database.php");

class dbHandler{

	function __construct(){
		$this->db = new productDataBase();
	}

	public function getProductData($productURL){

	//	$sql = 'SELECT p.*, c.*, s.* FROM products p
	//					LEFT JOIN products_shops s ON s.product_id = p.id 
	//					LEFT JOIN product_content c ON c.product_id = p.id
	//					WHERE p.url = "'.$productURL.'"';
	
		$sql = 'SELECT * FROM products WHERE url = "'.$productURL.'"';
														
		return $this->db->get_result($sql);					
	}
	
	
	public function getProductDataByID($id) {
	
		$sql = 'SELECT * FROM products WHERE id = "'.$id.'"';
		
		return $this->db->get_result($sql);
	}
	
	public function getProductDataByIDs($arrayIDs) {
		
		$sql = 'SELECT * FROM products WHERE ';
				
		for($i = 0;$i < count($arrayIDs);$i++) {
			if($i > 0)
				$sql .= " OR ";
		
			$sql .= 'id = "'.$arrayIDs[$i].'"';
		}
			
		return $this->db->get_result($sql);
	}
	
	
	/*
	* @param $category array
	* @param $page int
	*/
	public function getCategoryData($categories,$page,$productsPerPage)
	{		
		$innerSQL = '';
		for($i = 0;$i < count($categories);$i++)
		{				
			if($i == 0)
				$innerSQL .=	'category = "'.$categories[$i].'"';
			if($i > 0)	
				$innerSQL .= ' AND p.category = "'.$categories[$i].'"';	
		}
		
		$itemsShow = $page * $productsPerPage;
		$offset = ($page - 1) * $productsPerPage;
		$limit = ' LIMIT '.$offset.','.$itemsShow;
		$sort = ' ORDER BY position';
		
		//$sql = 'SELECT p.*, c.*, s.* FROM products p
		//				LEFT JOIN products_shops s ON s.product_id = p.id 
		//				LEFT JOIN product_content c ON c.product_id = p.id
		//				WHERE ('.$innerSQL.')';
						
		$sql = 'SELECT * FROM products WHERE ('.$innerSQL.')'.$sort.$limit;	

		return $this->db->get_result($sql);
	}
	
	public function getDataCount($categories)
	{
		$innerSQL = '';
		for($i = 0;$i < count($categories);$i++)
		{				
			if($i == 0)
				$innerSQL .=	'category = "'.$categories[$i].'"';
			if($i > 0)	
				$innerSQL .= ' AND p.category = "'.$categories[$i].'"';	
		}
		
		$sql = 'SELECT COUNT(*) FROM products WHERE ('.$innerSQL.')';		
		return $this->db->get_result($sql);
	}
				
	public function getUrlData($category){
			
		$sql = "SELECT * FROM urls WHERE category = '".$category."'";
				
		return $this->db->get_result($sql);
	}
	
	public function insertProduct($category, $name, $url, $image, $productinfo1, $productinfo2, $productinfo3, $shopurl)
	{
		$sql = 'INSERT INTO products (category, name, url, image, productinfo1, productinfo2, productinfo3, shopurl) VALUES 
						("'.$category.'", "'.$name.'", "'.$url.'", "'.$image.'", "'.$productinfo1.'", "'.$productinfo2.'", "'.$productinfo3.'", "'.$shopurl.'")';
						
		return $this->db->insert($sql);				
	}
}


?>