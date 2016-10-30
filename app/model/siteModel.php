<?php
require_once(dirname(dirname(__FILE__))."/model/dbHandler.php");


class siteModel {
	  
  public function getSiteTitle($name)
  {
  	$siteTitle = Flight::get('siteTitle');

  	return $siteTitle[$name];
  }
  
  public function getSiteDescription($name)
  {
  	$siteDescription = Flight::get('siteDescription');
  	
  	return $siteDescription[$name];
  }
}
