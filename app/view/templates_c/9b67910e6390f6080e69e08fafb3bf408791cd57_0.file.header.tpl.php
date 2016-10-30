<?php /* Smarty version 3.1.27, created on 2015-12-28 02:26:40
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123672692856808fd05bea86_70714441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b67910e6390f6080e69e08fafb3bf408791cd57' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/stylofish/app/view/templates/header.tpl',
      1 => 1450858592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123672692856808fd05bea86_70714441',
  'variables' => 
  array (
    'topnav' => 0,
    'baseURL' => 0,
    'key' => 0,
    'nav' => 0,
    'val' => 0,
    'fieldValue' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56808fd0668fd8_70644188',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56808fd0668fd8_70644188')) {
function content_56808fd0668fd8_70644188 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123672692856808fd05bea86_70714441';
?>
<!DOCTYPE html>
<html lang="de">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<link href="../../resources/assets/css/toyfinder18.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="/toyfinder18/img/ico/favicon.ico" rel="shortcut icon"/>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="headerTop">
	<div class="container-fluid">
  	<div class="hidden-xs hidden-sm headerWidht headerHeight">
    	<div class="headerElementBox">
      	<div class="headerBrand">
        	<a class="">TOYFINDER18</a>
        	<i class="mdi-action-favorite"></i>
        </div>
        	<div class="clearfix" id="overflowHeader">
           	<div class="overflowHeader">
            	<span class="bold">Deine Vorteile:</span>
              	<i class="mdi-navigation-check"></i>Top Produkte!&nbsp;
                <i class="mdi-navigation-check"></i>Gro&szlig;e Auswahl!&nbsp;
                <i class="mdi-navigation-check"></i>Sicher und anonym!&nbsp;
                <i class="mdi-navigation-check"></i>Diskreter Versand!
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid contHeadSecond">
    <div class="navbar navbar-default navHead headerWidht">
    	<div class="navbar-header">
      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        	<span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      	<a class="navbar-brand hidden-md hidden-lg" href="">TOYFINDER18<i class="mdi-action-favorite"></i></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
      	<?php if (!empty($_smarty_tpl->tpl_vars['topnav']->value)) {?>
      		<?php
$_from = $_smarty_tpl->tpl_vars['topnav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['nav']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
$foreach_nav_Sav = $_smarty_tpl->tpl_vars['nav'];
?>
      			<ul class="nav navbar-nav">
      				<li class="dropdown">
          			<a class="dropdown-toggle noPaddingLNav" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;
echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>

            			<i class="mdi-navigation-arrow-drop-down"></i>
            		</a>
            
            		<?php
$_from = $_smarty_tpl->tpl_vars['nav']->value['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val']->_loop = false;
$_smarty_tpl->tpl_vars['subnav'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['subnav']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
$foreach_val_Sav = $_smarty_tpl->tpl_vars['val'];
?>
            			<ul class="dropdown-menu navDrpFirst">

										<?php if ($_smarty_tpl->tpl_vars['val']->value['name'] != '') {?>
            					<li><a class="navMainCat" href=""><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></li>
              			<?php }?>
              	
              			<?php if (!empty($_smarty_tpl->tpl_vars['val']->value['fields'])) {?>
              				<?php
$_from = $_smarty_tpl->tpl_vars['val']->value['fields'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['fieldValue'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['fieldValue']->_loop = false;
$_smarty_tpl->tpl_vars['fieldKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['fieldKey']->value => $_smarty_tpl->tpl_vars['fieldValue']->value) {
$_smarty_tpl->tpl_vars['fieldValue']->_loop = true;
$foreach_fieldValue_Sav = $_smarty_tpl->tpl_vars['fieldValue'];
?>
              					<?php if ($_smarty_tpl->tpl_vars['fieldValue']->value['name'] != '') {?>
              	 					<li><a href=""><?php echo $_smarty_tpl->tpl_vars['fieldValue']->value['name'];?>
</a></li>
              					<?php }?>
              				<?php
$_smarty_tpl->tpl_vars['fieldValue'] = $foreach_fieldValue_Sav;
}
?> 
              			<?php }?>
              		</ul>
              	<?php
$_smarty_tpl->tpl_vars['val'] = $foreach_val_Sav;
}
?>
          		</li>
            </ul>	          
          <?php
$_smarty_tpl->tpl_vars['nav'] = $foreach_nav_Sav;
}
?>
        <?php }?>
      </div>
    </div>
  </div>
</nav>





















<?php }
}
?>