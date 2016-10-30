<?php /* Smarty version 3.1.27, created on 2016-08-09 18:39:33
         compiled from "/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:198469086757aa0745dd70b4_39622085%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b5fa59912b0cfc55582e8c135176443aadd127' => 
    array (
      0 => '/var/www/vhosts/friseur-finder.de/httpdocs_new/gesundes-leben/app/view/templates/header.tpl',
      1 => 1470760618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198469086757aa0745dd70b4_39622085',
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
  'unifunc' => 'content_57aa0745e52f49_05525546',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57aa0745e52f49_05525546')) {
function content_57aa0745e52f49_05525546 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '198469086757aa0745dd70b4_39622085';
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


<link href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/assets/css/styles.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="" rel="shortcut icon"/>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseURL']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>

</head>
<body>
<?php echo '<script'; ?>
>


  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74816247-1', 'auto');
  ga('send', 'pageview');
  

<?php echo '</script'; ?>
>
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