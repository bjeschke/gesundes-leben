<?php

class Home extends App {
	
	function __construct(){
		$this->siteModel = new siteModel();
	}  


  public function index() 
  {
  	parent::getValues();
  	$values = $this->values;
  
		$values['siteTitle'] = $this->siteModel->getSiteTitle('home');
  	$values['siteDescription'] = $this->siteModel->getSiteDescription('home');

		$this->values = $values;			
		$this->renderTbl('index');		
  }
}



?>
