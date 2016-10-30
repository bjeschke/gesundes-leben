<?php /* Smarty version 3.1.27, created on 2016-01-04 04:53:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/gesundes-leben/app/view/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21385500645689ecbd07ac30_45893275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3b298a4929b5773b33d1c1b5de670cb3dfd60ce' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/gesundes-leben/app/view/templates/header.tpl',
      1 => 1451879592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21385500645689ecbd07ac30_45893275',
  'variables' => 
  array (
    'topnav' => 0,
    'baseURL' => 0,
    'key' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5689ecbd091922_06525672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5689ecbd091922_06525672')) {
function content_5689ecbd091922_06525672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21385500645689ecbd07ac30_45893275';
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
        	<a class="">GESUNDES LEBEN</a>
        	<i class="mdi-action-favorite"></i>
        </div>
        	<div class="clearfix" id="overflowHeader">
           	<div class="overflowHeader">
            	<span class="bold">Deine Vorteile:</span>
              	<i class="mdi-navigation-check"></i>Top Produkte!&nbsp;
                <i class="mdi-navigation-check"></i>Gro&szlig;e Auswahl!&nbsp;
                <i class="mdi-navigation-check"></i>Von Experten geprüft&nbsp;
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
      	<a class="navbar-brand hidden-md hidden-lg" href="">GESUNDES LEBEN<i class="mdi-action-favorite"></i></a>
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