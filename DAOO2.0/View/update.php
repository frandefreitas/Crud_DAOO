<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Usuário</title>
</head>

<body>
<form action="./usuario.php" method="post">
<!-- ta CHAMANDO na index embora ser view -->
       <?php        
       
   foreach ($retorno as $registrosfeitos){
        ?>
Nome <input type ="text" name="nome" value="<?php echo $registrosfeitos['nome']; ?>" />
Endereco <input type ="text" name="endereco" value="<?php echo $registrosfeitos['endereco']; ?>" />
Email <input type = "text" name="email" value="<?php echo $registrosfeitos['email'];?>" />
Sexo <input type = "text" name="sexo" value="<?php echo $registrosfeitos['sexo'];?>" />
CPF <input type = "text" name="cpf" value="<?php echo $registrosfeitos['cpf'];?>" />
<input type = "hidden" name="id" value="<?php echo $registrosfeitos['id']; ?>" />
<input type = "submit" name="acao" value="Editar" />

   <?php }   ?>
</form>
</body>
</html>
