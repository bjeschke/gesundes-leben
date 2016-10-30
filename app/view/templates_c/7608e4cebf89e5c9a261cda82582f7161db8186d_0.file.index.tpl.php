<?php /* Smarty version 3.1.27, created on 2016-03-03 07:32:43
         compiled from "/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53997076256d7da8b8f1a05_67445211%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7608e4cebf89e5c9a261cda82582f7161db8186d' => 
    array (
      0 => '/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/index.tpl',
      1 => 1456986716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53997076256d7da8b8f1a05_67445211',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d7da8b8fd2f1_45406207',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d7da8b8fd2f1_45406207')) {
function content_56d7da8b8fd2f1_45406207 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53997076256d7da8b8f1a05_67445211';
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