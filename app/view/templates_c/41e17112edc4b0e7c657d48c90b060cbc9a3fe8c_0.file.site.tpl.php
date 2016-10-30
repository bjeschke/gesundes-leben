<?php /* Smarty version 3.1.27, created on 2016-03-01 15:53:44
         compiled from "/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/site.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145754118556d52058128440_34206029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e17112edc4b0e7c657d48c90b060cbc9a3fe8c' => 
    array (
      0 => '/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/site.tpl',
      1 => 1456808021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145754118556d52058128440_34206029',
  'variables' => 
  array (
    'baseURL' => 0,
    'longtext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d52058183be7_18969339',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d52058183be7_18969339')) {
function content_56d52058183be7_18969339 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145754118556d52058128440_34206029';
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