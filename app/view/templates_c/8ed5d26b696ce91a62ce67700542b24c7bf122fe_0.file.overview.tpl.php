<?php /* Smarty version 3.1.27, created on 2015-12-28 03:00:44
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/overview.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:993063997568097cc5f0995_55406389%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ed5d26b696ce91a62ce67700542b24c7bf122fe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/overview.tpl',
      1 => 1451268041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '993063997568097cc5f0995_55406389',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568097cc641fe6_30920106',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568097cc641fe6_30920106')) {
function content_568097cc641fe6_30920106 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '993063997568097cc5f0995_55406389';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row">
    	<div class="col-xs-12">
      	
      	
      	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    			<a href="" itemprop="url">
        		<span itemprop="title">Startseite</span>
    			</a>
    			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
      
      	
      </div>
      <div class="col-md-3 sidebar">
      	
      </div>
      <div class="col-md-9 col-xs-12">
      	
      	

      	<div class="visible-xs visible-sm">
      		
        </div>
        
        
        	
        <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$foreach_product_Sav = $_smarty_tpl->tpl_vars['product'];
?>
      	
      ddfgdfg
   		<div class="hidden-md hidden-lg carousel slide" id="carousel-generic-'.$i.'" data-ride="carousel">
        	<ol class="carousel-indicators">
            <li data-target="#carousel-generic-'.$i.'" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-generic-'.$i.'" data-slide-to="1"></li>
        	</ol>
        	<div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="https://res.cloudinary.com/dnx1cr9zs/c_scale,h_201/w_201/'.$pictureUrl.'" alt="'.shortString($productDesc).'" itemprop="image" />
            </div>
            <div class="item TextBorder">
                 <div class="carousel-caption">
                    <ul class="clearfix"><li class="carouselTextH">Highlights:</li>
                        <span class="dInfoShortL"><i class="mdi-navigation-check"></i><li><?php echo $_smarty_tpl->tpl_vars['product']->value["productInfo1"];?>
</li></span>
                        <span class="dInfoShortL"><i class="mdi-navigation-check"></i><li>'.$productInfo2.'</li></span>
                        <span class="dInfoShortL"><i class="mdi-navigation-check"></i><li>'.$productInfo3.'</li></span>
                        <span class="dInfoShortL"><i class="mdi-navigation-check"></i><li>'.$productInfo4.'</li></span>
                        <span class="dInfoShortL"><i class="mdi-navigation-check"></i><li>'.$productInfo5.'</li></span>
                    </ul>
                </div>
            </div>
        </div>
    </div>

  <div class="'.$productSize.' prdSize" itemscope itemtype="http://schema.org/Product">'.$carousel.'

    <div class="prdOverlay">
        <div class="hidden-xs hidden-sm prdImgWrap">
            <a href="'.$baseUrl.'/'.$baseSiteErotikShop.'/'.$productUrl.'">
                <img class="img-responsive" src="https://res.cloudinary.com/dnx1cr9zs/c_scale,h_201/w_201/'.$pictureUrl.'" alt="'.shortString($productDesc).'" itemprop="image" />
            </a>
        </div>
    		<div class="prdInfoWrap">
        	<a href="'.$baseUrl.'/'.$baseSiteErotikShop.'/'.$productUrl.'" itemprop="name">'.$productDesc.'</a>
        	<div class="prdPrice" itemprop="offers" itemscope itemtype="http://schema.org/Offer">';
                    if($priceN && $priceV != "" && $priceV > $priceN){
            <span class="red">'.$priceN.'&nbsp;&euro;&nbsp;&nbsp;</span>
            <span itemprop="price">
                    if($priceV && $priceV != "" && $priceV > $priceN)
            <span class="lineThrough">'.$priceV.'&nbsp;&euro;</span>';
                    else
           $priceN.'&nbsp;&euro;';
           </span>
        </div>
        <span class="prdShipping">Versand:&nbsp;';
                    if($shippingFree == true)
                    {
           <span class="red">'.$shipPriceFree.'</span>
                    }
                    else
           $shipPrice[$shopId].'&nbsp;&euro;';
            &nbsp;&ndash;&nbsp;</span>bei&nbsp;<span class="prdShop">'.$shopIdBrand[$shopId].'</span></div>
            <div class="prdBtnGrp">
            	<a class="btn btn-default btn-raised" href="'.$baseUrl.'/'.$baseSiteErotikShop.'/'.$productUrl.'">Details</a>
              <span class="btn btn-raised v1234" id="product'.$i.'" onclick="ga(\'send\', \'event\', \'A-O Kat-Ins\', \'Click Btn-Shop\', \''.$productUrl.'\')">Zum Shop</span>
            </div>
       			<div class="hidden-xs hidden-sm prdOverlayText">
            	<ul class="clearfix"><li class="prdOverlayTextH">Highlights:</li>
              	<span class="dInfoShortL"><i class="mdi-navigation-check"></i>&nbsp;<li>'.$productInfo1.'</li></span>
                <span class="dInfoShortL"><i class="mdi-navigation-check"></i>&nbsp;<li>'.$productInfo2.'</li></span>
                <span class="dInfoShortL"><i class="mdi-navigation-check"></i>&nbsp;<li>'.$productInfo3.'</li></span>
                <span class="dInfoShortL"><i class="mdi-navigation-check"></i>&nbsp;<li>'.$productInfo4.'</li></span>
                <span class="dInfoShortL"><i class="mdi-navigation-check"></i>&nbsp;<li>'.$productInfo5.'</li></span>
              </ul>
            </div>
    </div>
  </div>  
            echo '<div class="row">'.$string.'</div>
            
          
           
        <?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
        
        
        
        
        
        
                      
				
    	</div>
  	</div>
	</div>
</div><?php }
}
?>