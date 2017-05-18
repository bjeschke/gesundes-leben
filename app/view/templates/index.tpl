{assign var="site" value="start"}
{include file='header.tpl'}
<div class="container-fluid start">
	<div class="well wellCat home" id="wrapper">
  	<div class="row">
			<div class="col-md-12 col-xs-12 contentarea">

			</div>
		{include file='footer.tpl'}
	</div>
</div>
<script type="text/javascript">
  		$( document ).ready(function() {
  				window.onresize = function(e) {	
  					calcTeaserSize();		
  				}
  			
  				calcTeaserSize();
  				
  				function calcTeaserSize()
  				{ 		
  					var contSize = parseInt($("#main").css('width'));	
  									
  					if(contSize < 1200)
  					{
  						var newSize = contSize - 1000;
  						$("#main.start").css('background-position-x',newSize + 'px');
  						//$("#main.start").css('background-size','inherit');
  					}  
  					else
  					{
  						$("#main.start").css('background-position-x','0px');
  						$("#main.start").css('background-size','cover');
  					}		
  				}
  		});
</script>  		
