{if !isset($site)}{$site=""}{/if}
{if !isset($activeNavItemURL)}{$activeNavItemURL=""}{/if}
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>{$siteTitle}</title>
<meta name="description" content="{$siteDescription}">
<meta name="author" content="Benjamin Jeschke">
{if isset($site) && ($site=="site" || $site=="orderform" || $site=="orderdone")}
<meta name="robots" content="noindex, follow">
{/if}

{if isset($site) && $site=="detail"}
<meta property="og:image" content="{$baseURL}assets/productimages/{$product['image']}" />
<meta property="og:image:width" content="500" />
<meta property="og:image:height" content="500" />
{/if}
<link rel="canonical" href="http:{$ownURL}"/>
<link href="{$baseURL}/assets/css/bootstrap.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="{$baseURL}/assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="{$baseURL}/assets/css/styles.css" type="text/css" rel="stylesheet" media="screen"/>
<link href="" rel="shortcut icon"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="{$baseURL}/assets/js/default.js"></script>
<script src="{$baseURL}/assets/js/orderform.js"></script>
<script src="{$baseURL}/assets/js/contactform.js"></script>

{if isset($site) && $site=="orderform"}
<script src="{$baseURL}/assets/js/orderform_view.js"></script>
{/if}
<script src="{$baseURL}/assets/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore" rel="stylesheet"> 

</head>
<body>
<div class="cover" id="cover">
	<div class="intobasketcover">
		<div class="loadergif">
			<img src="{$baseURL}/assets/img/ajax_loader.gif"  />
			<div class="loadertext"></div>
		</div>
	</div>
</div>
<div id="main" class="{$site} {$activeNavItemURL}">
<nav class="navbar navbar-fixed-top" role="navigation" id="headerTop">
	<div class="container-fluid">
  	<div class="hidden-xs hidden-sm headerWidht headerHeight">
    	<div class="headerElementBox">
      	<div class="headerBrand">
        	<a href="{$baseURL}">Title</a>
        	<span class="slogan">Subtitle</span>
        </div>
       
        	<div class="clearfix" id="overflowHeader">
           	<div class="overflowHeader">
            	<span class="bold">Your advantages:</span>
              	<i class="mdi-navigation-check"></i>Top Products!&nbsp;
                <i class="mdi-navigation-check"></i>Best Style!
                <i class="mdi-navigation-check"></i>Top Price&nbsp;
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="container-fluid contHeadSecond">
    <div class="navbar navHead headerWidht">
    	<div class="navbar-header">
      	<a class="navbar-brand hidden-md hidden-lg" href="{$baseURL}">Title<i class="mdi-action-favorite"></i></a>
      </div>
      
      <div>
      	{if !empty($topnav)}
					<ul class="nav navbar-nav">
      		{foreach $topnav as $nav}
      				<li>
          			<a href="{$baseURL}{$nav['url']}">{$nav['name']} 
            		</a>
          		</li>
          {/foreach}
					</ul>	 
        {/if}
      </div>
    </div>
  </div>
  <div class="emotionimage">
			<img src="{$baseURL}assets/img/fraumitobst_small.jpg" />
		</div>
</nav>

{if isset($site) && $site=="detail"}

<div class="support">
	<div class="supportemail contactbutton">
		<span class="supportsign">
			<i class="fa fa-envelope" aria-hidden="true"></i>
		</span>
	</div>
</div>
{/if}

<div class="basketcontainer" style="display:none;">
 <a href="{$baseURL}orderform" class="getToShoppingBasket">
	<span class="carticon">
		<i class="fa-shopping-cart"></i>
	</span>
 	<span class="title">Shoppingbasket</span>
 	<div class="newline">
 		<span class="elementsinbasket small"></span>
 		<span class="basketprice small"></span>
 	</div>
 	 </a>
</div>
<div class="basketmessage" id="basketmessage" style="display:none;">
	<div id="basketmessageclose" class="basketmessageclose"></div>
	<i class="basketmessagecheck"></i>
	<div class="basketmessagetext success" style="display:none;"><span id="basketmessagearticle"></span></div>
	<div class="basketmessagetext fail" style="display:none;"><span id="basketmessagearticle"></span></div>
</div>

 
<script type="text/javascript">
	$( document ).ready(function() {	
		{if isset($site) && $site=="orderform"}
			$('.basketcontainer').hide();
		{else}
			$('.elementsinbasket').html(SB$().showItemCount());
			$('.basketprice').html('&euro; ' + SB$().getSubtotal().toFixed(2));			
		{/if}					
	});
</script>
	