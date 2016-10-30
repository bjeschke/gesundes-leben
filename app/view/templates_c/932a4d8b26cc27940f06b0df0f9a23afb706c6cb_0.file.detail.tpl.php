<?php /* Smarty version 3.1.27, created on 2016-08-09 19:19:16
         compiled from "/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:191914990957aa10949f3ad9_87980920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '932a4d8b26cc27940f06b0df0f9a23afb706c6cb' => 
    array (
      0 => '/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/detail.tpl',
      1 => 1470763128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191914990957aa10949f3ad9_87980920',
  'variables' => 
  array (
    'baseURL' => 0,
    'navCategory' => 0,
    'category' => 0,
    'product' => 0,
    'longtext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57aa1094a5e410_63970873',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57aa1094a5e410_63970873')) {
function content_57aa1094a5e410_63970873 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '191914990957aa10949f3ad9_87980920';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div id="wrapper" class="well wellCat">
	<div class="row">
  	<div class="col-xs-12">	
    	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
  			<a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
" itemprop="url">
      		<span itemprop="title">Startseite</span>
  			</a>
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
  			<a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;
echo $_smarty_tpl->tpl_vars['navCategory']->value;?>
" itemprop="url">
      		<span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</span>
  			</a>	
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
				<span class="breadActive"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</span>
			</div>
    </div>	
		
		<div class="productcontainer">
			<div class="imagebox">
				 <img src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/productimages/<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" />
			</div>
		
			<div class="productinfobox">
			<div class="infoboxinside">
				<h1><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h1>
		 
				<div class="infocontainer">
					<div class="productinfo"><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo1'];?>
</div>		
					<div class="productinfo"><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo2'];?>
</div>		
					<div class="productinfo"><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo3'];?>
</div>		
				</div>
				<div class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 &euro;</div>		
				<div class="kapseln">1 Pckg. = <?php echo $_smarty_tpl->tpl_vars['product']->value['kapseln'];?>
 Kapseln</div>
				<div class="vorteil-box">
					<img border="0" alt="Gentechnikfrei" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/img/Gentechnikfrei.jpg">
					<img border="0" alt="Glutenfrei" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/img/Glutenfrei.jpg">
					<img border="0" alt="Lactosefrei" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/img/Lactosefrei.jpg">
					<img border="0" alt="VEGI" src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
assets/img/Vegy.jpg">
				</div>
			</div>
				
				<div class="buttoncontainer">
					<a class="shop" href="<?php echo $_smarty_tpl->tpl_vars['product']->value['shopurl'];?>
">zum Shop</a>	
				</div>

			</div>
		</div>
		<div class="longinfo">
			<?php echo $_smarty_tpl->tpl_vars['longtext']->value;?>

		</div>
	</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>