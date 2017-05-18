{assign var="site" value="overview"}
{include file='header.tpl'}

<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row">
  	{* breadcrums *}				
			<ol class="breadcrumb">
				<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
					<a itemprop="url" title="Startseite" href="{$baseURL}">
						<span itemprop="title">Startseite</span>
					</a>
				</li>
				<li class="active">
					<i>{$activeNavItem}</i>
				</li>
			</ol>
		{* /breadcrums *}
		{if $activeNavItemURL == "vitamine"}
     
      <div class="col-md-12 col-xs-12 contentarea">
      	<h1>{$activeNavItem}</h1>
      	
				{* categorytext *}
        
        {* Produkte oder Kategorieübersicht *}
        	
        {assign var="index" value=0}
        {foreach $products as $product}   

        
		   		{assign var="index" value=$index+1}
      	{/foreach}			
    	</div>
    	
    	<div class="longinfo">
				{$longtext}
			</div>
    	
  	</div>	
  	<script type="text/javascript">
  		$( document ).ready(function() { 				
  			window.onresize = function(e) {
  			calcTeaserSize();
  			}
  			calcTeaserSize();
  				
  			function calcTeaserSize(){ 		
  				var contSize = parseInt($("#main").css('width'));	
  									
  				if(contSize < 1200){
  					var newSize = contSize - 1200;
  					$("#main.overview").css('background-position-x',newSize + 'px');
  					$("#main.overview").css('background-size','inherit');
  				}  
  				else{
  					$("#main.overview").css('background-position-x','0px');
  					$("#main.overview").css('background-size','contain');
  				}		
  			}
  		});		
  </script>
  	{include file='footer.tpl'}
	</div>
		
</div>
