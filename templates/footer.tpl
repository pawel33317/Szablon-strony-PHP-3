	<footer class="main">
		{section name=id loop=$footerlnk.tytul}
		<a href="{$footerlnk.link[id]}">{$footerlnk.tytul[id]}</a>{if not $smarty.section.id.last} | {/if}
		{/section}
		<br>
		{$footer}
	</footer>
</body>
</html>