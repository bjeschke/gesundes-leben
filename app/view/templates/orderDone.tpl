{assign var="site" value="orderdone"}

{include file='header.tpl'}

<div id="wrapper" class="well wellCat">
	<div class="row">
  	<div class="col-xs-12">	
  	
  	{* breadcrums *}    
    <ol class="breadcrumb">
			<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
				<a itemprop="url" title="Startseite" href="{$baseURL}">
					<span itemprop="title">Startseite</span>
				</a>
			</li>
			<li class="active">
				<i>Bestellbest&auml;tigung</i>
			</li>
		</ol>
		{* /breadcrums *}
		<h1 class="orderview">Bestellbest&auml;tigung</h1>
		<div class="userdatabox">
			<dl class="userdata">
				<dt class="title">Lieferadresse:</dt>
				<dt>Anrede</dt>
				<dd id="summary_anrede">{$user["title"]}</dd>
				<dt>Name</dt>
				<dd id="summary_name">{$user["firstname"]} {$user["lastname"]}</dd>
				<dt>Adresse</dt>
				<dd id="summary_adresse">{$user["street"]} {$user["streetNumber"]}<br /> {$user["plz"]} {$user["town"]}<br /> {$user["country"]}</dd>
				<dt>Email</dt>
				<dd id="summary_email">{$user["email"]}</dd>
			</dl>
			<div class="orderdonemessage">	
				Vielen Dank f&uuml;r Ihre Bestellung.<br />
				Ihre Artikel werden schnellst m&ouml;glichst versandt.<br />
				Die Rechnung wird Ihnen mit Ihrer Bestellung zugesandt. <br />
				Bitte begleichen Sie diese innerhalb von 14 Tagen.
			</div>
		</div>
		
		<div class="shippingbyviabiona orderdone">Der Versand erfolgt direkt durch Viabiona Ltd.</div>
		<table id="warenkorb" class="warenkorb">
    	<thead>
    		<tr>
    			<th colspan="2" align="left">Artikel</th>
    			<th>Anzahl</th>
    			<th>Einzelpreis</th>
    			<th class="finalprice">Gesamtpreis</th>
    	</thead>
    	<tbody>
    	 {foreach from=$order item=product}
    			<tr>
						<td class="imgcont"><img src="{$baseURL}assets/productimages/{$product['image']}"></td>
						<td class="desccontainer">
							<div class="itemname">{$product["name"]}</div>
							<div class="iteminfo1">{$product["productinfo1"]}</div>
							<div class="iteminfo2">{$product["productinfo2"]}</div>
							<div class="iteminfo3">{$product["productinfo3"]}</div>
						</td>
						<td class="amountcontainer">{$product["amount"]}</td>
						<td class="singleprice">
							<span class="price">&euro; {$product["price"]}</span>
						</td>
						<td class="totalprice">
							<span class="price">&euro; {$product["totalprice"]}</span>
						</td>
					</tr>
				{/foreach}
    	</tbody>
    	<tfoot>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3" class="small">Enthaltene MwSt. 7%</td>
    			<td class="small"><span id="mwst" class="mwst footvalue">&euro; {$tax}</span></td>
    		</tr>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3">Zwischensumme</td>
    			<td><span id="subtotal" class="shippingcost footvalue">&euro; {$subtotal}</span></td>
    		</tr>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3">zzgl. Versandkosten</td>
    			<td><span id="shippingcost" class="shippingcost footvalue">&euro; {$shippingCost}</span></td>
    		</tr>
    		<tr>
    			<td class="imgcont finalprice_td">&nbsp;</td>
    			<td colspan="3" class="finalprice_td">Gesamt</td>
    			<td class="finalprice_td"><span id="finalprice" class="finalprice footvalue">&euro; {$finalprice}</span></td>
    		</tr>
    	</tfoot>
    </table>
  </div>
</div>
<script type="text/javascript">
	SB$().clearBasket(function(){
		$('#basketcontainer').show();
	});
</script>

{include file='footer.tpl'}
