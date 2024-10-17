<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar usuário</title>

</head>
<body style="background-color: #333; color: white; margin: 70px;">

	<h1>Validar usuário</h1>

	<form action="recebe_usuario.php" method="post">


		<div style="background-color: #171717; padding: 30px; width: 255px; border-radius: 20px;">

		<label for="email">Email:</label>
		<input type="email" name="email" id="email" class="num1" autofocus autocomplete="off" placeholder="user@email.com" required>

		<br><br>

		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="email" class="senha" placeholder="*******" required>

		<br><br>

		<input type="submit" name="enviar" value="Enviar">


		<input type="reset" name="limpar" value="Limpar">

		</div>

	</form>

</body>
</html>
