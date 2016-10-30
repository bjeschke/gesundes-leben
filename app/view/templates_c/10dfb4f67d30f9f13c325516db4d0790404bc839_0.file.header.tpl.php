<?php /* Smarty version 3.1.27, created on 2016-03-03 15:31:50
         compiled from "/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:49427074956d7be36de0125_35343895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10dfb4f67d30f9f13c325516db4d0790404bc839' => 
    array (
      0 => '/Applications/MAMP/htdocs/gesundes-leben/app/view/templates/header.tpl',
      1 => 1456978217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49427074956d7be36de0125_35343895',
  'variables' => 
  array (
    'siteTitle' => 0,
    'siteDescription' => 0,
    'baseURL' => 0,
    'topnav' => 0,
    'nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d7be370be5b8_95081534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d7be370be5b8_95081534')) {
function content_56d7be370be5b8_95081534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '49427074956d7be36de0125_35343895';
?>
<!DOCTYPE html>
<html lang="de">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title><?php echo $_smarty_tpl->tpl_vars['siteTitle']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['siteDescription']->value;?>
">


<title>Ein Gesundes Leben braucht viele Bausteine</title>
<meta name="description" content="Gesundes Leben zeigt was ein gesunder Körper braucht.">


<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="assets/css/styles.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="" rel="shortcut icon"/>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>

</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="headerTop">
	<div class="container-fluid">
  	<div class="hidden-xs hidden-sm headerWidht headerHeight">
    	<div class="headerElementBox">
      	<div class="headerBrand">
        	<a href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">GESUNDES LEBEN</a>
        </div>
        	<div class="clearfix" id="overflowHeader">
           	<div class="overflowHeader">
            	<span class="bold">Deine Vorteile:</span>
              	<i class="mdi-navigation-check"></i>Top Produkte!&nbsp;
                <i class="mdi-navigation-check"></i>Hochwertig!
                <i class="mdi-navigation-check"></i>Von Experten geprüft&nbsp;
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid contHeadSecond">
    <div class="navbar navHead headerWidht">
    	<div class="navbar-header">
      	<a class="navbar-brand hidden-md hidden-lg" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
">GESUNDES LEBEN<i class="mdi-action-favorite"></i></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
      	<?php if (!empty($_smarty_tpl->tpl_vars['topnav']->value)) {?>
					<ul class="nav navbar-nav">
      		<?php
$_from = $_smarty_tpl->tpl_vars['topnav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['nav']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
$foreach_nav_Sav = $_smarty_tpl->tpl_vars['nav'];
?>
      				<li class="dropdown">
          			<a class="dropdown-toggle noPaddingLNav" href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;
echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['nav']->value['name'];?>

            			<i class="mdi-navigation-arrow-drop-down"></i>
            		</a>
          		</li>
          <?php
$_smarty_tpl->tpl_vars['nav'] = $foreach_nav_Sav;
}
?>
					</ul>	 
        <?php }?>
      </div>
    </div>
  </div>
</nav>
<?php }
}
?>