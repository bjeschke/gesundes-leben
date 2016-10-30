<?php /* Smarty version 3.1.27, created on 2016-02-24 17:04:18
         compiled from "/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/addnewitem.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13976553156cd47e2e82ca5_25153439%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0505e85f842e82949d349344ca405f37d393fbb9' => 
    array (
      0 => '/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/addnewitem.tpl',
      1 => 1456293788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13976553156cd47e2e82ca5_25153439',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56cd47e2eca338_24556835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56cd47e2eca338_24556835')) {
function content_56cd47e2eca338_24556835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13976553156cd47e2e82ca5_25153439';
echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row addnewitem">
    	<div class="col-xs-12">
      	<form method="post">
      		<div class="line">
      			<label for="category">Kategorie:</label>
      			<select name="category" id="category">
      				<option value="vitamine">Vitamine</option>
      				<option value="mineralsaeuren">Mineralsaeuren</option>
      				<option value="fettsaeuren">Fettsaeuren</option>
      				<option value="sonstige">Sonstige</option>
      			</select>
      		</div>
      		<div class="line">
      			<label for="name">Name:</label>
      			<input type="text" name="name" id="name" />
      		</div>
      		<div class="line">
      			<label for="url">Url:</label>
      			<input type="text" name="url" id="url" />
      		</div>
      		<div class="line">
      			<label for="image">Image:</label>
      			<input type="text" name="image" id="image" />
      		</div>
      		<div class="line">
      			<label for="productinfo1">Produkt Info 1:</label>
      			<input type="text" name="productinfo1" id="productinfo1" />
      		</div>
      		<div class="line">
      			<label for="productinfo2">Produkt Info 2:</label>
      			<input type="text" name="productinfo2" id="productinfo2" />
      		</div>
      		<div class="line">
      			<label for="productinfo3">Produkt Info 3:</label>
      			<input type="text" name="productinfo3" id="productinfo3" />
      		</div>
      		<div class="line">
      			<label for="shopurl">Shopurl:</label>
      			<input type="text" name="shopurl" id="shopurl" />
      		</div>
      		<div class="line">
      			<input type="submit" name="submit" id="submit" />
      		</div>
      	</form>
    	</div>
  	</div>
	</div>
</div><?php }
}
?>