<?php

class App
{  

		public $navigation = array();
		public $baseURL = '';
		public $values = array();

		private function getNavigation(){
			$this->navigation = Flight::get('navigation');	
			return $this->navigation;
		}
		
		private function getBaseURL(){
				$this->baseURL = Flight::get('baseURL');	
				return $this->baseURL;
		}
		
		public function getValues() 
  	{
  		$this->values["topnav"] = $this->getNavigation(); 
  		$this->values['baseURL'] = $this->getBaseURL(); 	
  	}
  	
  	public function renderTbl($name){
  		Flight::render($name.'.tpl', $this->values);  	
  	}
}    




?>
