<?php
/* Smarty version 3.1.30-dev/53, created on 2016-04-28 17:54:37
  from "/var/www/html/tli/templates/form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_5722869d1efdf8_02796250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db8d40a6466ac9831a30976acaf62550df492c06' => 
    array (
      0 => '/var/www/html/tli/templates/form.tpl',
      1 => 1458825262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5722869d1efdf8_02796250 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
								<input type="password" class="form-control" id="exampleDisabledField" placeholder="Disabled" disabled="" title="overall type: UNKNOWN_TYPE
    server type: NO_SERVER_DATA
    heuristic type: UNKNOWN_TYPE
    field signature: 3221704879
    form signature: 4190206087986010408">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">File input</label>
								<input type="file" id="exampleInputFile">
								<p class="help-block">Example block-level help text here.</p>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" title="overall type: UNKNOWN_TYPE
    server type: NO_SERVER_DATA
    heuristic type: UNKNOWN_TYPE
    field signature: 1067852723
    form signature: 4190206087986010408">Check me out</label>
								</div>

								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" title="overall type: UNKNOWN_TYPE
    server type: NO_SERVER_DATA
    heuristic type: UNKNOWN_TYPE
    field signature: 3881789494
    form signature: 4190206087986010408">
										Option one is this and that—be sure to include why it's great
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" title="overall type: UNKNOWN_TYPE
    server type: NO_SERVER_DATA
    heuristic type: UNKNOWN_TYPE
    field signature: 3881789494
    form signature: 4190206087986010408">
										Option two can be something else and selecting it will deselect option one
									</label>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-2">
									<select class="form-control" title="overall type: UNKNOWN_TYPE
    server type: NO_SERVER_DATA
    heuristic type: UNKNOWN_TYPE
    field signature: 4203909268
    form signature: 4190206087986010408">
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
        </div><?php }
}
