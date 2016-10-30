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
		
		<div class="formcontainer">
			<div class="element">
				<label>Anrede</label>
				<select>
					<option>Bitte wählen</option>
					<option>Herr</option>
					<option>Frau</option>
				</select>
			</div>
			
			<div class="element">
				<label>Land</label>
				<select>
					<option value="BE" >Belgien</option>
					<option value="BA" >Bosnien und Herzegowina</option>
					<option value="BG" >Bulgarien</option>
					<option value="DE" selected="selected" >Deutschland</option>
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
			
			<div class="element">
				<label>Vorname</label>
				<input type="text" name="firstname" />
			</div>
			
			<div class="element">
				<label>Nachname</label>
				<input type="text" name="nachname" />
			</div>
			
			<div class="element">
				<label>Straße</label>
				<input type="text" name="street" />
			</div>
			
			<div class="element">
				<label>Nr.</label>
				<input type="text" name="number" />
			</div>
			
			<div class="element">
				<label>PLZ</label>
				<input type="text" name="plz" />
			</div>
			
			<div class="element">
				<label>Ort</label>
				<input type="text" name="ort" />
			</div>
			
			<div class="element">
				<label>E-Mail</label>
				<input type="text" name="ort" />
			</div>
			
			<div class="element">
				<label>Geburtsdatum</label>
				<input type="text" name="birthday" />
			</div>

		</div>
</div>


{include file='footer.tpl'}
