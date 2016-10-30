{include file='header.tpl'}

<div id="wrapper" class="well wellCat">
	<div class="row">
  	<div class="col-xs-12">	{* breadcrums *}
    	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
  			<a href="{$baseURL}" itemprop="url">
      		<span itemprop="title">Startseite</span>
  			</a>
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
  			<a href="{$baseURL}{$navCategory}" itemprop="url">
      		<span itemprop="title">{$category}</span>
  			</a>	
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
				<span class="breadActive">{$product['name']}</span>
			</div>
    </div>	{* /breadcrums *}
		
		<div class="productcontainer">
			<div class="imagebox">
				 <img src="{$baseURL}assets/productimages/{$product['image']}" />
			</div>
		
			<div class="productinfobox">
			<div class="infoboxinside">
				<h1>{$product['name']}</h1>
		 
				<div class="infocontainer">
					<div class="productinfo">{$product['productinfo1']}</div>		
					<div class="productinfo">{$product['productinfo2']}</div>		
					<div class="productinfo">{$product['productinfo3']}</div>		
				</div>
				<div class="price">{$product['price']} &euro;</div>		
				<div class="kapseln">1 Pckg. = {$product['kapseln']} Kapseln</div>
				<div class="vorteil-box">
					<img border="0" alt="Gentechnikfrei" src="{$baseURL}assets/img/Gentechnikfrei.jpg">
					<img border="0" alt="Glutenfrei" src="{$baseURL}assets/img/Glutenfrei.jpg">
					<img border="0" alt="Lactosefrei" src="{$baseURL}assets/img/Lactosefrei.jpg">
					<img border="0" alt="VEGI" src="{$baseURL}assets/img/Vegy.jpg">
				</div>
			</div>
				
				<div class="buttoncontainer">
					<a class="shop" href="{$product['shopurl']}">zum Shop</a>	
				</div>

			</div>
		</div>
		<div class="longinfo">
			{$longtext}
		</div>
	</div>


{include file='footer.tpl'}
