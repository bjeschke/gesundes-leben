{assign var="site" value="detail"}
{include file='header.tpl'}

<div id="wrapper" class="well wellCat">
	<div class="row">
		{* breadcrums *}		
		<ol class="breadcrumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a itemprop="url" title="Startseite" href="{$baseURL}">
					<span itemprop="title">Startseite</span>
				</a>
			</li>
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<i itemprop="title">
					<a href="{$baseURL}{$navCategory}" target="_self" title="{$category}" itemprop="url">{$category}</a>
				</i>
			</li>
			<li class="active">
				<i>{$product['name']}</i>
			</li>
		</ol>
		{* /breadcrums *}

		<div class="productcontainer">
			<div class="imagebox">
				 <img src="{$baseURL}assets/productimages/{$product['image']}" alt="{$product['name']}" />
				 <a href="#" class="shop directorder underimage">Jetzt bestellen</a>
			</div>
		
			<div class="productinfobox">
				<div class="infoboxinside">
					<h1 id="name_{$product['id']}" class="producttitle">{$product['name']}</h1>		
					<div class="topstarcont" style="display:none;">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-half" aria-hidden="true"></i>
					</div> 
					<div class="infocontainer">
						<div class="productinfo"><i class="check"></i><span>{$product['productinfo1']}</span></div>		
						<div class="productinfo"><i class="check"></i><span>{$product['productinfo2']}</span></div>		
						<div class="productinfo"><i class="check"></i><span>{$product['productinfo3']}</span></div>		
					</div>
					<div class="pricecontainer">
						<div class="price">{$product['price']|replace:".":","} &euro;</div>		
						<div class="kapseln">1 Pckg. = {$product['kapseln']}</div>
						<div class="kapseln">{$product['supply']}</div>
					</div>				
					<div class="orderinfo">Bequem per Rechnung bezahlen.</div>
					<div class="rabatt">
						
					</div>
					
					<div class="boxline">

						</div>
						<div class="buttoncontainer direct" style="display:none;">
							<a href="#" class="shop directorder">Jetzt bestellen</a>						
						</div>
						<div class="buttoncontainer">
							<a href="#" class="shop addToShoppingBasket" id="product_{$product['id']}">in den Warenkorb</a>			
						</div>
						</div>
						</div>
				</div>
			</div>
			<div class="longinfo">
				{$longtext}
				<div class="fb-like" data-href="http://{$ownURL}" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
			</div>
			<div class="contactbutton" style="display:none;">Kontakt</div>
			{include file='contactform.tpl'}
		</div>
	  	
	<script type="text/javascript">
		$( document ).ready(function() {
			$(window).scroll(function(){
				if(parseInt($('#wrapper').css('width').replace('px','')) > 900)
				{
					if($(window).scrollTop() > 230)					
						$('.imagebox').addClass('scroll');					
					else						
						$('.imagebox').removeClass('scroll');						
				}
			});	
			
			if($('.producttitle').html() == "Vitamin B-Komplex")
			{
				$('.producttitle').addClass('short');
				$('.topstarcont').show();
			}
								
		}); 
		
	</script>

{include file='footer.tpl'}
