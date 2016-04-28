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
						{*if $connected eq 1*}
							<li><a href="/tli/search">Recherche par mots-cl&#233;s</a></li>
						{*/if*}
						<li><a href="/tli/advancedsearch">Recherche par filtres</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				{if $connected eq 0 }
					<a id="navbar--signin" class="btn btn-sm navbar-btn navbar--sign-btn" href="/tli/signin">Se connecter</a>
					<a id="navbar--signup" class="btn btn-sm navbar-btn navbar--sign-btn" href="/tli/signup">S'enregistrer</a>
				{else}
					{include file="templates/signout.tpl"} 
				{/if}
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
