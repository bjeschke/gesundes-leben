<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require '../resources/flight-master/flight/Flight.php';
require '../resources/smarty/libs/Smarty.class.php';
require 'assets/strings/base_url.php';
require 'assets/strings/navigation.php';
require 'assets/strings/siteTitle.php';
require 'assets/strings/siteDescription.php';
require '../app/core/app.php';
require '../app/controller/home.php';
require '../app/controller/overview.php';
require '../app/controller/detail.php';
//require '../app/controller/addcontroller.php';
require '../app/controller/site.php';
require '../app/model/products.php';
require '../app/model/product_content.php';
require '../app/model/products_shops.php';
require '../app/model/urldata.php';
require '../app/model/navigation.php';
require '../app/model/siteModel.php';

Flight::set('navigation', $navigation);
Flight::set('siteTitle', $siteTitle);
Flight::set('siteDescription', $siteDescription);

Flight::set('baseURL', 'http://www.gesundes-leben.net/');
//Flight::set('baseURL', 'http://localhost/gesundes-leben/public/');

Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = '../app/view/templates/';
    $smarty->compile_dir = '../app/view/templates_c/';
    $smarty->config_dir = '../app/view/config/';
    $smarty->cache_dir = '../app/view/cache/';
    $smarty->compile_check = true;
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});

//Flight::map('notFound', function(){
//    Flight::redirect('../app/view/templates/error.php', 401);
//});

//Flight::map('error', function(Exception $ex){
    // Handle error
//    echo $ex->getTraceAsString();
//    Flight::notFound();
//});


Flight::route('/', function(){
	$controller = new Home();
	$controller->index();
});

//Flight::route('/produkt/@productName', function($productName){
//	$detail = new Detail();
//	$detail->display($productName);
//});

Flight::route('POST /addnewitem', function(){
	$controller = new AddController();
	$controller->formSubmit();
});

Flight::route('/addnewitem', function(){
	$controller = new AddController();
	$controller->form();
});
Flight::route('/ueber-uns/@site', function($site){
	$siteController = new Site();
	$siteController->display($site);
});

Flight::route('/@category/@subcategory/@page', function($category,$subcategory,$page){
	$overview = new Overview();
	$overview->display($category,$subcategory,$page);
});

Flight::route('/@category/@subcategory', function($category,$subcategory){
	$overview = new Overview();
	$overview->display($category,$subcategory);
});

Flight::route('/@category', function($category){
	$overview = new Overview();
	$navigation = Flight::get('navigation');
	$navItem = $overview->getActiveNavItem($navigation,$category);
	
	if($navItem != '')
		$overview->display($category);
	else
	{
		$detail = new Detail();
		$detail->display($category);	
	}
		
});




Flight::start();
?>