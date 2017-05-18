{assign var="site" value="orderform"}

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
			<li class="active">
				<i>Warenkorb</i>
			</li>
		</ol>
        
    {* /breadcrums *}
    <form action="/orderDone" method="post" />
	<div id="page1">
		<h1 class="orderview">Warenkorb</h1>
		<div id="emptyWarenkorbMsg" class="emptyWarenkorbMsg">
			<span>Ihr Warenkorb ist leer</span>
		</div>
   	<table id="warenkorb" class="warenkorb">
    	<thead>
    		<tr>
    			<th colspan="2" align="left">Artikel</th>
    			<th width="15%">Anzahl</th>
    			<th width="15%">Einzelpreis</th>
    			<th width="15%"class="finalprice">Gesamtpreis</th>
    	</thead>
    	<tbody></tbody>
    	<tfoot>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3" class="small">Enthaltene MwSt. 7%</td>
    			<td class="small"><span id="mwst" class="mwst footvalue"></span></td>
    		</tr>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3">Zwischensumme</td>
    			<td><span id="subtotal" class="shippingcost footvalue"></span></td>
    		</tr>
    		<tr>
    			<td class="imgcont">&nbsp;</td>
    			<td colspan="3">
    				<span id="addshippingcost">zzgl. Versandkosten</span>
    				<span id="noshippingcost">keine Versandtkosten</span>
    			</td>
    			<td><span id="shippingcost" class="shippingcost footvalue"></span></td>
    		</tr>
    		<tr>
    			<td class="imgcont finalprice_td">&nbsp;</td>
    			<td colspan="3" class="finalprice_td">Gesamt</td>
    			<td class="finalprice_td"><span id="finalprice" class="finalprice footvalue"></span></td>
    		</tr>
    	</tfoot>
    </table>
		<div class="payinfo">
			Nach der Bestellung erhalten Sie die Ware und k&ouml;nnen bequem per Rechnung bezahlen.<br />
			Geben Sie hier Ihre Adresse an, an die wir Ihre Bestellung schicken sollen.
		</div>
		<div class="formcontainer orderform">
		
		<div class="row">
			<div class="element col-md-6 col-sm-6">
				<label>Anrede</label>
				<span class="error" id="error_firstname" style="display:none;">Bitte w&auml;hle eine Anrede aus.</span>
				<select id="input_anrede" name="title">
					<option value="" selected="selected">Bitte wählen</option>
					<option value="herr">Herr</option>
					<option value="frau">Frau</option>
				</select>
			</div>

			<div class="element col-md-6 col-sm-6">
				<label>Land</label>
				<select id="input_country" name="country">
					<option value="BE" >Belgien</option>
					<option value="BA" >Bosnien und Herzegowina</option>
					<option value="BG" >Bulgarien</option>
					<option value="DE" selected="selected">Deutschland</option>
					<option value="DK" >Dänemark</option>
					<option value="EE" >Estland</option>
					<option value="FI" >Finnland</option>
					<option value="FR" >Frankreich</option>
					<option value="GI" >Gibraltar</option>
					<option value="GR" >Griechenland</option>
					<option value="GL" >Grönland</option>
					<option value="IE" >Irland</option>
					<option value="IS" >Island</option>
					<option value="IT" >Italien</option>
					<option value="HR" >Kroatien</option>
					<option value="LV" >Lettland</option>
					<option value="LI" >Liechtenstein</option>
					<option value="LT" >Litauen</option>
					<option value="LU" >Luxemburg</option>
					<option value="MT" >Malta</option>
					<option value="MC" >Monaco</option>
					<option value="NO" >Norwegen</option>
					<option value="PL" >Polen</option>
					<option value="PT" >Portugal</option>
					<option value="RO" >Rumänien</option>
					<option value="SE" >Schweden</option>
					<option value="CH" >Schweiz</option>
					<option value="SK" >Slowakei (Slowakische Republik)</option>
					<option value="ES" >Spanien</option>
					<option value="CZ" >Tschechische Republik</option>
					<option value="HU" >Ungarn</option>
					<option value="GB" >United Kingdom</option>
					<option value="CY" >Zypern</option>
					<option value="AT" >Österreich</option>
				</select>
			</div>
		</div>
		
		<div class="row">								
			<div class="element col-md-6 col-sm-6">
				<label>Vorname</label>
				<span class="error" id="error_firstname" style="display:none;">Bitte gib deinen Vornamen an</span>
				<input type="text" name="firstname" id="input_firstname"/>
			</div>
			
			<div class="element col-md-6 col-sm-6 ">
				<label>Nachname</label>
				<span class="error" id="error_lastname" style="display:none;">Bitte gib deinen Nachnamen an</span>
				<input type="text" name="lastname" id="input_lastname" />
			</div>
		</div>
		
		<div class="row">
			<div class="element col-md-4 col-sm-4">
				<label>Straße</label>
				<span class="error" id="error_street" style="display:none;">Bitte gib deine Stra&szlig;e an</span>
				<input type="text" name="street" id="input_street" />
			</div>
			
			<div class="element col-md-2 col-sm-2">
				<label>Nr.</label>
				<span class="error" id="error_streetNumber" style="display:none;">und die Nummer?</span>
				<input type="number" name="number" id="input_streetNumber"/>
			</div>
			
			<div class="element col-md-2 col-sm-2">
				<label>PLZ</label>
				<span class="error" id="error_plz" style="display:none;">Wie ist deine PLZ?</span>
				<input type="number" name="plz" id="input_plz" />
			</div>
			
			<div class="element col-md-4 col-sm-4">
				<label>Ort</label>
				<span class="error" id="error_town" style="display:none;">Bitte gib deinen Wohnort an</span>
				<input type="text" name="town" id="input_town" />
			</div>			
		</div>
		
		<div class="row">
			
			<div class="element col-md-6 col-sm-6">
				<label>E-Mail</label>
				<span class="error" id="error_email" style="display:none;">Bitte gib deine Email Adresse an</span>
				<input type="email" name="email" id="input_email" />
			</div>
			
			<div class="element col-md-6 col-sm-6">
				<label>Geburtsdatum</label>
				<input type="text" name="birthday" id="input_birthday" />
			</div>			
		</div>
				
		<input type="button" value="weiter" id="tosummary" />
		</div>
		<div class="payinfo">
			Beim n&auml;chsten Schritt k&ouml;nnen Sie Ihre Bestellung nochmal &uuml;berprüfen.
		</div>
	</div>
	<table>
		<tr class="itemtemplate" style="display:none;">
			<td class="imgcont"><img src=""></td>
			<td class="desccontainer">
				<div class="itemname"></div>
				<div class="iteminfo1 iteminfo"><span></span></div>
				<div class="iteminfo2 iteminfo"><span></span></div>
				<div class="iteminfo3 iteminfo"><span></span></div>
			</td>
			<td class="amountcontainer">
				<select>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>			
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
				<div class="amountval" style="display:none;"></div>
				<span class="trash fa fa-trash-o"></span>
			</td>
			<td class="singleprice">
				<span class="price"></span>
			</td>
			<td class="totalprice">
				<span class="price"></span>
			</td>
		</tr>
	</table>
