<?php /* Smarty version 3.1.27, created on 2016-04-18 15:13:06
         compiled from "/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/site.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12527521805714dd62dde8c6_99116199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f1e7fba1df888fe05017c199539fb59a55b425' => 
    array (
      0 => '/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/site.tpl',
      1 => 1456986718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12527521805714dd62dde8c6_99116199',
  'variables' => 
  array (
    'baseURL' => 0,
    'longtext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5714dd62e54103_75466172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5714dd62e54103_75466172')) {
function content_5714dd62e54103_75466172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12527521805714dd62dde8c6_99116199';
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
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
				<span class="breadActive"></span>
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