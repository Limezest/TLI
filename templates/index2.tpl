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

	<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Headings</div>
					<div class="panel-body">
						<h1 class="page-header">Page Header <small>With Small Text</small></h1>

						<h1>This is an h1 heading</h1>
						<h2>This is an h2 heading</h2>
						<h3>This is an h3 heading</h3>
						<h4>This is an h4 heading</h4>
						<h5>This is an h5 heading</h5>
						<h6>This is an h6 heading</h6>
					</div>
                </div>

                <div class="panel panel-default" id="tables">
                    <div class="panel-heading">Tables
                    </div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Tables</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>1</td>
								<td>Michael</td>
								<td>Are formatted like this</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Lucille</td>
								<td>Do you like them?</td>
							</tr>
							<tr class="success">
								<td>3</td>
								<td>Success</td>
								<td></td>
							</tr>
							<tr class="danger">
								<td>4</td>
								<td>Danger</td>
								<td></td>
							</tr>
							<tr class="warning">
								<td>5</td>
								<td>Warning</td>
								<td></td>
							</tr>
							<tr class="active">
								<td>6</td>
								<td>Active</td>
								<td></td>
							</tr>
							</tbody>
						</table>
						<table class="table table-striped table-bordered table-condensed">
							<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Tables</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>1</td>
								<td>Michael</td>
								<td>This one is bordered and condensed</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Lucille</td>
								<td>Do you still like it?</td>
							</tr>
							</tbody>
						</table>
					</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">Content formating</div>
						<div class="panel-body">
							<p class="lead">This is lead paragraph</p>
							<p>This is an <b>ordinary paragraph</b> that is <i>long enough</i> to wrap to <u>multiple lines</u> so that you can see how the line spacing looks.</p>

							<hr/>

							<p class="text-muted">Muted color paragraph.</p>
							<p class="text-warning">Warning color paragraph.</p>
							<p class="text-danger">Danger color paragraph.</p>
							<p class="text-info">Info color paragraph.</p>
							<p class="text-success">Success color paragraph.</p>

							<p><small>This is text in a <code>small</code> wrapper. <abbr title="No Big Deal">NBD</abbr>, right?</small></p>

							<hr/>

							<div class="row">
								<address class="col-lg-6">
									<strong>Twitter, Inc.</strong><br>
									795 Folsom Ave, Suite 600<br>
									San Francisco, CA 94107<br>
									<abbr title="Phone">P:</abbr> (123) 456-7890
								</address>
								<address class="col-lg-6">
									<strong>Full Name</strong><br>
									<a href="mailto:#">first.last@example.com</a>
								</address>
							</div>

							<hr/>

							<blockquote>Here's what a blockquote looks like in Bootstrap. <small>Use <code>small</code> to identify the source.</small>
							</blockquote>

							<hr/>

							<div class="row">
								<div class="col-lg-6">
									<ul>
										<li>Normal Unordered List</li>
										<li>Can Also Work
											<ul>
												<li>With Nested Children</li>
											</ul>
										</li>
										<li>Adds Bullets to Page</li>
									</ul>
								</div>
								<div class="col-6">
									<ol>
										<li>Normal Ordered List</li>
										<li>Can Also Work
											<ol>
												<li>With Nested Children</li>
											</ol>
										</li>
										<li>Adds Bullets to Page</li>
									</ol>
								</div>
							</div>

							<hr/>

							<pre>
		function preFormatting() {
			// looks like this;

			var something = somethingElse;

			return true;
		}</pre>
						</div>
					</div>
			</div>
        </div>

        <div class="panel panel-default" id="forms">
            <div class="panel-heading">Forms
            </div>
				<div class="panel-body">
					<form>
						<fieldset>
							<legend>Legend</legend>
							<div class="form-group">
								<label for="exampleInputEmail">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="exampleDisabledField">Disabled field</label>
								<input type="password" class="form-control" id="exampleDisabledField" placeholder="Disabled" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox">Check me out</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Option one is this and that&mdash;be sure to include why it's great
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Option two can be something else and selecting it will deselect option one
									</label>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-2">
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</fieldset>
					</form>
					<hr>
					<form class="form-inline">
						<input type="text" class="form-control input-lg" placeholder="Large input" style="width: 200px;">
						<input type="text" class="form-control" placeholder="Defaul size input" style="width: 200px;">
						<input type="password" class="form-control input-sm" placeholder="Small input" style="width: 200px;">
						<div class="checkbox">
							<label>
								<input type="checkbox">Remember me</label>
						</div>
						<button type="submit" class="btn btn-default">Sign in</button>
					</form>
					<hr>
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group has-warning">
							<label for="inputEmail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group has-error">
							<label for="inputEmail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group has-success">
							<label for="inputEmail" class="col-lg-2 control-label">Email</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputEmail" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" id="inputPassword" placeholder="Password">
								<div class="checkbox">
									<label>
										<input type="checkbox">Remember me</label>
								</div>
								<button type="submit" class="btn btn-default">Sign in</button>
							</div>
						</div>
					</form>
				</div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="panel panel-default" id="buttons">
                    <div class="panel-heading">Buttons
                    </div>
						<div class="panel-body">
							<p><!-- Standard gray button with gradient -->
								<button type="button" class="btn btn-default">Default</button>
								<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
								<button type="button" class="btn btn-primary">Primary</button>
								<!-- Indicates a successful or positive action -->
								<button type="button" class="btn btn-success">Success</button>
								<!-- Contextual button for informational alert messages -->
								<button type="button" class="btn btn-info">Info</button>
								<!-- Indicates caution should be taken with this action -->
								<button type="button" class="btn btn-warning">Warning</button>
								<!-- Indicates a dangerous or potentially negative action -->
								<button type="button" class="btn btn-danger">Danger</button>
								<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
								<button type="button" class="btn btn-link">Link</button>
							</p>
							<p>
								<button type="button" class="btn btn-primary btn-lg">Large button</button>
								<button type="button" class="btn btn-primary disabled">Disabled</button>
								<button type="button" class="btn btn-primary">Default button</button>
								<button type="button" class="btn btn-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
							</p>
						</div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="panel panel-default" id="images">
                    <div class="panel-heading">Images
                    </div>
					<div class="panel-body">
						<p><img  src="images/thumb.png" width="120" height="120" class="img-rounded">
							<img  src="images/thumb.png" width="120" height="120" class="img-circle">
							<img  src="images/thumb.png" width="120" height="120" class="img-thumbnail"></p>
					</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default clearfix" id="dropdowns">
                    <div class="panel-heading">Dropdowns</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-2">
									<div class="btn-group">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											Default <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
											<li class="dropdown-header">Dropdown header</li>
											<li class="disabled">
												<a tabindex="-1" href="#">Disabled</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Another action</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li>
												<a tabindex="-1" href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="btn-group pull-right">
										<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
											Pull right <span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
											<li class="dropdown-header">Dropdown header</li>
											<li class="disabled">
												<a tabindex="-1" href="#">Disabled</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Another action</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li>
												<a tabindex="-1" href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-2">
									<div class="btn-group dropup">
										<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
											Dropup <span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
											<li class="dropdown-header">Dropdown header</li>
											<li class="disabled">
												<a tabindex="-1" href="#">Disabled</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Another action</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li>
												<a tabindex="-1" href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>

								<div class="col-lg-2">
									<div class="btn-group dropup pull-right">
										<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
											Dropup pull right <span class="caret"></span>
										</button>
										<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu">
											<li class="dropdown-header">Dropdown header</li>
											<li class="disabled">
												<a tabindex="-1" href="#">Disabled</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Another action</a>
											</li>
											<li>
												<a tabindex="-1" href="#">Something else here</a>
											</li>
											<li class="divider"></li>
											<li>
												<a tabindex="-1" href="#">Separated link</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
					</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-default" id="input-groups">
                    <div class="panel-heading">Input Groups
                    </div>
						<div class="panel-body">

							<div class="input-group">
								<span class="input-group-btn">                <button class="btn btn-default" type="button">Go!</button>              </span><input type="text" class="form-control" placeholder="Username">
							</div>
							<p></p>
							<p></p>
							<div class="input-group">
								<input type="text" class="form-control input-large">
								<span class="input-group-addon input-large">.00</span>
							</div>
							<p></p>
							<p></p>
							<div class="input-group">
								<span class="input-group-addon">$</span><input type="text" class="form-control">
								<span class="input-group-addon">.00</span>
							</div>
							<p></p>
						</div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="panel panel-default" id="button-groups">
                    <div class="panel-heading">Button Groups</div>
						<div class="panel-body">
							<div class="btn-group">
								<button type="button" class="btn btn-default">Left</button>
								<button type="button" class="btn btn-success">Middle</button>
								<button type="button" class="btn btn-warning">Middle</button>
								<button type="button" class="btn btn-info">Middle</button>
								<button type="button" class="btn btn-danger">Middle</button>
								<button type="button" class="btn btn-default">Right</button>
							</div>
							<hr/>
							<div class="btn-group btn-group-justified">
								<a class="btn btn-default">Left</a>
								<a class="btn btn-success">Middle</a>
								<a class="btn btn-info">Middle</a>
								<a class="btn btn-danger">Middle</a>
								<a class="btn btn-warning">Middle</a>
								<a class="btn btn-default">Right</a>
							</div>
							<hr/>
							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-primary">
									<input type="checkbox"> Option 1
								</label>
								<label class="btn btn-primary">
									<input type="checkbox"> Option 2
								</label>
								<label class="btn btn-primary">
									<input type="checkbox"> Option 3
								</label>
							</div>
							<hr/>

							<div class="btn-group" data-toggle="buttons">
								<label class="btn btn-primary">
									<input type="radio" name="options" id="option1"> Option 1
								</label>
								<label class="btn btn-primary">
									<input type="radio" name="options" id="option2"> Option 2
								</label>
								<label class="btn btn-primary">
									<input type="radio" name="options" id="option3"> Option 3
								</label>
							</div>
						</div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Breadcrumb</div>
						<div class="panel-body">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li><a href="#">Library</a></li>
								<li class="active">Data</li>
							</ul>
						</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default" id="navs">
                    <div class="panel-heading">Navs
                    </div>
					<div class="panel-body">
						<ul class="nav nav-tabs">
						  <li class="active"><a href="#">Home</a></li>
						  <li><a href="#">Profile</a></li>
						  <li><a href="#">Messages</a></li>
						</ul>
                 <hr>
						<ul class="nav nav-pills">
							<li class="active">
								<a href="#">Home <span class="badge">42</span></a>
							</li>
							<li>
								<a href="#">About <span class="badge">42</span></a>
							</li>
							<li>
								<a href="#">Contacts</a>
							</li>
							<li class="disabled">
								<a href="#">Disabled</a>
							</li>
						</ul>
                   <hr>
						<ul class="nav nav-pills nav-stacked">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">About <span class="badge">42</span></a>
							</li>
							<li>
								<a href="#">Contacts <span class="badge pull-right">434</span></a>
							</li>
							<li class="disabled">
								<a href="#">Disabled</a>
							</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="navbar">
                <div class="panel panel-default">
                    <div class="panel-heading">Navbar
                    </div>
                   	<div class="panel-body">
					<nav class="navbar navbar-inverse" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#">Title</a>

					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex8-collapse">
					  <ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->

				  </nav>

					</div>
				</div>

				<div class="panel panel-default">
                    <div class="panel-heading">Navbar inverse
                    </div>
						<div class="panel-body">
							<nav class="navbar navbar-default" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand" href="#">Title</a>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex8-collapse">
								  <ul class="nav navbar-nav">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Link</a></li>
									<li><a href="#">Link</a></li>
								  </ul>
								</div><!-- /.navbar-collapse -->

							  </nav>
							  <hr>
							  <nav class="navbar navbar-inverse" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex8-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								  </button>
								  <a class="navbar-brand" href="#">Title</a>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex8-collapse">
								 	<a class="btn btn-default navbar-btn">Navbar Button</a>
								</div><!-- /.navbar-collapse -->

							  </nav>

						</div>


            </div>
        </div>
		</div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default" id="pagination">
                    <div class="panel-heading">Pagination
                    </div>
						<div class="panel-body">
                    <ul class="pagination" style="margin-right: 10px;">
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li class="disabled">
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                    <hr/>
                    <ul class="pagination pagination-lg">
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>
                    <hr/>
                    <ul class="pagination pagination-sm">
                        <li>
                            <a href="#">Prev</a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">Next</a>
                        </li>
                    </ul>

                    <ul class="pager">
                        <li>
                            <a href="#">&larr; Prev</a>
                        </li>
                        <li class="disabled">
                            <a href="#">Disabled</a>
                        </li>
                        <li>
                            <a href="#">Next &rarr;</a>
                        </li>
                    </ul>
                </div>
                <div class="panel panel-default" id="labels">
                    <div class="panel-heading">Labels and Badges</div>
						<div class="panel-body">
							<span class="label label-default">Default</span>
							<span class="label label-success">Success</span>
							<span class="label label-warning">Warning</span>
							<span class="label label-danger">Danger</span>
							<span class="label label-info">Info</span>
							<hr/>
							<a href="#">Inbox <span class="badge">42</span></a>
						</div>
                </div>
				</div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default" id="alerts">
                    <div class="panel-heading">Alerts
                    </div>
                    	<div class="panel-body">
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
                        </div>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
                        </div>
                        <div class="alert alert-warning">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                        </div>
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Heads up!</strong> This <a href="#" class="alert-link">alert needs your attention</a>, but it's not super important.
                        </div>
                        <div class="alert alert-block alert-info">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <h4>Warning!</h4>
                            <p>This is a block style alert.</p>
                        </div>
                    </div>
                </div>
                </div>
        </div>




        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Tooltips</div>
                    <p>&nbsp;</p>
						<div class="panel-body">
							<div class="tooltip top" style="opacity: 100; top: 57px;">
								<div class="tooltip-inner">Tooltip content</div>
								<div class="tooltip-arrow"></div>
							</div>
							<div class="tooltip left" style="opacity: 100; left: 200px; top: 57px;">
								<div class="tooltip-inner">Tooltip content</div>
								<div class="tooltip-arrow"></div>
							</div>
							<div class="tooltip right" style="opacity: 100; left: 400px; top: 57px;">
								<div class="tooltip-inner">Tooltip content</div>
								<div class="tooltip-arrow"></div>
							</div>
							<div class="tooltip bottom" style="opacity: 100; left: 600px; top: 57px;">
								<div class="tooltip-inner">Tooltip content</div>
								<div class="tooltip-arrow"></div>
							</div>
						</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Popovers</div>
						<div class="panel-body">
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<div class="popover left in" style="display: block; left: 40px; top: 45px;">
								<div class="arrow"></div>
								<h3 class="popover-title" style="display: block;">Header</h3>
								<div class="popover-content">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
							</div>

							<div class="popover top in" style="display: block; left: 340px; top: 45px;">
								<div class="arrow"></div>
								<h3 class="popover-title" style="display: block;">Header</h3>
								<div class="popover-content">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
							</div>

							<div class="popover right in" style="display: block; left: 640px; top: 45px;">
								<div class="arrow"></div>
								<h3 class="popover-title" style="display: block;">Header</h3>
								<div class="popover-content">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
							</div>
						</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default" id="progress">
                    <div class="panel-heading">Progress Bars
                    </div>
						<div class="panel-body">
							<div class="progress">
								<div class="progress-bar progress-bar-info" style="width: 20%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-success" style="width: 40%"></div>
							</div>
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-info" style="width: 50%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-success" style="width: 35%"></div>
								<div class="progress-bar progress-bar-warning" style="width: 20%"></div>
								<div class="progress-bar progress-bar-danger" style="width: 10%"></div>
							</div>
						</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default" id="media-object">
                    <div class="panel-heading">Media Object
                    </div>
						<div class="panel-body">
							<ul class="media-list">
								<li class="media">
									<a class="pull-left" href="#">
									   <img  class="media-object img-circle"  src="images/avafour.jpg"  style="width: 64px; height: 64px;">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading</h4>
										<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
										<!-- Nested media object -->
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object img-circle"  src="images/avafour.jpg"  style="width: 64px; height: 64px;">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Nested media heading</h4>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
												<!-- Nested media object -->
												<div class="media">
													<a class="pull-left" href="#">
														<img  class="media-object img-circle"  src="images/avafour.jpg"  style="width: 64px; height: 64px;">
													</a>
													<div class="media-body">
														<h4 class="media-heading">Nested media heading</h4>
														Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
													</div>
												</div>
											</div>
										</div>
										<!-- Nested media object -->
										<div class="media">
											<a class="pull-left" href="#">
												<img  class="media-object img-circle"  src="images/avafour.jpg" style="width: 64px; height: 64px;">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Nested media heading</h4>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
											</div>
										</div>
									</div>
								</li>
								<li class="media">
									<a class="pull-right" href="#">
										<img class="media-object img-circle"  src="images/avafour.jpg" style="width: 64px; height: 64px;">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Media heading</h4>
										Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
									</div>
								</li>
							</ul>
						</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default" id="list-groups">
            <div class="panel-heading">List Groups</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<ul class="list-group">
							   <li class="list-group-item">Cras justo odio<span class="badge">14</span></li>
							   <li class="list-group-item">Dapibus ac facilisis in</li>
							   <li class="list-group-item">Morbi leo risus</li>
							   <li class="list-group-item">Porta ac consectetur ac<span class="badge">1224</span></li>
							   <li class="list-group-item">Vestibulum at eros</li>
							</ul>
						  </div>
						<div class="col-lg-4">
							<div class="list-group">
								<a href="#" class="list-group-item active">Cras justo odio<span class="badge">134</span></a>
								<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
								<a href="#" class="list-group-item">Morbi leo risus</a>
								<a href="#" class="list-group-item">Porta ac consectetur ac<span class="badge">14</span></a>
								<a href="#" class="list-group-item">Vestibulum at eros</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="list-group">
								<a href="#" class="list-group-item active">
									<h4 class="list-group-item-heading">List group item heading</h4>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								</a>
								<a href="#" class="list-group-item">
									<h4 class="list-group-item-heading">List group item heading</h4>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								</a>
								<a href="#" class="list-group-item">
									<h4 class="list-group-item-heading">List group item heading</h4>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								</a>
							</div>
						</div>
					</div>
				</div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-primary" id="panels">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-danger">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-warning">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-info">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">This is a header
                    </div>
						<div class="panel-body">
							<p>This is a panel</p>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">First Item</li>
								<li class="list-group-item">Second Item</li>
								<li class="list-group-item">Third Item</li>
							</ul>
						</div>
                    <div class="panel-footer">This is a footer
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="well" id="wells">Default Well
                </div>
                <div class="well well-sm">Small Well
                </div>
            </div>
            <div class="col-lg-3">
                <div class="well well-lg">Large Padding Well
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Modal</div>
				<div class="panel-body">
					<div class="modal-dialog">
						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
							</div>
							<div class="modal-body">
								<h4>Text in a modal</h4>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

								<h4>Popover in a modal</h4>
								<p>This <a href="#" role="button" class="btn btn-default popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

								<h4>Tooltips in a modal</h4>
								<p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

								<hr>

								<h4>Overflowing text to show scroll behavior</h4>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
								<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
								<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
								<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>

						</div><!-- /.modal-content -->
					</div>
				</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Accordion</div>
				<div class="panel-body">
					<div class="panel-group" id="accordion">
					  <div class="panel">
						<div class="panel-heading">
						  <h3 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							  Collapsible Group Item #1
							</a>
						  </h3>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
						  <div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading">
						  <h3 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							  Collapsible Group Item #2
							</a>
						  </h3>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
						  <div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading">
						  <h3 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							  Collapsible Group Item #3
							</a>
						  </h3>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
						  <div class="panel-body">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						  </div>
						</div>
					  </div>
					</div>
				</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Carousel</div>
				<div class="panel-body">
					<div id="carousel-example-generic" class="carousel slide bs-docs-carousel-example">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
							<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
						</ol>
						<div class="carousel-inner">
							<div class="item">
							   <img class="img-responsive"  src="images/item.png" alt="" >
								<div class="carousel-caption">
									<h3>First slide label</h3>
									<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>
							<div class="item active">
								<img class="img-responsive"  src="images/item.png" alt="" >
							</div>
							<div class="item">
								<img class="img-responsive" src="images/item.png" alt="" >
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="icon-prev"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="icon-next"></span>
						</a>
					</div>
				</div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Thumbnails</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="thumbnail">
							<img class="img-responsive"  src="images/thumb.png" alt="" >
							<div class="caption">
								<h3 class="caption-label">Thumbnail label</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Cancel</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="thumbnail">
							<img class="img-responsive"  src="images/thumb.png" alt="" >
							<div class="caption">
								<h3 class="caption-label">Thumbnail label</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Cancel</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="thumbnail">
							<img class="img-responsive"  src="images/thumb.png" alt="" >
							<div class="caption">
								<h3 class="caption-label">Thumbnail label</h3>
								<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
								<p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn btn-default">Cancel</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>

		<div class="panel panel-primary">
			<div class="panel-heading">
			<h3>Example templates</h3>
				<p class="lead">
					Build on the basic template above with Bootstrap's many components. Check out some of the more advanced tips for how to customize and build on top of them.
				</p>
			</div>
			<div class="panel-body">
				<div class="row">

      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_jumbotron.html" target="_blank">
          <img src="images/examples/jumbotron.jpg" alt="">
        </a>
        <h4>Jumbotron</h4>
        <p>Build around the jumbotron with a navbar and some basic grid columns.</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_jumbotron-narrow.html" target="_blank">
          <img src="images/examples/jumbotron-narrow.jpg" alt="">
        </a>
        <h4>Narrow jumbotron</h4>
        <p>Build a more custom page by narrowing the default container and jumbotron.</p>
      </div>


      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_signin.html" target="_blank">
          <img src="images/examples/sign-in.jpg" alt="">
        </a>
        <h4>Sign-in page</h4>
        <p>Custom form layout and design for a simple sign in form.</p>
      </div>

	  <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_signin_alt.html" target="_blank">
          <img src="images/examples/sign-in.jpg" alt="">
        </a>
        <h4>Sign-in Alt. page</h4>
        <p>Custom form layout and design for a simple sign in form.</p>
      </div>


      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_sticky-footer.html" target="_blank">
          <img src="images/examples/sticky-footer.jpg" alt="">
        </a>
        <h4>Sticky footer</h4>
        <p>Attach a footer to the bottom of the viewport when the content is shorter than it.</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_sticky-footer-navbar.html" target="_blank">
          <img src="images/examples/sticky-footer-navbar.jpg" alt="">
        </a>
        <h4>Sticky footer with navbar</h4>
        <p>Attach a footer to the bottom of the viewport with a fixed navbar at the top.</p>
      </div>
      <div class="clearfix visible-xs"></div>

      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_justified-nav.html" target="_blank">
          <img src="images/examples/justified-nav.jpg" alt="">
        </a>
        <h4>Justified nav</h4>
        <p>Expand on the default navbar and more to create justified navigation links.</p>
      </div>
	  <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_justified-nav_altnav.html" target="_blank">
          <img src="images/examples/justified-nav.jpg" alt="">
        </a>
        <h4>Justified nav Alt.</h4>
        <p>Expand on the default navbar and more to create justified navigation links.</p>
      </div>
      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_offcanvas.html" target="_blank">
          <img src="images/examples/offcanvas.jpg" alt="">
        </a>
        <h4>Offcanvas</h4>
        <p>Build a toggleable off-canvas navigation menu for use with Bootstrap.</p>
      </div>


      <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_carousel.html" target="_blank">
          <img src="images/examples/carousel.jpg" alt="">
        </a>
        <h4>Carousel</h4>
        <p>Customize the navbar and carousel, then add some new components.</p>
      </div>
	  <div class="col-xs-6 col-md-4">
        <a class="thumbnail" href="index_stratched.htm" target="_blank">
          <img src="images/examples/stratched.jpg" alt="">
        </a>
        <h4>Carousel</h4>
        <p>Customize the navbar and carousel, then add some new components.</p>
      </div>

	  <div class="col-xs-6 col-md-4">
        <div class="panel panel-primary" style="margin-top:10px;">
          <div class="panel-heading">
			<h4>Need more themes?</h4>
		  </div>
		  <div class="panel-body">
			Get more premium Bootstrap 3.0. themes, skins &amp; templates on <a href="http://www.bootstraptor.com" target="_blank"> www.bootstraptor.com</a>
		  </div>
		  <div class="panel-footer">
			<a class="btn btn-block btn-primary btn-large" href="http://www.bootstraptor.com" target="_blank">SEE MORE THEMES</a>
		  </div>
        </div>

      </div>

				</div>
			</div>
		</div>
		</div>
  </section>

  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