</div>
<div id="page2" style="display:none;">
	<h1 class="orderview">Bestell&uuml;bersicht</h1>
	<div class="editorder" title="bearbeiten" id="editorder">
		<i class="editicon"></i>
	</div>
	<div class="userdatabox">
		<dl class="userdata">
			<dt class="title">Lieferadresse:</dt>
			<dt>Anrede</dt>
			<dd id="summary_anrede"></dd>
			<dt>Name</dt>
			<dd id="summary_name"></dd>
			<dt>Adresse</dt>
			<dd id="summary_adresse"></dd>
			<dt>Email</dt>
			<dd id="summary_email"></dd>
		</dl>
		<div class="orderdonemessage">	
			&Uuml;berpr&uuml;fen Sie hier nochmal Ihre Bestellung.<br />
			Sind sie mit Ihren Eingaben zufrieden, dann dr&uuml;cken Sie unten auf den Bestell-Button.
		</div>
	</div>
	<table id="artikeluebersicht" class="warenkorb"></table>
	
	<input type="hidden" value="" name="orderstring" id="orderstring">
	<div class="submitorderbox">
		<input type="submit" class="submitorder" value="Jetzt zahlungpflichtig bestellen" />
	</div>
	</form>
</div>

{include file='footer.tpl'}
	</div>
		
</div>
