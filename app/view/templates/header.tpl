<!DOCTYPE html>
<html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>{$siteTitle}</title>
<meta name="description" content="{$siteDescription}">


<title>Ein Gesundes Leben braucht viele Bausteine</title>
<meta name="description" content="Gesundes Leben zeigt was ein gesunder Körper braucht.">


<link href="{$baseURL}/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="{$baseURL}/assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="{$baseURL}/assets/css/styles.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="" rel="shortcut icon"/>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{$baseURL}/assets/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>

</head>
<body>
<script>
{literal}

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74816247-1', 'auto');
  ga('send', 'pageview');
  
{/literal}
</script>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="headerTop">
	<div class="container-fluid">
  	<div class="hidden-xs hidden-sm headerWidht headerHeight">
    	<div class="headerElementBox">
      	<div class="headerBrand">
        	<a href="{$baseURL}">GESUNDES LEBEN</a>
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
      	<a class="navbar-brand hidden-md hidden-lg" href="{$baseURL}">GESUNDES LEBEN<i class="mdi-action-favorite"></i></a>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
      	{if !empty($topnav)}
					<ul class="nav navbar-nav">
      		{foreach $topnav as $nav}
      				<li class="dropdown">
          			<a class="dropdown-toggle noPaddingLNav" href="{$baseURL}{$nav['url']}">{$nav['name']}
            			<i class="mdi-navigation-arrow-drop-down"></i>
            		</a>
          		</li>
          {/foreach}
					</ul>	 
        {/if}
      </div>
    </div>
  </div>
</nav>
