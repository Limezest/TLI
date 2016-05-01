<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-30 16:27:16
  from "C:\wamp64\www\TLI\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5724dce49de327_71044359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '338496788cb9003334d16ec2a36b60bfae6e41cd' => 
    array (
      0 => 'C:\\wamp64\\www\\TLI\\templates\\header.tpl',
      1 => 1462033172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/signout.tpl' => 1,
  ),
),false)) {
function content_5724dce49de327_71044359 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Afficher le menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/tli/">L&apos;acupuncture</a>
	  </div>

	  <!-- Collect the nav links, forms, and other content for toggling -->
	  <div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/tli/">Accueil</a></li>
				<li class="dropdown">
					<a href="/tli/" class="dropdown-toggle" data-toggle="dropdown">Recherche <b class="caret"></b></a>
					<ul class="dropdown-menu">
						
							<li><a href="/tli/search">Recherche par mots-cl&#233;s</a></li>
						
						<li><a href="/tli/advancedsearch">Recherche par filtres</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if ($_smarty_tpl->tpl_vars['connected']->value == 0) {?>
					<a id="navbar--signin" class="btn btn-sm navbar-btn navbar--sign-btn" href="/tli/signin">Se connecter</a>
					<a id="navbar--signup" class="btn btn-sm navbar-btn navbar--sign-btn" href="/tli/signup">S'enregistrer</a>
				<?php } else { ?>
					<?php $_smarty_tpl->_subTemplateRender("file:templates/signout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
				<?php }?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
<?php }
}
