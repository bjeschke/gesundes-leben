{include file='header.tpl'}

<div id="wrapper" class="well wellCat">
	<div class="row">
  	<div class="col-xs-12">	{* breadcrums *}
    	<div  class="breadcrumb clearfix" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
  			<a href="{$baseURL}" itemprop="url">
      		<span itemprop="title">Startseite</span>
  			</a>
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
  			<span class="breadSlash">&nbsp;&nbsp;/&nbsp;&nbsp;</span>
				<span class="breadActive"></span>
			</div>
    </div>	{* /breadcrums *}
		
		<div class="longinfo">
			{$longtext}
		</div>
	</div>


{include file='footer.tpl'}
