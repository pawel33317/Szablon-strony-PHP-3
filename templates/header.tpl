<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->     
	<link rel="stylesheet" href="templates/style.css" />
	<link rel="Shortcut icon" href="{$favi}" />
	<title>{$tytulStrony}</title>
</head>
<body>
	<header class="main">
		{section name=logo loop=$logo}
		<img src="{$logo[logo]}" alt=""/>
		{/section}
	</header>
	<section class="main">
		{section name=share loop=$share}
		<img src="{$share[share]}" alt=""/>
		{/section}
	</section>
	<div class="clear"></div>
	<nav class="main">
        <ul id="nav">
			{foreach item=menui  from=$menu }
			<li><a {if $menui.sub == true}class="hsubs"{/if}href="{$menui.link}">{$menui.title}</a>
				{if $menui.sub == true}
				<ul class="subs">
					{section name=smenu loop=$menui.submenu}
					<li><a href="{$menui.sublink[smenu]}">{$menui.submenu[smenu]}</a></li>
					{/section}
				</ul>
				{/if}
			</li>
			{/foreach}
		</ul>
	</nav>
	<div class="clear"></div>