<?php /* Smarty version 3.1.27, created on 2016-03-01 15:57:21
         compiled from "/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:88478908056d5213161d381_02239346%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba00f36767a5f4d0699d53d92c2be6e671de879c' => 
    array (
      0 => '/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/index.tpl',
      1 => 1454467621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88478908056d5213161d381_02239346',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d521316a7c86_62318083',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d521316a7c86_62318083')) {
function content_56d521316a7c86_62318083 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '88478908056d5213161d381_02239346';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container-fluid content">
	<div class="well wellCat home" id="wrapper">
  	<div class="row">
			<div class="rightcol col-md-12 col-xs-12">
				<div class="bigbanner paar col-md-12 col-xs-12">
					<img src="assets/img/frohes_paar.jpg" />
				</div>
			<div>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>