<div class="form-group">
	<form method="POST" action="/tli/signup">
		<label for="firstname">Prenom</label>
		<input type="text" class="form-control" name="firstname" placeholder="Jean" id="firstname" aria-describedby="firstname-tip" />
		<span role="tooltip" id="firstname-tip">Your fristname</span>
		<br>
		
		<label for="lastname">Nom</label>
		<input type="text" class="form-control" name="lastname" placeholder="Paul" id="lastname" aria-describedby="lastname-tip" />
		<span role="tooltip" id="lastname-tip">Your lastname</span>
		<br>
		
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="jean.paul@example.com" id="email" aria-describedby="email-tip"  />
		<span role="tooltip" id="email-tip">Your email </span>
		<br>
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" id="password2" aria-describedby="password2-tip"  />
		<span role="tooltip" id="password2-tip">Your password </span>
		<br>
		<input type="submit" class="button-submit btn btn-default pull-right" value="S'inscrire">
		<input type="hidden" name="action" value="signUp">
		<input type="hidden" name="kind_action" value="auth">
	</form>
</div>
