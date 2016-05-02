<div class="form-group">
	<form method="POST" action="/tli/signin">
	  <div>
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="Enter email" id="username" aria-describedby="username-tip" required>
		<span role="tooltip" id="username-tip">Votre identifiant est votre adresse mail</span>
	  </div>
	  <div>
		<label for="password" class="mt">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" id="password" aria-described="password-tip" required>
		<span role="tooltip" id="password-tip">Votre mot de passe</span>
		<input type="submit" class="button-submit btn btn-default pull-right" value="Se connecter">
		<input type="hidden" name="action" value="signIn">
		<input type="hidden" name="kind_action" value="auth">
	  </div>
	</form>
</div>

