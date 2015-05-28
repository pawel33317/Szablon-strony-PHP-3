<?php /* Smarty version Smarty-3.1.13, created on 2013-09-04 19:14:15
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21025516200657fc309-13306189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1366240200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21025516200657fc309-13306189',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51620065859888_62041867',
  'variables' => 
  array (
    'menu' => 0,
    'imenulewe' => 0,
    'gdzie' => 0,
    'gdzielnk' => 0,
    'article' => 0,
    'pop' => 0,
    'logowanie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51620065859888_62041867')) {function content_51620065859888_62041867($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>

	<!--<div id="uwaga1">Uwaga</div>-->
	<div id="artasi">
			<div style="width:165px; float:left;padding-left:0px;">
			<aside class="main"> 
				<div class="side-nav">
					<?php  $_smarty_tpl->tpl_vars['imenulewe'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imenulewe']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imenulewe']->key => $_smarty_tpl->tpl_vars['imenulewe']->value){
$_smarty_tpl->tpl_vars['imenulewe']->_loop = true;
?>
					<a <?php if ($_smarty_tpl->tpl_vars['imenulewe']->value['act']==true){?>class="greenselect"<?php }?> <?php if ($_smarty_tpl->tpl_vars['imenulewe']->value['act']==false){?>class="green"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['imenulewe']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['imenulewe']->value['title'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['imenulewe']->value['sub']==true){?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['name'] = 'smenu';
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['imenulewe']->value['submenu']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['smenu']['total']);
?>
							<a <?php if ($_smarty_tpl->tpl_vars['imenulewe']->value['subact'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']]==true){?>class="orangeselect"<?php }?><?php if ($_smarty_tpl->tpl_vars['imenulewe']->value['subact'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']]==false){?> class="orange"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['imenulewe']->value['sublink'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['imenulewe']->value['submenu'][$_smarty_tpl->getVariable('smarty')->value['section']['smenu']['index']];?>
</a>
							<?php endfor; endif; ?>
						<?php }?>
					<?php } ?>
				</div>
			</aside>
		</div>
		<article class="main">
			<section id="adres">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['gdzie']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['gdzielnk']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['gdzie']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['id']['last']){?> --> <?php }?>
				<?php endfor; endif; ?>
			</section>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['name'] = 'idarticle';
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['article']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['idarticle']['total']);
?>
			<header>
				<div class="ahead1">
					<img src="img/tytad.png" alt=""/>
				</div>
				<div class="ahead2">
					<div class="tytulart"><a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a></div>
				</div>
				<div class="titledetails">
					data:<?php echo $_smarty_tpl->tpl_vars['article']->value['data'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
 | autor: 
					<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['autorl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['autor'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a> | kategoria: 
					<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['kategl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['kateg'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
				</div>
			</header>
			<section class="article-content">
				<p><?php echo $_smarty_tpl->tpl_vars['article']->value['tresc'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"> Czytaj więcej</a></p>
			</section>
			<footer class="fart">
				<img src="img/livejournal.png" alt=""/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['komentl'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['koment'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
				<img src="img/wykop.png" alt=""/>
				<a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['ocenal'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
">ocena: <?php echo $_smarty_tpl->tpl_vars['article']->value['ocena'][$_smarty_tpl->getVariable('smarty')->value['section']['idarticle']['index']];?>
</a>
			</footer>
			<div class="clear"></div>
			<?php endfor; endif; ?>
		</article>
		<aside class="main" "> 
			<form action="index.html" method="get" class="searchform">
				<input type="text" name="s" value="Szukaj..." onblur="if(this.value.length == 0) this.value='Szukaj...';" onclick="if(this.value == 'Szukaj...') this.value='';" id="search-text" class="search" />
				<button id="search-button" tabindex="2" type="submit" class="search-btn">GO</button>
			</form>
		</aside>
		<aside class="main">
			<h1>POPULARNE</h1>
			<div class="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pop']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['pop']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['pop']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><br>
				<?php endfor; endif; ?>
			</div>
		</aside>
		<aside class="main logowanie">
			<h1>LOGOWANIE</h1>
			<img src="img/icons/Profile.png" alt="" />
			<br>Zalogowany:
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["userl"];?>
"><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["user"];?>
</a>
			<br>Ranga:
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["rangal"];?>
"><?php echo $_smarty_tpl->tpl_vars['logowanie']->value["ranga"];?>
</a>
			<div id="log">
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["wyloguj"];?>
">Wyloguj</a> | 
				<a href="<?php echo $_smarty_tpl->tpl_vars['logowanie']->value["panel"];?>
">Panel</a>
			</div>
		</aside>
		<aside class="main">
			<h1>NOWE</h1>
			<div class="lista">
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['name'] = 'id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pop']->value['tytul']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['id']['total']);
?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['pop']->value['link'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['pop']->value['tytul'][$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
</a><br>
				<?php endfor; endif; ?>
			</div>
		</aside>
		<div class="clear"></div>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>