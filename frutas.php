<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar usuário</title>

</head>
<body style="background-color: #333; color: white; margin: 70px;">

		<form action="escolha_fruta.php" method="post">

		<div style="background-color: #FFFF; border-radius: 20px; color: black;">
			<table>
				<tr>
					<th>Código</th>
					<th>Imagem</th>
					<th>Nome</th>
				</tr>
				<tr>
					<td>1</td>
					<td><div><img src="img/abacaxi.jpg" width="85px" height="85px"></div></td>
					<td>Abacaxi</td>
				</tr>
				<tr>
					<td>2</td>
					<td><div><img src="img/banana.jfif" width="85px" height="85px"></div></td>
					<td>Banana</td>
				</tr>
				<tr>
					<td>3</td>
					<td><div><img src="img/morango.jpg" width="85px" height="85px"></div></td>
					<td>Morango</td>
				</tr>
				<tr>
					<td>4</td>
					<td><div><img src="img/maracuja.webp" width="85px" height="85px"></div></td>
					<td>Maracujá</td>
				</tr>
				<tr>
					<td>5</td>
					<td><div><img src="img/pera.webp" width="85px" height="85px"></div></td>
					<td>Pera</td>
				</tr>
			</table>
			
		</div>

		<label for="efruta">Sua escolha:</label>
		<input type="number" name="fruta" id="efruta"><br>
		<input type="submit" name="enviar">


	</form>

</body>
</html>
