<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-29 02:38:29
  from "/var/www/html/tli/templates/accueil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5723016576bb94_83573758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f5b0dda721b010df334713abfe5d747149539d3' => 
    array (
      0 => '/var/www/html/tli/templates/accueil.tpl',
      1 => 1461911249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5723016576bb94_83573758 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_rss')) require_once '/var/www/html/tli/lib/private/function.rss.php';
?>
<div class="jumbotron" style="margin-top:-20px;">
	<div class="container">
		<div class="col-sm-12 col-lg-12">
			<section>
			<div id="entete">
				<h1>L&apos;acupuncture c&apos;est bien pour les gens</h1>
				<p>oui c&apos;est tr&#232;s bien</p>
			</div>
			</section>

			<section>
			<div id="rss">
				<?php echo smarty_function_rss(array(),$_smarty_tpl);?>

			</div>
			</section>

		</div>
	</div>
</div>
<?php }
}
