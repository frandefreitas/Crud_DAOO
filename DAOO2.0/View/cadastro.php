<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuário</title>
</head>

<body>
<form action="./usuario.php" method="post">
<!-- ta CHAMANDO na index embora ser view -->
Nome <input type ="text" name="nome" />
Endereco <input type ="text" name="endereco" />
Email <input type = "text" name="email" />
Sexo <input type = "text" name="sexo" />
CPF <input type = "text" name="cpf" />

<input type = "submit" name="acao" value="Cadastrar" />
<a href="./usuario.php?tag=listar" > Listar </a>
</form>
</body>
</html>
