<?php 


class Navigation{  

	function __construct(){	
		$this->navigation = Flight::get('navigation');
	}  
	
	
	public function getTopNavigationKeys(){
		$topNavKeys = array();

		foreach($this->navigation as $key => $val){
			array_push($topNavKeys, $key); 
		}
		
		return $topNavKeys;	
	}
	
	
	public function getTopNavigationFields(){
		$topNav = array();

		foreach($this->navigation as $nav)
		{
			if(isset($nav['fields']))
			{
				array_push($topNav, $nav['fields']);
			}	
		}
		
		return $topNav;	
	}
	
	public function getTopNavigationNames()
	{	
		$topNav = array();

		foreach($this->navigation as $nav)
		{
			if(isset($nav['name']))
			{
				array_push($topNav, $nav['name']);
			}	
		}
		
		return $topNav;		
	}
	
	
	public function getSubNavigation($topNavItem)
	{
		$subNav = array();
			
		

	
		
		return $subNav;		
	
	}
	
	
	
}
?>