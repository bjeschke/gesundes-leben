<?php /* Smarty version 3.1.27, created on 2016-04-18 15:30:09
         compiled from "/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/overview.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15299356345714e16135f843_52454288%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aa9b9af4c79e5256b71e7519e26379db9cc6b6e' => 
    array (
      0 => '/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/overview.tpl',
      1 => 1460986200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15299356345714e16135f843_52454288',
  'variables' => 
  array (
    'baseURL' => 0,
    'activeNavItem' => 0,
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5714e1613e2902_01735045',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5714e1613e2902_01735045')) {
function content_5714e1613e2902_01735045 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15299356345714e16135f843_52454288';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row">
  	
    	<div class="col-xs-12">	
      	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
" itemprop="url">
        		<span itemprop="title">Startseite</span>
    			</a>
    			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
					<span class="breadActive"><?php echo $_smarty_tpl->tpl_vars['activeNavItem']->value;?>
</span>
				</div>
      </div>	
      
      <div class="col-md-12 col-xs-12">
      	<h1><?php echo $_smarty_tpl->tpl_vars['activeNavItem']->value;?>
</h1>
      	
				
        
        
        	
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
 		   		<div class="itembox" col-md-6 col-xs-12>
			   		<div class="imagebox">
					 		<img src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/productimages/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" />
			   		</div>
				 		<div class="infobox">
			   			<div class="name"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</div>
			   	 		<div class="prodinfo"></div>
			   	 		<div class="price"></div>
			   	 		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['shopurl'];?>
" class="button">zum shop</a>
							<a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;
echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="button">zum Produkt</a>
							<div class="productinfo"><span><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo1'];?>
</span></div>
							<div class="productinfo"><span><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo2'];?>
</span></div>
							<div class="productinfo"><span><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo3'];?>
</span></div>
						</div>
		   		</div>
      	<?php
$_smarty_tpl->tpl_vars['product'] = $foreach_product_Sav;
}
?>
        
        
        
        
        
        
        
        
                      
			
    	</div>
  	</div>	
  	<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</div>
		
</div>
<?php }
}
?>