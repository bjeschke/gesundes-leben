{assign var="site" value="site"}
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
				<i>{$siteName}</i>
			</li>
		</ol>
    {* /breadcrums *}
		<div class="longinfo">
			{$longtext}
		</div>
	</div>


{include file='footer.tpl'}
