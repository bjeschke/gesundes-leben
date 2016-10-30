{include file='header.tpl'}

<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row">
  	
    	<div class="col-xs-12">	{* breadcrums *}
      	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
    			<a href="{$baseURL}" itemprop="url">
        		<span itemprop="title">Startseite</span>
    			</a>
    			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
					<span class="breadActive">{$activeNavItem}</span>
				</div>
      </div>	{* /breadcrums *}
      
      <div class="col-md-12 col-xs-12">
      	<h1>{$activeNavItem}</h1>
      	
				{* categorytext *}
        
        {* Produkte oder Kategorieübersicht *}
        	
        {foreach $products as $product}      	
 		   		<div class="itembox" col-md-6 col-xs-12>
			   		<div class="imagebox">
					 		<img src="{$baseURL}assets/productimages/{$product['image']}" />
			   		</div>
				 		<div class="infobox">
			   			<div class="name">{$product['name']}</div>
			   	 		<div class="prodinfo"></div>
			   	 		<div class="price"></div>
			   	 		<a href="{$product['shopurl']}" class="button">zum shop</a>
							<a href="{$baseURL}{$product['url']}" class="button">zum Produkt</a>
							<div class="productinfo"><span>{$product['productinfo1']}</span></div>
							<div class="productinfo"><span>{$product['productinfo2']}</span></div>
							<div class="productinfo"><span>{$product['productinfo3']}</span></div>
						</div>
		   		</div>
      	{/foreach}
        
        {* -----------------  *}
        
        {* Pagnation *}
        
        
        
        {* Lange Beschreibungen *}
                      
			
    	</div>
  	</div>	
  	{include file='footer.tpl'}
	</div>
		
</div>
