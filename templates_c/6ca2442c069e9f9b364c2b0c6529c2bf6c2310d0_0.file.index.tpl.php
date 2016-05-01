<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-24 09:13:16
  from "/var/www/html/tli/models/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56f3e7ec84a571_23126595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca2442c069e9f9b364c2b0c6529c2bf6c2310d0' => 
    array (
      0 => '/var/www/html/tli/models/index.tpl',
      1 => 1458824572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/head.tpl' => 1,
  ),
),false)) {
function content_56f3e7ec84a571_23126595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<?php $_smarty_tpl->_subTemplateRender("file:templates/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>

  <header>
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
    		<a class="navbar-brand" href="#">L&apos;acupuncture</a>
    	  </div>

    	  <!-- Collect the nav links, forms, and other content for toggling -->
    	  <div class="collapse navbar-collapse navbar-ex1-collapse">
    		<ul class="nav navbar-nav">
    		  <li><a href="/">Accueil</a></li>
    		  <li class="dropdown">
      			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Recherche <b class="caret"></b></a>
      			<ul class="dropdown-menu">
      			  <li><a href="#">Recherche simple</a></li>
      			  <li><a href="#">Recherche par mots-cl&#233;s</a></li>
      			</ul>
    		  </li>
    		</ul>
    		 <ul class="nav navbar-nav navbar-right">
          <a id="navbar--signin" class="btn btn-sm navbar-btn navbar--sign-btn" href="#">Se connecter</a>
          <a id="navbar--signup" class="btn btn-sm navbar-btn navbar--sign-btn" href="#">S'enregistrer</a>
         </ul>
    		</div><!-- /.navbar-collapse -->
    	</div>
    </nav>
  </header>
  <section >
      <div class="jumbotron" style="margin-top:-20px;">
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-12 col-lg-12">
  						<h1>L&apos;acupuncture c&apos;est bien pour les gens</h1>
  						<p>oui c&apos;est tr&#232;s bien</p>
  					</div>
  				</div>
  			</div>
      </div>
  </section>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['container']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
  </section>

  <?php echo '<script'; ?>
 src="http://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
<
<?php }
}
