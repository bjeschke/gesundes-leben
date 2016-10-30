{include file='header.tpl'}

<div class="container-fluid">
	<div class="well wellCat" id="wrapper">
  	<div class="row addnewitem">
    	<div class="col-xs-12">
      	<form method="post">
      		<div class="line">
      			<label for="category">Kategorie:</label>
      			<select name="category" id="category">
      				<option value="vitamine">Vitamine</option>
      				<option value="mineralsaeuren">Mineralsaeuren</option>
      				<option value="fettsaeuren">Fettsaeuren</option>
      				<option value="sonstige">Sonstige</option>
      			</select>
      		</div>
      		<div class="line">
      			<label for="name">Name:</label>
      			<input type="text" name="name" id="name" />
      		</div>
      		<div class="line">
      			<label for="url">Url:</label>
      			<input type="text" name="url" id="url" />
      		</div>
      		<div class="line">
      			<label for="image">Image:</label>
      			<input type="text" name="image" id="image" />
      		</div>
      		<div class="line">
      			<label for="productinfo1">Produkt Info 1:</label>
      			<input type="text" name="productinfo1" id="productinfo1" />
      		</div>
      		<div class="line">
      			<label for="productinfo2">Produkt Info 2:</label>
      			<input type="text" name="productinfo2" id="productinfo2" />
      		</div>
      		<div class="line">
      			<label for="productinfo3">Produkt Info 3:</label>
      			<input type="text" name="productinfo3" id="productinfo3" />
      		</div>
      		<div class="line">
      			<label for="shopurl">Shopurl:</label>
      			<input type="text" name="shopurl" id="shopurl" />
      		</div>
      		<div class="line">
      			<input type="submit" name="submit" id="submit" />
      		</div>
      	</form>
    	</div>
  	</div>
	</div>
</div>