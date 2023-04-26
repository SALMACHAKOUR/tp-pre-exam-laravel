<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>student login</title>
	<style type="text/css">
		form{
			padding: .8rem;
			background-color: #1951ff44;
			display: flex;
			flex-direction: column;
			width: fit-content;
			height: fit-content;
			position: fixed;
			inset: 0;
			margin: auto;
		}
		input{
			display: block;
			padding: .4rem;
			margin: .4rem;
		}
		.flex{
			display: flex;
			justify-content: space-between;
		}
		.input-label{
			display: flex;
			flex-direction: column;
		}
		label{
			font-weight: 600;
		}
	</style>
</head>
<body>
	<form action={{route("studentLogin")}} method="POST">
		<h1>Formulaire d'inscription des etudiants</h1>
		<h4>Remplisser soigneusement le formulaire</h4>
		@csrf
		<div class="flex">
			<div class="input-label">
				<label>prenom</label>
				<input type="text" name="firstname">
			</div>
			<div>
				<label>nom</label>
				<input type="text" name="lastname">
			</div>
		</div>
		<div class="flex">
			<div class="input-label">
				<label>sexe</label>
				<input type="text" name="gender">
			</div>
			<div class="input-label">
				<label>email</label>
				<input type="text" name="email">
			</div>
		</div>
		<input type="submit" name="soumettre l'inscription">
	</form>
</body>
</html>