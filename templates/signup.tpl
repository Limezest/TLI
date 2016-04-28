<div class="form-group">
	<form method="POST" action="index.php?page=signup">
		<label for="firstname">Prenom</label>
		<input type="text" class="form-control" name="firstname" placeholder="Jean">
		<label for="lastname">Nom</label>
		<input type="text" class="form-control" name="lastname" placeholder="Paul">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="jean.paul@example.com">
		<label for="password">Mot de passe</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
		<input type="submit" class="button-submit btn btn-default pull-right" value="S'inscrire">
		<input type="hidden" name="action" value="signUp">
		<input type="hidden" name="kind_action" value="auth">
	</form>
</div>
