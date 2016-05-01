<div class="form-group">
	<form method="POST" action="/tli/signup" name="signupForm">
		<label for="firstname">Prenom</label>
		<input type="text" class="form-control" name="firstname" placeholder="Jean" id="firstname" aria-describedby="firstname-tip" required>
		<span role="tooltip" id="firstname-tip">Votre pr&#233;nom</span>

		<label for="lastname">Nom</label>
		<input type="text" class="form-control" name="lastname" placeholder="Paul" id="lastname" aria-describedby="lastname-tip" required>
		<span role="tooltip" id="lastname-tip">Votre nom</span>

		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="jean.paul@example.com" id="email" aria-describedby="email-tip" required>
		<span role="tooltip" id="email-tip">Votre adresse mail</span>

		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password" id="password2" aria-describedby="password2-tip" required>
		<span role="tooltip" id="password2-tip">Votre mot de passe</span>

		<input type="submit" id="submitBTN" class="button-submit btn btn-default pull-right" value="S'inscrire" onclick="validate(this)">
		<input type="hidden" name="action" value="signUp">
		<input type="hidden" name="kind_action" value="auth">
	</form>
</div>
