<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

	<style>
		body  {
  		background-image: url("img/login2.jpg");
		}
	</style>
	<meta charset="utf-8">
	<title>Tela de Login</title>
</head>
<body>
	<div class="login">
		<img src="img/user.png" class="usuario" width="100" height="100" alt="">
		
		<h1>Login</h1>
			<form action="processa_login.php" method="post">
				<p>Email</p>
				<input type="text" name="email" placeholder="Digite o seu email">
				<p>Senha</p>
				<input type="password" name="senha" placeholder="Digite a sua senha"> <br>
				<br><input type="submit" value="OK">
			</form>
	</div>
</body>
</html>