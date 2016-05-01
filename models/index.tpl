<!DOCTYPE html>
<html>
<head>
{include file='templates/head.tpl'}
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
	{include file=$container} 
  </section>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
<
