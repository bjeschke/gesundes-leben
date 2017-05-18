<?php

	class GetJsonData {
	
		function __construct(){
			$this->productModel = new Products();
		}  
		
		public function getData($id){
		 	$productData = $this->productModel->getProductDataByID($id);
		
			echo json_encode($productData);
		}
	
	}
?>